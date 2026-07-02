<?php

declare(strict_types=1);

namespace Castlegate\SchemaMap\Schema;

use Castlegate\SchemaMap\AbstractSchema;
use Castlegate\SchemaMap\MergeableSchema;
use Castlegate\SchemaMap\Vendor\Spatie\SchemaOrg\Schema;

/**
 * Schema.org FAQPage wrapper.
 *
 * Provides a developer-friendly interface for building an FAQPage schema block
 * without needing to know the underlying spatie/schema-org object graph.
 * Internally, each question/answer pair is converted into nested
 * Question and Answer objects under mainEntity, which is the structure
 * Google requires for FAQ rich results.
 *
 * Implements {@see MergeableSchema} so that questions registered from multiple
 * templates or page-builder blocks are consolidated into a single FAQPage
 * block rather than producing one block per registration.
 *
 * @link https://schema.org/FAQPage
 */
class FaqPage extends AbstractSchema implements MergeableSchema
{
    /**
     * Flat list of question/answer pairs, each a map with 'question' and
     * 'answer' string keys.
     *
     * @var array<int, array{question: string, answer: string}>
     */
    private array $questions = [];

    /**
     * Add a question/answer pair to the FAQ.
     *
     * @param string $question The question text (maps to Question->name).
     * @param string $answer   The answer text (maps to Answer->text).
     * @return void
     */
    public function addQuestion(string $question, string $answer): void
    {
        $this->questions[] = ['question' => $question, 'answer' => $answer];
    }

    /**
     * Return whether no questions have been added yet.
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->questions);
    }

    /**
     * Merge the questions from another FaqPage instance into this one.
     *
     * PHP allows access to private members of the same class across instances,
     * so $other->questions is directly readable here without a getter.
     *
     * @param AbstractSchema $other The FaqPage instance to absorb. Instances
     *                              of any other type are silently ignored.
     * @return void
     */
    public function mergeWith(AbstractSchema $other): void
    {
        if ($other instanceof self) {
            // Directly accessing $other->questions is valid because both
            // objects are instances of the same class.
            $this->questions = array_merge($this->questions, $other->questions);
        }
    }

    /**
     * Build and return the spatie/schema-org FAQPage object.
     *
     * The flat $questions array is converted into the nested structure that
     * Google requires: each pair becomes a Question object with an embedded
     * Answer, and the full list is attached to the FAQPage via mainEntity.
     *
     * @return mixed
     */
    public function toSpatieObject(): mixed
    {
        // Convert each flat question/answer pair into a spatie Question object
        // with a nested Answer, hiding the mainEntity nesting from callers.
        $questions = array_map(
            fn(array $item) => Schema::question()
                ->name($item['question'])
                ->acceptedAnswer(Schema::answer()->text($item['answer'])),
            $this->questions
        );

        return Schema::faqPage()->mainEntity($questions);
    }
}
