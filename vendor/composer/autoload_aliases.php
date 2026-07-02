<?php



namespace Castlegate\SchemaMap\Vendor {

    use BrianHenryIE\Strauss\Types\AutoloadAliasInterface;

    /**
     * @see AutoloadAliasInterface
     *
     * @phpstan-type ClassAliasArray array{'type':'class',isabstract:bool,classname:string,namespace?:string,extends:string,implements:array<string>}
     * @phpstan-type InterfaceAliasArray array{'type':'interface',interfacename:string,namespace?:string,extends:array<string>}
     * @phpstan-type TraitAliasArray array{'type':'trait',traitname:string,namespace?:string,use:array<string>}
     * @phpstan-type AutoloadAliasArray array<string,ClassAliasArray|InterfaceAliasArray|TraitAliasArray>
     */
    class AliasAutoloader
    {
        private string $includeFilePath;

        /**
         * @var AutoloadAliasArray
         */
        private array $autoloadAliases = array (
  'Spatie\\SchemaOrg\\Generator\\Console\\Application' => 
  array (
    'type' => 'class',
    'classname' => 'Application',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Console',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Console\\Application',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Console\\GenerateCommand' => 
  array (
    'type' => 'class',
    'classname' => 'GenerateCommand',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Console',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Console\\GenerateCommand',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Constant' => 
  array (
    'type' => 'class',
    'classname' => 'Constant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Constant',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Definitions' => 
  array (
    'type' => 'class',
    'classname' => 'Definitions',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Definitions',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\PackageGenerator' => 
  array (
    'type' => 'class',
    'classname' => 'PackageGenerator',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\PackageGenerator',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\DefinitionParser' => 
  array (
    'type' => 'class',
    'classname' => 'DefinitionParser',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\DefinitionParser',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\JsonLdParser' => 
  array (
    'type' => 'class',
    'classname' => 'JsonLdParser',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\JsonLdParser',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseConstant' => 
  array (
    'type' => 'class',
    'classname' => 'ParseConstant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseConstant',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseProperty' => 
  array (
    'type' => 'class',
    'classname' => 'ParseProperty',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseProperty',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseType' => 
  array (
    'type' => 'class',
    'classname' => 'ParseType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\ParseType',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\Task' => 
  array (
    'type' => 'class',
    'classname' => 'Task',
    'isabstract' => true,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Parser\\Tasks',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Parser\\Tasks\\Task',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Property' => 
  array (
    'type' => 'class',
    'classname' => 'Property',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Property',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Type' => 
  array (
    'type' => 'class',
    'classname' => 'Type',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Type',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\TypeCollection' => 
  array (
    'type' => 'class',
    'classname' => 'TypeCollection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\TypeCollection',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Writer\\Filesystem' => 
  array (
    'type' => 'class',
    'classname' => 'Filesystem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Writer',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Writer\\Filesystem',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Writer\\Filters' => 
  array (
    'type' => 'class',
    'classname' => 'Filters',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Writer',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Writer\\Filters',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Generator\\Writer\\Template' => 
  array (
    'type' => 'class',
    'classname' => 'Template',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Generator\\Writer',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Generator\\Writer\\Template',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\BaseType' => 
  array (
    'type' => 'class',
    'classname' => 'BaseType',
    'isabstract' => true,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BaseType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Type',
      1 => 'ArrayAccess',
      2 => 'JsonSerializable',
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\InvalidProperty' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidProperty',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\InvalidProperty',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\InvalidType' => 
  array (
    'type' => 'class',
    'classname' => 'InvalidType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\InvalidType',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\TypeAlreadyInGraph' => 
  array (
    'type' => 'class',
    'classname' => 'TypeAlreadyInGraph',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\TypeAlreadyInGraph',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\TypeAlreadyInMultiTypedEntity' => 
  array (
    'type' => 'class',
    'classname' => 'TypeAlreadyInMultiTypedEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\TypeAlreadyInMultiTypedEntity',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\TypeNotInGraph' => 
  array (
    'type' => 'class',
    'classname' => 'TypeNotInGraph',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\TypeNotInGraph',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\Exceptions\\TypeNotInMultiTypedEntity' => 
  array (
    'type' => 'class',
    'classname' => 'TypeNotInMultiTypedEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg\\Exceptions',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Exceptions\\TypeNotInMultiTypedEntity',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\ReferencedType' => 
  array (
    'type' => 'class',
    'classname' => 'ReferencedType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReferencedType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Type',
      1 => 'JsonSerializable',
    ),
  ),
  'Spatie\\SchemaOrg\\AMRadioChannel' => 
  array (
    'type' => 'class',
    'classname' => 'AMRadioChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AMRadioChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AMRadioChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RadioChannelContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\APIReference' => 
  array (
    'type' => 'class',
    'classname' => 'APIReference',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\APIReference',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\APIReferenceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TechArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AboutPage' => 
  array (
    'type' => 'class',
    'classname' => 'AboutPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AboutPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AboutPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AcceptAction' => 
  array (
    'type' => 'class',
    'classname' => 'AcceptAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AcceptAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AcceptActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Accommodation' => 
  array (
    'type' => 'class',
    'classname' => 'Accommodation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Accommodation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AccountingService' => 
  array (
    'type' => 'class',
    'classname' => 'AccountingService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AccountingService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AccountingServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AchieveAction' => 
  array (
    'type' => 'class',
    'classname' => 'AchieveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AchieveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AchieveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Action' => 
  array (
    'type' => 'class',
    'classname' => 'Action',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Action',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ActionAccessSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'ActionAccessSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ActionAccessSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ActionAccessSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ActionStatusType' => 
  array (
    'type' => 'class',
    'classname' => 'ActionStatusType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ActionStatusType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ActionStatusTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ActivateAction' => 
  array (
    'type' => 'class',
    'classname' => 'ActivateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ActivateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ActivateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AddAction' => 
  array (
    'type' => 'class',
    'classname' => 'AddAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AddAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AddActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AdministrativeArea' => 
  array (
    'type' => 'class',
    'classname' => 'AdministrativeArea',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AdministrativeArea',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AdultEntertainment' => 
  array (
    'type' => 'class',
    'classname' => 'AdultEntertainment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AdultEntertainment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AdultEntertainmentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AdultOrientedEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'AdultOrientedEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AdultOrientedEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AdultOrientedEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AdvertiserContentArticle' => 
  array (
    'type' => 'class',
    'classname' => 'AdvertiserContentArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AdvertiserContentArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AdvertiserContentArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AggregateOffer' => 
  array (
    'type' => 'class',
    'classname' => 'AggregateOffer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AggregateOffer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AggregateOfferContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OfferContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AggregateRating' => 
  array (
    'type' => 'class',
    'classname' => 'AggregateRating',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AggregateRating',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AggregateRatingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\RatingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AgreeAction' => 
  array (
    'type' => 'class',
    'classname' => 'AgreeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AgreeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AgreeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Airline' => 
  array (
    'type' => 'class',
    'classname' => 'Airline',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Airline',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AirlineContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Airport' => 
  array (
    'type' => 'class',
    'classname' => 'Airport',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Airport',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AirportContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AlignmentObject' => 
  array (
    'type' => 'class',
    'classname' => 'AlignmentObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AlignmentObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AlignmentObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AllocateAction' => 
  array (
    'type' => 'class',
    'classname' => 'AllocateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AllocateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AmpStory' => 
  array (
    'type' => 'class',
    'classname' => 'AmpStory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AmpStory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AmpStoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AmusementPark' => 
  array (
    'type' => 'class',
    'classname' => 'AmusementPark',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AmusementPark',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AmusementParkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AnalysisNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'AnalysisNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AnalysisNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AnalysisNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AnatomicalStructure' => 
  array (
    'type' => 'class',
    'classname' => 'AnatomicalStructure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AnatomicalStructure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AnatomicalSystem' => 
  array (
    'type' => 'class',
    'classname' => 'AnatomicalSystem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AnatomicalSystem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalSystemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AnimalShelter' => 
  array (
    'type' => 'class',
    'classname' => 'AnimalShelter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AnimalShelter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AnimalShelterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Answer' => 
  array (
    'type' => 'class',
    'classname' => 'Answer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Answer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AnswerContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CommentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Apartment' => 
  array (
    'type' => 'class',
    'classname' => 'Apartment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Apartment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ApartmentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ApartmentComplex' => 
  array (
    'type' => 'class',
    'classname' => 'ApartmentComplex',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ApartmentComplex',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ApartmentComplexContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ResidenceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AppendAction' => 
  array (
    'type' => 'class',
    'classname' => 'AppendAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AppendAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AppendActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AddActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InsertActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ApplyAction' => 
  array (
    'type' => 'class',
    'classname' => 'ApplyAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ApplyAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ApplyActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ApprovedIndication' => 
  array (
    'type' => 'class',
    'classname' => 'ApprovedIndication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ApprovedIndication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ApprovedIndicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Aquarium' => 
  array (
    'type' => 'class',
    'classname' => 'Aquarium',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Aquarium',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AquariumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ArchiveComponent' => 
  array (
    'type' => 'class',
    'classname' => 'ArchiveComponent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ArchiveComponent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArchiveComponentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ArchiveOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'ArchiveOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ArchiveOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArchiveOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ArriveAction' => 
  array (
    'type' => 'class',
    'classname' => 'ArriveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ArriveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArriveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MoveActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ArtGallery' => 
  array (
    'type' => 'class',
    'classname' => 'ArtGallery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ArtGallery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArtGalleryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Artery' => 
  array (
    'type' => 'class',
    'classname' => 'Artery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Artery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArteryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\VesselContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Article' => 
  array (
    'type' => 'class',
    'classname' => 'Article',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Article',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AskAction' => 
  array (
    'type' => 'class',
    'classname' => 'AskAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AskAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AskActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AskPublicNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'AskPublicNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AskPublicNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AskPublicNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AssessAction' => 
  array (
    'type' => 'class',
    'classname' => 'AssessAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AssessAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AssignAction' => 
  array (
    'type' => 'class',
    'classname' => 'AssignAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AssignAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AssignActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Atlas' => 
  array (
    'type' => 'class',
    'classname' => 'Atlas',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Atlas',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AtlasContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Attorney' => 
  array (
    'type' => 'class',
    'classname' => 'Attorney',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Attorney',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AttorneyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LegalServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Audience' => 
  array (
    'type' => 'class',
    'classname' => 'Audience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Audience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AudioObject' => 
  array (
    'type' => 'class',
    'classname' => 'AudioObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AudioObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AudioObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AudioObjectSnapshot' => 
  array (
    'type' => 'class',
    'classname' => 'AudioObjectSnapshot',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AudioObjectSnapshot',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AudioObjectSnapshotContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudioObjectContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Audiobook' => 
  array (
    'type' => 'class',
    'classname' => 'Audiobook',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Audiobook',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AudiobookContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudioObjectContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\BookContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AuthorizeAction' => 
  array (
    'type' => 'class',
    'classname' => 'AuthorizeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AuthorizeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AuthorizeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoBodyShop' => 
  array (
    'type' => 'class',
    'classname' => 'AutoBodyShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoBodyShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoBodyShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoDealer' => 
  array (
    'type' => 'class',
    'classname' => 'AutoDealer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoDealer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoDealerContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoPartsStore' => 
  array (
    'type' => 'class',
    'classname' => 'AutoPartsStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoPartsStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoPartsStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoRental' => 
  array (
    'type' => 'class',
    'classname' => 'AutoRental',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoRental',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoRentalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoRepair' => 
  array (
    'type' => 'class',
    'classname' => 'AutoRepair',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoRepair',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoRepairContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutoWash' => 
  array (
    'type' => 'class',
    'classname' => 'AutoWash',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutoWash',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutoWashContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutomatedTeller' => 
  array (
    'type' => 'class',
    'classname' => 'AutomatedTeller',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutomatedTeller',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutomatedTellerContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\AutomotiveBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'AutomotiveBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\AutomotiveBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BackgroundNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'BackgroundNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BackgroundNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BackgroundNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Bakery' => 
  array (
    'type' => 'class',
    'classname' => 'Bakery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Bakery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BakeryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BankAccount' => 
  array (
    'type' => 'class',
    'classname' => 'BankAccount',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BankAccount',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BankAccountContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BankOrCreditUnion' => 
  array (
    'type' => 'class',
    'classname' => 'BankOrCreditUnion',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BankOrCreditUnion',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BankOrCreditUnionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BarOrPub' => 
  array (
    'type' => 'class',
    'classname' => 'BarOrPub',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BarOrPub',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BarOrPubContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Barcode' => 
  array (
    'type' => 'class',
    'classname' => 'Barcode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Barcode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BarcodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ImageObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Beach' => 
  array (
    'type' => 'class',
    'classname' => 'Beach',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Beach',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BeachContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BeautySalon' => 
  array (
    'type' => 'class',
    'classname' => 'BeautySalon',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BeautySalon',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BeautySalonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BedAndBreakfast' => 
  array (
    'type' => 'class',
    'classname' => 'BedAndBreakfast',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BedAndBreakfast',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BedAndBreakfastContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BedDetails' => 
  array (
    'type' => 'class',
    'classname' => 'BedDetails',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BedDetails',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BedDetailsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BedType' => 
  array (
    'type' => 'class',
    'classname' => 'BedType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BedType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BedTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BefriendAction' => 
  array (
    'type' => 'class',
    'classname' => 'BefriendAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BefriendAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BefriendActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BikeStore' => 
  array (
    'type' => 'class',
    'classname' => 'BikeStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BikeStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BikeStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BioChemEntity' => 
  array (
    'type' => 'class',
    'classname' => 'BioChemEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BioChemEntity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Blog' => 
  array (
    'type' => 'class',
    'classname' => 'Blog',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Blog',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BlogContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BlogPosting' => 
  array (
    'type' => 'class',
    'classname' => 'BlogPosting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BlogPosting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BlogPostingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BloodTest' => 
  array (
    'type' => 'class',
    'classname' => 'BloodTest',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BloodTest',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BloodTestContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BoardingPolicyType' => 
  array (
    'type' => 'class',
    'classname' => 'BoardingPolicyType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BoardingPolicyType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BoardingPolicyTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BoatReservation' => 
  array (
    'type' => 'class',
    'classname' => 'BoatReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BoatReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BoatReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BoatTerminal' => 
  array (
    'type' => 'class',
    'classname' => 'BoatTerminal',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BoatTerminal',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BoatTerminalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BoatTrip' => 
  array (
    'type' => 'class',
    'classname' => 'BoatTrip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BoatTrip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BoatTripContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BodyMeasurementTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'BodyMeasurementTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BodyMeasurementTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BodyMeasurementTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MeasurementTypeEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BodyOfWater' => 
  array (
    'type' => 'class',
    'classname' => 'BodyOfWater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BodyOfWater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Bone' => 
  array (
    'type' => 'class',
    'classname' => 'Bone',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Bone',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BoneContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Book' => 
  array (
    'type' => 'class',
    'classname' => 'Book',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Book',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BookContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BookFormatType' => 
  array (
    'type' => 'class',
    'classname' => 'BookFormatType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BookFormatType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BookFormatTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BookSeries' => 
  array (
    'type' => 'class',
    'classname' => 'BookSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BookSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BookSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BookStore' => 
  array (
    'type' => 'class',
    'classname' => 'BookStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BookStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BookStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BookmarkAction' => 
  array (
    'type' => 'class',
    'classname' => 'BookmarkAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BookmarkAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BookmarkActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BorrowAction' => 
  array (
    'type' => 'class',
    'classname' => 'BorrowAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BorrowAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BorrowActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BowlingAlley' => 
  array (
    'type' => 'class',
    'classname' => 'BowlingAlley',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BowlingAlley',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BowlingAlleyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BrainStructure' => 
  array (
    'type' => 'class',
    'classname' => 'BrainStructure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BrainStructure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BrainStructureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Brand' => 
  array (
    'type' => 'class',
    'classname' => 'Brand',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Brand',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BrandContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BreadcrumbList' => 
  array (
    'type' => 'class',
    'classname' => 'BreadcrumbList',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BreadcrumbList',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BreadcrumbListContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ItemListContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Brewery' => 
  array (
    'type' => 'class',
    'classname' => 'Brewery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Brewery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BreweryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Bridge' => 
  array (
    'type' => 'class',
    'classname' => 'Bridge',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Bridge',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BridgeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BroadcastChannel' => 
  array (
    'type' => 'class',
    'classname' => 'BroadcastChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BroadcastChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BroadcastEvent' => 
  array (
    'type' => 'class',
    'classname' => 'BroadcastEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BroadcastEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PublicationEventContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BroadcastFrequencySpecification' => 
  array (
    'type' => 'class',
    'classname' => 'BroadcastFrequencySpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BroadcastFrequencySpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastFrequencySpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BroadcastService' => 
  array (
    'type' => 'class',
    'classname' => 'BroadcastService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BroadcastService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BrokerageAccount' => 
  array (
    'type' => 'class',
    'classname' => 'BrokerageAccount',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BrokerageAccount',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BrokerageAccountContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BuddhistTemple' => 
  array (
    'type' => 'class',
    'classname' => 'BuddhistTemple',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BuddhistTemple',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BuddhistTempleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusOrCoach' => 
  array (
    'type' => 'class',
    'classname' => 'BusOrCoach',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusOrCoach',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusOrCoachContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\VehicleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusReservation' => 
  array (
    'type' => 'class',
    'classname' => 'BusReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusStation' => 
  array (
    'type' => 'class',
    'classname' => 'BusStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusStop' => 
  array (
    'type' => 'class',
    'classname' => 'BusStop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusStop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusStopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusTrip' => 
  array (
    'type' => 'class',
    'classname' => 'BusTrip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusTrip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusTripContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusinessAudience' => 
  array (
    'type' => 'class',
    'classname' => 'BusinessAudience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusinessAudience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusinessAudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusinessEntityType' => 
  array (
    'type' => 'class',
    'classname' => 'BusinessEntityType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusinessEntityType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusinessEntityTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusinessEvent' => 
  array (
    'type' => 'class',
    'classname' => 'BusinessEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusinessEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusinessEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BusinessFunction' => 
  array (
    'type' => 'class',
    'classname' => 'BusinessFunction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BusinessFunction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BusinessFunctionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\BuyAction' => 
  array (
    'type' => 'class',
    'classname' => 'BuyAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\BuyAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\BuyActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CDCPMDRecord' => 
  array (
    'type' => 'class',
    'classname' => 'CDCPMDRecord',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CDCPMDRecord',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CDCPMDRecordContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CableOrSatelliteService' => 
  array (
    'type' => 'class',
    'classname' => 'CableOrSatelliteService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CableOrSatelliteService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CableOrSatelliteServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CafeOrCoffeeShop' => 
  array (
    'type' => 'class',
    'classname' => 'CafeOrCoffeeShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CafeOrCoffeeShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CafeOrCoffeeShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Campground' => 
  array (
    'type' => 'class',
    'classname' => 'Campground',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Campground',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CampgroundContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CampingPitch' => 
  array (
    'type' => 'class',
    'classname' => 'CampingPitch',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CampingPitch',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CampingPitchContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Canal' => 
  array (
    'type' => 'class',
    'classname' => 'Canal',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Canal',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CanalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CancelAction' => 
  array (
    'type' => 'class',
    'classname' => 'CancelAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CancelAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CancelActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlanActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Car' => 
  array (
    'type' => 'class',
    'classname' => 'Car',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Car',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CarContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\VehicleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CarUsageType' => 
  array (
    'type' => 'class',
    'classname' => 'CarUsageType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CarUsageType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CarUsageTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Casino' => 
  array (
    'type' => 'class',
    'classname' => 'Casino',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Casino',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CasinoContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CategoryCode' => 
  array (
    'type' => 'class',
    'classname' => 'CategoryCode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CategoryCode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CategoryCodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\DefinedTermContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CategoryCodeSet' => 
  array (
    'type' => 'class',
    'classname' => 'CategoryCodeSet',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CategoryCodeSet',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CategoryCodeSetContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DefinedTermSetContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CatholicChurch' => 
  array (
    'type' => 'class',
    'classname' => 'CatholicChurch',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CatholicChurch',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CatholicChurchContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ChurchContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Cemetery' => 
  array (
    'type' => 'class',
    'classname' => 'Cemetery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Cemetery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CemeteryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Certification' => 
  array (
    'type' => 'class',
    'classname' => 'Certification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Certification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CertificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CertificationStatusEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'CertificationStatusEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CertificationStatusEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CertificationStatusEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Chapter' => 
  array (
    'type' => 'class',
    'classname' => 'Chapter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Chapter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChapterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CheckAction' => 
  array (
    'type' => 'class',
    'classname' => 'CheckAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CheckAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CheckActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\FindActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CheckInAction' => 
  array (
    'type' => 'class',
    'classname' => 'CheckInAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CheckInAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CheckInActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CheckOutAction' => 
  array (
    'type' => 'class',
    'classname' => 'CheckOutAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CheckOutAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CheckOutActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CheckoutPage' => 
  array (
    'type' => 'class',
    'classname' => 'CheckoutPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CheckoutPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CheckoutPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ChemicalSubstance' => 
  array (
    'type' => 'class',
    'classname' => 'ChemicalSubstance',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ChemicalSubstance',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChemicalSubstanceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ChildCare' => 
  array (
    'type' => 'class',
    'classname' => 'ChildCare',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ChildCare',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChildCareContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ChildrensEvent' => 
  array (
    'type' => 'class',
    'classname' => 'ChildrensEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ChildrensEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChildrensEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ChooseAction' => 
  array (
    'type' => 'class',
    'classname' => 'ChooseAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ChooseAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChooseActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Church' => 
  array (
    'type' => 'class',
    'classname' => 'Church',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Church',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ChurchContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\City' => 
  array (
    'type' => 'class',
    'classname' => 'City',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\City',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CityHall' => 
  array (
    'type' => 'class',
    'classname' => 'CityHall',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CityHall',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CityHallContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CivicStructure' => 
  array (
    'type' => 'class',
    'classname' => 'CivicStructure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CivicStructure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Claim' => 
  array (
    'type' => 'class',
    'classname' => 'Claim',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Claim',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ClaimContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ClaimReview' => 
  array (
    'type' => 'class',
    'classname' => 'ClaimReview',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ClaimReview',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ClaimReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Clip' => 
  array (
    'type' => 'class',
    'classname' => 'Clip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Clip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ClipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ClothingStore' => 
  array (
    'type' => 'class',
    'classname' => 'ClothingStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ClothingStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ClothingStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Code' => 
  array (
    'type' => 'class',
    'classname' => 'Code',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Code',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Collection' => 
  array (
    'type' => 'class',
    'classname' => 'Collection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Collection',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CollectionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CollectionPage' => 
  array (
    'type' => 'class',
    'classname' => 'CollectionPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CollectionPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CollectionPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CollegeOrUniversity' => 
  array (
    'type' => 'class',
    'classname' => 'CollegeOrUniversity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CollegeOrUniversity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CollegeOrUniversityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComedyClub' => 
  array (
    'type' => 'class',
    'classname' => 'ComedyClub',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComedyClub',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComedyClubContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComedyEvent' => 
  array (
    'type' => 'class',
    'classname' => 'ComedyEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComedyEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComedyEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComicCoverArt' => 
  array (
    'type' => 'class',
    'classname' => 'ComicCoverArt',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComicCoverArt',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComicCoverArtContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ComicStoryContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CoverArtContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\VisualArtworkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComicIssue' => 
  array (
    'type' => 'class',
    'classname' => 'ComicIssue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComicIssue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComicIssueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PublicationIssueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComicSeries' => 
  array (
    'type' => 'class',
    'classname' => 'ComicSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComicSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComicSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PeriodicalContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComicStory' => 
  array (
    'type' => 'class',
    'classname' => 'ComicStory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComicStory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComicStoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Comment' => 
  array (
    'type' => 'class',
    'classname' => 'Comment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Comment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CommentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CommentAction' => 
  array (
    'type' => 'class',
    'classname' => 'CommentAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CommentAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CommentActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CommunicateAction' => 
  array (
    'type' => 'class',
    'classname' => 'CommunicateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CommunicateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CompleteDataFeed' => 
  array (
    'type' => 'class',
    'classname' => 'CompleteDataFeed',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CompleteDataFeed',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CompleteDataFeedContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DataFeedContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\DatasetContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CompoundPriceSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'CompoundPriceSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CompoundPriceSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CompoundPriceSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComputerLanguage' => 
  array (
    'type' => 'class',
    'classname' => 'ComputerLanguage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComputerLanguage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComputerLanguageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ComputerStore' => 
  array (
    'type' => 'class',
    'classname' => 'ComputerStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ComputerStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ComputerStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ConfirmAction' => 
  array (
    'type' => 'class',
    'classname' => 'ConfirmAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ConfirmAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConfirmActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InformActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Consortium' => 
  array (
    'type' => 'class',
    'classname' => 'Consortium',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Consortium',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConsortiumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ConstraintNode' => 
  array (
    'type' => 'class',
    'classname' => 'ConstraintNode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ConstraintNode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConstraintNodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ConsumeAction' => 
  array (
    'type' => 'class',
    'classname' => 'ConsumeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ConsumeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ContactPage' => 
  array (
    'type' => 'class',
    'classname' => 'ContactPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ContactPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ContactPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ContactPoint' => 
  array (
    'type' => 'class',
    'classname' => 'ContactPoint',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ContactPoint',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ContactPointContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ContactPointOption' => 
  array (
    'type' => 'class',
    'classname' => 'ContactPointOption',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ContactPointOption',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ContactPointOptionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Continent' => 
  array (
    'type' => 'class',
    'classname' => 'Continent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Continent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ContinentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ControlAction' => 
  array (
    'type' => 'class',
    'classname' => 'ControlAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ControlAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ConvenienceStore' => 
  array (
    'type' => 'class',
    'classname' => 'ConvenienceStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ConvenienceStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConvenienceStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Conversation' => 
  array (
    'type' => 'class',
    'classname' => 'Conversation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Conversation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ConversationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CookAction' => 
  array (
    'type' => 'class',
    'classname' => 'CookAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CookAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CookActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Corporation' => 
  array (
    'type' => 'class',
    'classname' => 'Corporation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Corporation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CorporationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CorrectionComment' => 
  array (
    'type' => 'class',
    'classname' => 'CorrectionComment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CorrectionComment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CorrectionCommentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CommentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Country' => 
  array (
    'type' => 'class',
    'classname' => 'Country',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Country',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CountryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Course' => 
  array (
    'type' => 'class',
    'classname' => 'Course',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Course',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CourseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LearningResourceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CourseInstance' => 
  array (
    'type' => 'class',
    'classname' => 'CourseInstance',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CourseInstance',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CourseInstanceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Courthouse' => 
  array (
    'type' => 'class',
    'classname' => 'Courthouse',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Courthouse',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CourthouseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CoverArt' => 
  array (
    'type' => 'class',
    'classname' => 'CoverArt',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CoverArt',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CoverArtContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\VisualArtworkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CovidTestingFacility' => 
  array (
    'type' => 'class',
    'classname' => 'CovidTestingFacility',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CovidTestingFacility',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CovidTestingFacilityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalClinicContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CreateAction' => 
  array (
    'type' => 'class',
    'classname' => 'CreateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CreateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CreativeWork' => 
  array (
    'type' => 'class',
    'classname' => 'CreativeWork',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CreativeWork',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CreativeWorkSeason' => 
  array (
    'type' => 'class',
    'classname' => 'CreativeWorkSeason',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CreativeWorkSeason',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CreativeWorkSeries' => 
  array (
    'type' => 'class',
    'classname' => 'CreativeWorkSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CreativeWorkSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CreditCard' => 
  array (
    'type' => 'class',
    'classname' => 'CreditCard',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CreditCard',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CreditCardContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LoanOrCreditContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PaymentCardContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Crematorium' => 
  array (
    'type' => 'class',
    'classname' => 'Crematorium',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Crematorium',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CrematoriumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CriticReview' => 
  array (
    'type' => 'class',
    'classname' => 'CriticReview',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CriticReview',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CriticReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CssSelectorType' => 
  array (
    'type' => 'class',
    'classname' => 'CssSelectorType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CssSelectorType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CssSelectorTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\CurrencyConversionService' => 
  array (
    'type' => 'class',
    'classname' => 'CurrencyConversionService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\CurrencyConversionService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\CurrencyConversionServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DDxElement' => 
  array (
    'type' => 'class',
    'classname' => 'DDxElement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DDxElement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DDxElementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DanceEvent' => 
  array (
    'type' => 'class',
    'classname' => 'DanceEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DanceEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DanceEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DanceGroup' => 
  array (
    'type' => 'class',
    'classname' => 'DanceGroup',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DanceGroup',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DanceGroupContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DataCatalog' => 
  array (
    'type' => 'class',
    'classname' => 'DataCatalog',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DataCatalog',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DataCatalogContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DataDownload' => 
  array (
    'type' => 'class',
    'classname' => 'DataDownload',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DataDownload',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DataDownloadContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DataFeed' => 
  array (
    'type' => 'class',
    'classname' => 'DataFeed',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DataFeed',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DataFeedContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DatasetContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DataFeedItem' => 
  array (
    'type' => 'class',
    'classname' => 'DataFeedItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DataFeedItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DataFeedItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Dataset' => 
  array (
    'type' => 'class',
    'classname' => 'Dataset',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Dataset',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DatasetContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DatedMoneySpecification' => 
  array (
    'type' => 'class',
    'classname' => 'DatedMoneySpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DatedMoneySpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DatedMoneySpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DayOfWeek' => 
  array (
    'type' => 'class',
    'classname' => 'DayOfWeek',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DayOfWeek',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DayOfWeekContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DaySpa' => 
  array (
    'type' => 'class',
    'classname' => 'DaySpa',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DaySpa',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DaySpaContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeactivateAction' => 
  array (
    'type' => 'class',
    'classname' => 'DeactivateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeactivateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeactivateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DefenceEstablishment' => 
  array (
    'type' => 'class',
    'classname' => 'DefenceEstablishment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DefenceEstablishment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DefenceEstablishmentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DefinedRegion' => 
  array (
    'type' => 'class',
    'classname' => 'DefinedRegion',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DefinedRegion',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DefinedRegionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DefinedTerm' => 
  array (
    'type' => 'class',
    'classname' => 'DefinedTerm',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DefinedTerm',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DefinedTermContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DefinedTermSet' => 
  array (
    'type' => 'class',
    'classname' => 'DefinedTermSet',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DefinedTermSet',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DefinedTermSetContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeleteAction' => 
  array (
    'type' => 'class',
    'classname' => 'DeleteAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeleteAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeleteActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeliveryChargeSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'DeliveryChargeSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeliveryChargeSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeliveryChargeSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeliveryEvent' => 
  array (
    'type' => 'class',
    'classname' => 'DeliveryEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeliveryEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeliveryEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeliveryMethod' => 
  array (
    'type' => 'class',
    'classname' => 'DeliveryMethod',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeliveryMethod',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeliveryMethodContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DeliveryTimeSettings' => 
  array (
    'type' => 'class',
    'classname' => 'DeliveryTimeSettings',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DeliveryTimeSettings',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DeliveryTimeSettingsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Demand' => 
  array (
    'type' => 'class',
    'classname' => 'Demand',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Demand',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DemandContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Dentist' => 
  array (
    'type' => 'class',
    'classname' => 'Dentist',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Dentist',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DentistContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DepartAction' => 
  array (
    'type' => 'class',
    'classname' => 'DepartAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DepartAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DepartActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MoveActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DepartmentStore' => 
  array (
    'type' => 'class',
    'classname' => 'DepartmentStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DepartmentStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DepartmentStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DepositAccount' => 
  array (
    'type' => 'class',
    'classname' => 'DepositAccount',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DepositAccount',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DepositAccountContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BankAccountContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DiagnosticLab' => 
  array (
    'type' => 'class',
    'classname' => 'DiagnosticLab',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DiagnosticLab',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DiagnosticLabContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DiagnosticProcedure' => 
  array (
    'type' => 'class',
    'classname' => 'DiagnosticProcedure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DiagnosticProcedure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DiagnosticProcedureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Diet' => 
  array (
    'type' => 'class',
    'classname' => 'Diet',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Diet',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DietContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DietarySupplement' => 
  array (
    'type' => 'class',
    'classname' => 'DietarySupplement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DietarySupplement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DietarySupplementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SubstanceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DigitalDocument' => 
  array (
    'type' => 'class',
    'classname' => 'DigitalDocument',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DigitalDocument',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DigitalDocumentPermission' => 
  array (
    'type' => 'class',
    'classname' => 'DigitalDocumentPermission',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DigitalDocumentPermission',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DigitalDocumentPermissionType' => 
  array (
    'type' => 'class',
    'classname' => 'DigitalDocumentPermissionType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DigitalDocumentPermissionType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DigitalPlatformEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'DigitalPlatformEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DigitalPlatformEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DigitalPlatformEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DisagreeAction' => 
  array (
    'type' => 'class',
    'classname' => 'DisagreeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DisagreeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DisagreeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DiscoverAction' => 
  array (
    'type' => 'class',
    'classname' => 'DiscoverAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DiscoverAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DiscoverActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\FindActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DiscussionForumPosting' => 
  array (
    'type' => 'class',
    'classname' => 'DiscussionForumPosting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DiscussionForumPosting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DiscussionForumPostingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DislikeAction' => 
  array (
    'type' => 'class',
    'classname' => 'DislikeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DislikeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DislikeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Distance' => 
  array (
    'type' => 'class',
    'classname' => 'Distance',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Distance',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DistanceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Distillery' => 
  array (
    'type' => 'class',
    'classname' => 'Distillery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Distillery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DistilleryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DonateAction' => 
  array (
    'type' => 'class',
    'classname' => 'DonateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DonateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DonateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DoseSchedule' => 
  array (
    'type' => 'class',
    'classname' => 'DoseSchedule',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DoseSchedule',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DownloadAction' => 
  array (
    'type' => 'class',
    'classname' => 'DownloadAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DownloadAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DownloadActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrawAction' => 
  array (
    'type' => 'class',
    'classname' => 'DrawAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrawAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrawActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Drawing' => 
  array (
    'type' => 'class',
    'classname' => 'Drawing',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Drawing',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrawingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrinkAction' => 
  array (
    'type' => 'class',
    'classname' => 'DrinkAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrinkAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrinkActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DriveWheelConfigurationValue' => 
  array (
    'type' => 'class',
    'classname' => 'DriveWheelConfigurationValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DriveWheelConfigurationValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DriveWheelConfigurationValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Drug' => 
  array (
    'type' => 'class',
    'classname' => 'Drug',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Drug',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SubstanceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugClass' => 
  array (
    'type' => 'class',
    'classname' => 'DrugClass',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugClass',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugClassContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugCost' => 
  array (
    'type' => 'class',
    'classname' => 'DrugCost',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugCost',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugCostContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugCostCategory' => 
  array (
    'type' => 'class',
    'classname' => 'DrugCostCategory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugCostCategory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugCostCategoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugLegalStatus' => 
  array (
    'type' => 'class',
    'classname' => 'DrugLegalStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugLegalStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugLegalStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugPregnancyCategory' => 
  array (
    'type' => 'class',
    'classname' => 'DrugPregnancyCategory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugPregnancyCategory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugPregnancyCategoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugPrescriptionStatus' => 
  array (
    'type' => 'class',
    'classname' => 'DrugPrescriptionStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugPrescriptionStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugPrescriptionStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DrugStrength' => 
  array (
    'type' => 'class',
    'classname' => 'DrugStrength',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DrugStrength',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DrugStrengthContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\DryCleaningOrLaundry' => 
  array (
    'type' => 'class',
    'classname' => 'DryCleaningOrLaundry',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\DryCleaningOrLaundry',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DryCleaningOrLaundryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Duration' => 
  array (
    'type' => 'class',
    'classname' => 'Duration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Duration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\DurationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EUEnergyEfficiencyEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'EUEnergyEfficiencyEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EUEnergyEfficiencyEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EUEnergyEfficiencyEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnergyEfficiencyEnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EatAction' => 
  array (
    'type' => 'class',
    'classname' => 'EatAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EatAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EatActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EducationEvent' => 
  array (
    'type' => 'class',
    'classname' => 'EducationEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EducationEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EducationEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EducationalAudience' => 
  array (
    'type' => 'class',
    'classname' => 'EducationalAudience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EducationalAudience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EducationalAudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EducationalOccupationalCredential' => 
  array (
    'type' => 'class',
    'classname' => 'EducationalOccupationalCredential',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EducationalOccupationalCredential',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalCredentialContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EducationalOccupationalProgram' => 
  array (
    'type' => 'class',
    'classname' => 'EducationalOccupationalProgram',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EducationalOccupationalProgram',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalProgramContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EducationalOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'EducationalOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EducationalOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Electrician' => 
  array (
    'type' => 'class',
    'classname' => 'Electrician',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Electrician',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ElectricianContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ElectronicsStore' => 
  array (
    'type' => 'class',
    'classname' => 'ElectronicsStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ElectronicsStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ElectronicsStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ElementarySchool' => 
  array (
    'type' => 'class',
    'classname' => 'ElementarySchool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ElementarySchool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ElementarySchoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmailMessage' => 
  array (
    'type' => 'class',
    'classname' => 'EmailMessage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmailMessage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmailMessageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MessageContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Embassy' => 
  array (
    'type' => 'class',
    'classname' => 'Embassy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Embassy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmbassyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmergencyService' => 
  array (
    'type' => 'class',
    'classname' => 'EmergencyService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmergencyService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmployeeRole' => 
  array (
    'type' => 'class',
    'classname' => 'EmployeeRole',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmployeeRole',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmployeeRoleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationRoleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RoleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmployerAggregateRating' => 
  array (
    'type' => 'class',
    'classname' => 'EmployerAggregateRating',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmployerAggregateRating',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmployerAggregateRatingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AggregateRatingContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RatingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmployerReview' => 
  array (
    'type' => 'class',
    'classname' => 'EmployerReview',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmployerReview',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmployerReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EmploymentAgency' => 
  array (
    'type' => 'class',
    'classname' => 'EmploymentAgency',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EmploymentAgency',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EmploymentAgencyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EndorseAction' => 
  array (
    'type' => 'class',
    'classname' => 'EndorseAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EndorseAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EndorseActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EndorsementRating' => 
  array (
    'type' => 'class',
    'classname' => 'EndorsementRating',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EndorsementRating',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EndorsementRatingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\RatingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Energy' => 
  array (
    'type' => 'class',
    'classname' => 'Energy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Energy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EnergyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EnergyConsumptionDetails' => 
  array (
    'type' => 'class',
    'classname' => 'EnergyConsumptionDetails',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EnergyConsumptionDetails',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EnergyConsumptionDetailsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EnergyEfficiencyEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'EnergyEfficiencyEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EnergyEfficiencyEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EnergyEfficiencyEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EnergyStarEnergyEfficiencyEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'EnergyStarEnergyEfficiencyEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EnergyStarEnergyEfficiencyEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EnergyStarEnergyEfficiencyEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnergyEfficiencyEnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EngineSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'EngineSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EngineSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EngineSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EntertainmentBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'EntertainmentBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EntertainmentBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EntryPoint' => 
  array (
    'type' => 'class',
    'classname' => 'EntryPoint',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EntryPoint',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EntryPointContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Enumeration' => 
  array (
    'type' => 'class',
    'classname' => 'Enumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Enumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Episode' => 
  array (
    'type' => 'class',
    'classname' => 'Episode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Episode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EpisodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Event' => 
  array (
    'type' => 'class',
    'classname' => 'Event',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Event',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EventAttendanceModeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'EventAttendanceModeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EventAttendanceModeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventAttendanceModeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EventReservation' => 
  array (
    'type' => 'class',
    'classname' => 'EventReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EventReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EventSeries' => 
  array (
    'type' => 'class',
    'classname' => 'EventSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EventSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EventStatusType' => 
  array (
    'type' => 'class',
    'classname' => 'EventStatusType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EventStatusType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventStatusTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\EventVenue' => 
  array (
    'type' => 'class',
    'classname' => 'EventVenue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\EventVenue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\EventVenueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ExchangeRateSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'ExchangeRateSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ExchangeRateSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ExchangeRateSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ExerciseAction' => 
  array (
    'type' => 'class',
    'classname' => 'ExerciseAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ExerciseAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ExerciseActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlayActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ExerciseGym' => 
  array (
    'type' => 'class',
    'classname' => 'ExerciseGym',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ExerciseGym',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ExerciseGymContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ExercisePlan' => 
  array (
    'type' => 'class',
    'classname' => 'ExercisePlan',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ExercisePlan',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ExercisePlanContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PhysicalActivityContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ExhibitionEvent' => 
  array (
    'type' => 'class',
    'classname' => 'ExhibitionEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ExhibitionEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ExhibitionEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FAQPage' => 
  array (
    'type' => 'class',
    'classname' => 'FAQPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FAQPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FAQPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FMRadioChannel' => 
  array (
    'type' => 'class',
    'classname' => 'FMRadioChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FMRadioChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FMRadioChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RadioChannelContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FastFoodRestaurant' => 
  array (
    'type' => 'class',
    'classname' => 'FastFoodRestaurant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FastFoodRestaurant',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FastFoodRestaurantContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Festival' => 
  array (
    'type' => 'class',
    'classname' => 'Festival',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Festival',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FestivalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FilmAction' => 
  array (
    'type' => 'class',
    'classname' => 'FilmAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FilmAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FilmActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FinancialProduct' => 
  array (
    'type' => 'class',
    'classname' => 'FinancialProduct',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FinancialProduct',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FinancialService' => 
  array (
    'type' => 'class',
    'classname' => 'FinancialService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FinancialService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FindAction' => 
  array (
    'type' => 'class',
    'classname' => 'FindAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FindAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FindActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FireStation' => 
  array (
    'type' => 'class',
    'classname' => 'FireStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FireStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FireStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Flight' => 
  array (
    'type' => 'class',
    'classname' => 'Flight',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Flight',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FlightContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FlightReservation' => 
  array (
    'type' => 'class',
    'classname' => 'FlightReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FlightReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FlightReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FloorPlan' => 
  array (
    'type' => 'class',
    'classname' => 'FloorPlan',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FloorPlan',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FloorPlanContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Florist' => 
  array (
    'type' => 'class',
    'classname' => 'Florist',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Florist',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FloristContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FollowAction' => 
  array (
    'type' => 'class',
    'classname' => 'FollowAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FollowAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FollowActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FoodEstablishment' => 
  array (
    'type' => 'class',
    'classname' => 'FoodEstablishment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FoodEstablishment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FoodEstablishmentReservation' => 
  array (
    'type' => 'class',
    'classname' => 'FoodEstablishmentReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FoodEstablishmentReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FoodEvent' => 
  array (
    'type' => 'class',
    'classname' => 'FoodEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FoodEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FoodEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FoodService' => 
  array (
    'type' => 'class',
    'classname' => 'FoodService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FoodService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FoodServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FundingAgency' => 
  array (
    'type' => 'class',
    'classname' => 'FundingAgency',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FundingAgency',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FundingAgencyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ProjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FundingScheme' => 
  array (
    'type' => 'class',
    'classname' => 'FundingScheme',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FundingScheme',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FundingSchemeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\FurnitureStore' => 
  array (
    'type' => 'class',
    'classname' => 'FurnitureStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\FurnitureStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\FurnitureStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Game' => 
  array (
    'type' => 'class',
    'classname' => 'Game',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Game',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GameContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GameAvailabilityEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'GameAvailabilityEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GameAvailabilityEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GameAvailabilityEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GamePlayMode' => 
  array (
    'type' => 'class',
    'classname' => 'GamePlayMode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GamePlayMode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GamePlayModeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GameServer' => 
  array (
    'type' => 'class',
    'classname' => 'GameServer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GameServer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GameServerContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GameServerStatus' => 
  array (
    'type' => 'class',
    'classname' => 'GameServerStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GameServerStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GameServerStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GardenStore' => 
  array (
    'type' => 'class',
    'classname' => 'GardenStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GardenStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GardenStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GasStation' => 
  array (
    'type' => 'class',
    'classname' => 'GasStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GasStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GasStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GatedResidenceCommunity' => 
  array (
    'type' => 'class',
    'classname' => 'GatedResidenceCommunity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GatedResidenceCommunity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GatedResidenceCommunityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ResidenceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GenderType' => 
  array (
    'type' => 'class',
    'classname' => 'GenderType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GenderType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GenderTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Gene' => 
  array (
    'type' => 'class',
    'classname' => 'Gene',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Gene',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeneContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GeneralContractor' => 
  array (
    'type' => 'class',
    'classname' => 'GeneralContractor',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GeneralContractor',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeneralContractorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GeoCircle' => 
  array (
    'type' => 'class',
    'classname' => 'GeoCircle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GeoCircle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeoCircleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\GeoShapeContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GeoCoordinates' => 
  array (
    'type' => 'class',
    'classname' => 'GeoCoordinates',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GeoCoordinates',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeoCoordinatesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GeoShape' => 
  array (
    'type' => 'class',
    'classname' => 'GeoShape',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GeoShape',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeoShapeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GeospatialGeometry' => 
  array (
    'type' => 'class',
    'classname' => 'GeospatialGeometry',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GeospatialGeometry',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GeospatialGeometryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GiveAction' => 
  array (
    'type' => 'class',
    'classname' => 'GiveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GiveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GiveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GolfCourse' => 
  array (
    'type' => 'class',
    'classname' => 'GolfCourse',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GolfCourse',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GolfCourseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentBenefitsType' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentBenefitsType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentBenefitsType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBenefitsTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentBuilding' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentBuilding',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentBuilding',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentOffice' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentOffice',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentOffice',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentOfficeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentPermit' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentPermit',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentPermit',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentPermitContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PermitContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\GovernmentService' => 
  array (
    'type' => 'class',
    'classname' => 'GovernmentService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GovernmentService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Grant' => 
  array (
    'type' => 'class',
    'classname' => 'Grant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Grant',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GrantContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Graph' => 
  array (
    'type' => 'class',
    'classname' => 'Graph',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Graph',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Type',
      1 => 'ArrayAccess',
      2 => 'JsonSerializable',
    ),
  ),
  'Spatie\\SchemaOrg\\GroceryStore' => 
  array (
    'type' => 'class',
    'classname' => 'GroceryStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\GroceryStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GroceryStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Guide' => 
  array (
    'type' => 'class',
    'classname' => 'Guide',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Guide',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\GuideContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HVACBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'HVACBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HVACBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HVACBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Hackathon' => 
  array (
    'type' => 'class',
    'classname' => 'Hackathon',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Hackathon',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HackathonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HairSalon' => 
  array (
    'type' => 'class',
    'classname' => 'HairSalon',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HairSalon',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HairSalonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HardwareStore' => 
  array (
    'type' => 'class',
    'classname' => 'HardwareStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HardwareStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HardwareStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthAndBeautyBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'HealthAndBeautyBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthAndBeautyBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthAspectEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'HealthAspectEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthAspectEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthAspectEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthClub' => 
  array (
    'type' => 'class',
    'classname' => 'HealthClub',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthClub',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthClubContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthInsurancePlan' => 
  array (
    'type' => 'class',
    'classname' => 'HealthInsurancePlan',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthInsurancePlan',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthInsurancePlanContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthPlanCostSharingSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'HealthPlanCostSharingSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthPlanCostSharingSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthPlanCostSharingSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthPlanFormulary' => 
  array (
    'type' => 'class',
    'classname' => 'HealthPlanFormulary',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthPlanFormulary',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthPlanFormularyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthPlanNetwork' => 
  array (
    'type' => 'class',
    'classname' => 'HealthPlanNetwork',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthPlanNetwork',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthPlanNetworkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HealthTopicContent' => 
  array (
    'type' => 'class',
    'classname' => 'HealthTopicContent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HealthTopicContent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HealthTopicContentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebContentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HighSchool' => 
  array (
    'type' => 'class',
    'classname' => 'HighSchool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HighSchool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HighSchoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HinduTemple' => 
  array (
    'type' => 'class',
    'classname' => 'HinduTemple',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HinduTemple',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HinduTempleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HobbyShop' => 
  array (
    'type' => 'class',
    'classname' => 'HobbyShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HobbyShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HobbyShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HomeAndConstructionBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'HomeAndConstructionBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HomeAndConstructionBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HomeGoodsStore' => 
  array (
    'type' => 'class',
    'classname' => 'HomeGoodsStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HomeGoodsStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HomeGoodsStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Hospital' => 
  array (
    'type' => 'class',
    'classname' => 'Hospital',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Hospital',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HospitalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Hostel' => 
  array (
    'type' => 'class',
    'classname' => 'Hostel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Hostel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HostelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Hotel' => 
  array (
    'type' => 'class',
    'classname' => 'Hotel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Hotel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HotelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HotelRoom' => 
  array (
    'type' => 'class',
    'classname' => 'HotelRoom',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HotelRoom',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HotelRoomContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RoomContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\House' => 
  array (
    'type' => 'class',
    'classname' => 'House',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\House',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HouseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HousePainter' => 
  array (
    'type' => 'class',
    'classname' => 'HousePainter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HousePainter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HousePainterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowTo' => 
  array (
    'type' => 'class',
    'classname' => 'HowTo',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowTo',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToDirection' => 
  array (
    'type' => 'class',
    'classname' => 'HowToDirection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToDirection',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToDirectionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToItem' => 
  array (
    'type' => 'class',
    'classname' => 'HowToItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToSection' => 
  array (
    'type' => 'class',
    'classname' => 'HowToSection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToSection',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToSectionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ItemListContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToStep' => 
  array (
    'type' => 'class',
    'classname' => 'HowToStep',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToStep',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToStepContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ItemListContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToSupply' => 
  array (
    'type' => 'class',
    'classname' => 'HowToSupply',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToSupply',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToSupplyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HowToItemContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToTip' => 
  array (
    'type' => 'class',
    'classname' => 'HowToTip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToTip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToTipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HowToTool' => 
  array (
    'type' => 'class',
    'classname' => 'HowToTool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HowToTool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HowToToolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HowToItemContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HyperToc' => 
  array (
    'type' => 'class',
    'classname' => 'HyperToc',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HyperToc',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HyperTocContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\HyperTocEntry' => 
  array (
    'type' => 'class',
    'classname' => 'HyperTocEntry',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\HyperTocEntry',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\HyperTocEntryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\IPTCDigitalSourceEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'IPTCDigitalSourceEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\IPTCDigitalSourceEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IPTCDigitalSourceEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\IceCreamShop' => 
  array (
    'type' => 'class',
    'classname' => 'IceCreamShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\IceCreamShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IceCreamShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\IgnoreAction' => 
  array (
    'type' => 'class',
    'classname' => 'IgnoreAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\IgnoreAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IgnoreActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ImageGallery' => 
  array (
    'type' => 'class',
    'classname' => 'ImageGallery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ImageGallery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ImageGalleryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CollectionPageContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaGalleryContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ImageObject' => 
  array (
    'type' => 'class',
    'classname' => 'ImageObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ImageObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ImageObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ImageObjectSnapshot' => 
  array (
    'type' => 'class',
    'classname' => 'ImageObjectSnapshot',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ImageObjectSnapshot',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ImageObjectSnapshotContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ImageObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ImagingTest' => 
  array (
    'type' => 'class',
    'classname' => 'ImagingTest',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ImagingTest',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ImagingTestContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\IndividualPhysician' => 
  array (
    'type' => 'class',
    'classname' => 'IndividualPhysician',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\IndividualPhysician',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IndividualPhysicianContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PhysicianContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\IndividualProduct' => 
  array (
    'type' => 'class',
    'classname' => 'IndividualProduct',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\IndividualProduct',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IndividualProductContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InfectiousAgentClass' => 
  array (
    'type' => 'class',
    'classname' => 'InfectiousAgentClass',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InfectiousAgentClass',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InfectiousAgentClassContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InfectiousDisease' => 
  array (
    'type' => 'class',
    'classname' => 'InfectiousDisease',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InfectiousDisease',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InfectiousDiseaseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InformAction' => 
  array (
    'type' => 'class',
    'classname' => 'InformAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InformAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InformActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InsertAction' => 
  array (
    'type' => 'class',
    'classname' => 'InsertAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InsertAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InsertActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AddActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InstallAction' => 
  array (
    'type' => 'class',
    'classname' => 'InstallAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InstallAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InstallActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InsuranceAgency' => 
  array (
    'type' => 'class',
    'classname' => 'InsuranceAgency',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InsuranceAgency',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InsuranceAgencyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Intangible' => 
  array (
    'type' => 'class',
    'classname' => 'Intangible',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Intangible',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InteractAction' => 
  array (
    'type' => 'class',
    'classname' => 'InteractAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InteractAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InteractionCounter' => 
  array (
    'type' => 'class',
    'classname' => 'InteractionCounter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InteractionCounter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InteractionCounterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InternetCafe' => 
  array (
    'type' => 'class',
    'classname' => 'InternetCafe',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InternetCafe',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InternetCafeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InvestmentFund' => 
  array (
    'type' => 'class',
    'classname' => 'InvestmentFund',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InvestmentFund',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InvestmentFundContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InvestmentOrDeposit' => 
  array (
    'type' => 'class',
    'classname' => 'InvestmentOrDeposit',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InvestmentOrDeposit',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\InviteAction' => 
  array (
    'type' => 'class',
    'classname' => 'InviteAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\InviteAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InviteActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Invoice' => 
  array (
    'type' => 'class',
    'classname' => 'Invoice',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Invoice',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\InvoiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ItemAvailability' => 
  array (
    'type' => 'class',
    'classname' => 'ItemAvailability',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ItemAvailability',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ItemAvailabilityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ItemList' => 
  array (
    'type' => 'class',
    'classname' => 'ItemList',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ItemList',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ItemListContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ItemListOrderType' => 
  array (
    'type' => 'class',
    'classname' => 'ItemListOrderType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ItemListOrderType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ItemListOrderTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ItemPage' => 
  array (
    'type' => 'class',
    'classname' => 'ItemPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ItemPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ItemPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\JewelryStore' => 
  array (
    'type' => 'class',
    'classname' => 'JewelryStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\JewelryStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\JewelryStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\JobPosting' => 
  array (
    'type' => 'class',
    'classname' => 'JobPosting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\JobPosting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\JobPostingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\JoinAction' => 
  array (
    'type' => 'class',
    'classname' => 'JoinAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\JoinAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\JoinActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Joint' => 
  array (
    'type' => 'class',
    'classname' => 'Joint',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Joint',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\JointContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LakeBodyOfWater' => 
  array (
    'type' => 'class',
    'classname' => 'LakeBodyOfWater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LakeBodyOfWater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LakeBodyOfWaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Landform' => 
  array (
    'type' => 'class',
    'classname' => 'Landform',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Landform',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LandmarksOrHistoricalBuildings' => 
  array (
    'type' => 'class',
    'classname' => 'LandmarksOrHistoricalBuildings',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LandmarksOrHistoricalBuildings',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LandmarksOrHistoricalBuildingsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Language' => 
  array (
    'type' => 'class',
    'classname' => 'Language',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Language',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LanguageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LearningResource' => 
  array (
    'type' => 'class',
    'classname' => 'LearningResource',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LearningResource',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LearningResourceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LeaveAction' => 
  array (
    'type' => 'class',
    'classname' => 'LeaveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LeaveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LeaveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LegalForceStatus' => 
  array (
    'type' => 'class',
    'classname' => 'LegalForceStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LegalForceStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegalForceStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LegalService' => 
  array (
    'type' => 'class',
    'classname' => 'LegalService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LegalService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegalServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LegalValueLevel' => 
  array (
    'type' => 'class',
    'classname' => 'LegalValueLevel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LegalValueLevel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegalValueLevelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Legislation' => 
  array (
    'type' => 'class',
    'classname' => 'Legislation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Legislation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegislationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LegislationObject' => 
  array (
    'type' => 'class',
    'classname' => 'LegislationObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LegislationObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegislationObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LegislationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LegislativeBuilding' => 
  array (
    'type' => 'class',
    'classname' => 'LegislativeBuilding',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LegislativeBuilding',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LegislativeBuildingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LendAction' => 
  array (
    'type' => 'class',
    'classname' => 'LendAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LendAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LendActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Library' => 
  array (
    'type' => 'class',
    'classname' => 'Library',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Library',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LibraryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LibrarySystem' => 
  array (
    'type' => 'class',
    'classname' => 'LibrarySystem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LibrarySystem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LibrarySystemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LifestyleModification' => 
  array (
    'type' => 'class',
    'classname' => 'LifestyleModification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LifestyleModification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Ligament' => 
  array (
    'type' => 'class',
    'classname' => 'Ligament',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Ligament',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LigamentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LikeAction' => 
  array (
    'type' => 'class',
    'classname' => 'LikeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LikeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LikeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LinkRole' => 
  array (
    'type' => 'class',
    'classname' => 'LinkRole',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LinkRole',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LinkRoleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\RoleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LiquorStore' => 
  array (
    'type' => 'class',
    'classname' => 'LiquorStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LiquorStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LiquorStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ListItem' => 
  array (
    'type' => 'class',
    'classname' => 'ListItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ListItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ListItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ListenAction' => 
  array (
    'type' => 'class',
    'classname' => 'ListenAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ListenAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ListenActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LiteraryEvent' => 
  array (
    'type' => 'class',
    'classname' => 'LiteraryEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LiteraryEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LiteraryEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LiveBlogPosting' => 
  array (
    'type' => 'class',
    'classname' => 'LiveBlogPosting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LiveBlogPosting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LiveBlogPostingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\BlogPostingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LoanOrCredit' => 
  array (
    'type' => 'class',
    'classname' => 'LoanOrCredit',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LoanOrCredit',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LoanOrCreditContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LocalBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'LocalBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LocalBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LocationFeatureSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'LocationFeatureSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LocationFeatureSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LocationFeatureSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PropertyValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Locksmith' => 
  array (
    'type' => 'class',
    'classname' => 'Locksmith',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Locksmith',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LocksmithContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LodgingBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'LodgingBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LodgingBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LodgingReservation' => 
  array (
    'type' => 'class',
    'classname' => 'LodgingReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LodgingReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LodgingReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LoseAction' => 
  array (
    'type' => 'class',
    'classname' => 'LoseAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LoseAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LoseActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AchieveActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\LymphaticVessel' => 
  array (
    'type' => 'class',
    'classname' => 'LymphaticVessel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\LymphaticVessel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\LymphaticVesselContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\VesselContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Manuscript' => 
  array (
    'type' => 'class',
    'classname' => 'Manuscript',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Manuscript',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ManuscriptContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Map' => 
  array (
    'type' => 'class',
    'classname' => 'Map',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Map',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MapContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MapCategoryType' => 
  array (
    'type' => 'class',
    'classname' => 'MapCategoryType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MapCategoryType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MapCategoryTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MarryAction' => 
  array (
    'type' => 'class',
    'classname' => 'MarryAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MarryAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MarryActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Mass' => 
  array (
    'type' => 'class',
    'classname' => 'Mass',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Mass',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MassContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MathSolver' => 
  array (
    'type' => 'class',
    'classname' => 'MathSolver',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MathSolver',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MathSolverContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MaximumDoseSchedule' => 
  array (
    'type' => 'class',
    'classname' => 'MaximumDoseSchedule',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MaximumDoseSchedule',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MaximumDoseScheduleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MeasurementMethodEnum' => 
  array (
    'type' => 'class',
    'classname' => 'MeasurementMethodEnum',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MeasurementMethodEnum',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MeasurementMethodEnumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MeasurementTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'MeasurementTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MeasurementTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MeasurementTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'MediaEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaGallery' => 
  array (
    'type' => 'class',
    'classname' => 'MediaGallery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaGallery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaGalleryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CollectionPageContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaManipulationRatingEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'MediaManipulationRatingEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaManipulationRatingEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaManipulationRatingEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaObject' => 
  array (
    'type' => 'class',
    'classname' => 'MediaObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaReview' => 
  array (
    'type' => 'class',
    'classname' => 'MediaReview',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaReview',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaReviewItem' => 
  array (
    'type' => 'class',
    'classname' => 'MediaReviewItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaReviewItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaReviewItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MediaSubscription' => 
  array (
    'type' => 'class',
    'classname' => 'MediaSubscription',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MediaSubscription',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MediaSubscriptionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalAudience' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalAudience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalAudience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalAudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalAudienceType' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalAudienceType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalAudienceType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalAudienceTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalCause' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalCause',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalCause',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalCauseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalClinic' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalClinic',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalClinic',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalClinicContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalCode' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalCode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalCode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalCodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CategoryCodeContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DefinedTermContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalCondition' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalCondition',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalCondition',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalConditionStage' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalConditionStage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalConditionStage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionStageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalContraindication' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalContraindication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalContraindication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalContraindicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalDevice' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalDevice',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalDevice',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalDeviceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalDevicePurpose' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalDevicePurpose',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalDevicePurpose',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalDevicePurposeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalEntity' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalEntity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalEvidenceLevel' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalEvidenceLevel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalEvidenceLevel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEvidenceLevelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalGuideline' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalGuideline',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalGuideline',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalGuidelineContraindication' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalGuidelineContraindication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalGuidelineContraindication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContraindicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalGuidelineRecommendation' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalGuidelineRecommendation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalGuidelineRecommendation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineRecommendationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalImagingTechnique' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalImagingTechnique',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalImagingTechnique',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalImagingTechniqueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalIndication' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalIndication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalIndication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalIntangible' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalIntangible',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalIntangible',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalObservationalStudy' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalObservationalStudy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalObservationalStudy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalStudyContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalObservationalStudyDesign' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalObservationalStudyDesign',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalObservationalStudyDesign',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyDesignContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalProcedure' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalProcedure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalProcedure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalProcedureType' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalProcedureType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalProcedureType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalRiskCalculator' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalRiskCalculator',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalRiskCalculator',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskCalculatorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskEstimatorContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalRiskEstimator' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalRiskEstimator',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalRiskEstimator',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskEstimatorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalRiskFactor' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalRiskFactor',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalRiskFactor',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskFactorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalRiskScore' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalRiskScore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalRiskScore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskScoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalRiskEstimatorContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalScholarlyArticle' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalScholarlyArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalScholarlyArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalScholarlyArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ScholarlyArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalSign' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalSign',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalSign',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalSignOrSymptom' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalSignOrSymptom',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalSignOrSymptom',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalSpecialty' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalSpecialty',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalSpecialty',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSpecialtyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SpecialtyContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalStudy' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalStudy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalStudy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalStudyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalStudyStatus' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalStudyStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalStudyStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalStudyStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalSymptom' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalSymptom',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalSymptom',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSymptomContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalTest' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalTest',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalTest',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalTestPanel' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalTestPanel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalTestPanel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestPanelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalTherapy' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalTherapy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalTherapy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalTrial' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalTrial',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalTrial',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTrialContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalStudyContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalTrialDesign' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalTrialDesign',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalTrialDesign',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTrialDesignContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicalWebPage' => 
  array (
    'type' => 'class',
    'classname' => 'MedicalWebPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicalWebPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicalWebPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MedicineSystem' => 
  array (
    'type' => 'class',
    'classname' => 'MedicineSystem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MedicineSystem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MedicineSystemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MeetingRoom' => 
  array (
    'type' => 'class',
    'classname' => 'MeetingRoom',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MeetingRoom',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MeetingRoomContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\RoomContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MemberProgram' => 
  array (
    'type' => 'class',
    'classname' => 'MemberProgram',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MemberProgram',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MemberProgramContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MemberProgramTier' => 
  array (
    'type' => 'class',
    'classname' => 'MemberProgramTier',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MemberProgramTier',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MemberProgramTierContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MensClothingStore' => 
  array (
    'type' => 'class',
    'classname' => 'MensClothingStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MensClothingStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MensClothingStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Menu' => 
  array (
    'type' => 'class',
    'classname' => 'Menu',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Menu',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MenuContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MenuItem' => 
  array (
    'type' => 'class',
    'classname' => 'MenuItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MenuItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MenuItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MenuSection' => 
  array (
    'type' => 'class',
    'classname' => 'MenuSection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MenuSection',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MenuSectionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MerchantReturnEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'MerchantReturnEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MerchantReturnEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MerchantReturnEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MerchantReturnPolicy' => 
  array (
    'type' => 'class',
    'classname' => 'MerchantReturnPolicy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MerchantReturnPolicy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MerchantReturnPolicySeasonalOverride' => 
  array (
    'type' => 'class',
    'classname' => 'MerchantReturnPolicySeasonalOverride',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MerchantReturnPolicySeasonalOverride',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicySeasonalOverrideContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Message' => 
  array (
    'type' => 'class',
    'classname' => 'Message',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Message',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MessageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MiddleSchool' => 
  array (
    'type' => 'class',
    'classname' => 'MiddleSchool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MiddleSchool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MiddleSchoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MobileApplication' => 
  array (
    'type' => 'class',
    'classname' => 'MobileApplication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MobileApplication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MobileApplicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MobilePhoneStore' => 
  array (
    'type' => 'class',
    'classname' => 'MobilePhoneStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MobilePhoneStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MobilePhoneStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MolecularEntity' => 
  array (
    'type' => 'class',
    'classname' => 'MolecularEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MolecularEntity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MolecularEntityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MonetaryAmount' => 
  array (
    'type' => 'class',
    'classname' => 'MonetaryAmount',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MonetaryAmount',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MonetaryAmountContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MonetaryAmountDistribution' => 
  array (
    'type' => 'class',
    'classname' => 'MonetaryAmountDistribution',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MonetaryAmountDistribution',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MonetaryAmountDistributionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueDistributionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MonetaryGrant' => 
  array (
    'type' => 'class',
    'classname' => 'MonetaryGrant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MonetaryGrant',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MonetaryGrantContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\GrantContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MoneyTransfer' => 
  array (
    'type' => 'class',
    'classname' => 'MoneyTransfer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MoneyTransfer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MoneyTransferContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MortgageLoan' => 
  array (
    'type' => 'class',
    'classname' => 'MortgageLoan',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MortgageLoan',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MortgageLoanContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LoanOrCreditContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Mosque' => 
  array (
    'type' => 'class',
    'classname' => 'Mosque',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Mosque',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MosqueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Motel' => 
  array (
    'type' => 'class',
    'classname' => 'Motel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Motel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MotelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Motorcycle' => 
  array (
    'type' => 'class',
    'classname' => 'Motorcycle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Motorcycle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MotorcycleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\VehicleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MotorcycleDealer' => 
  array (
    'type' => 'class',
    'classname' => 'MotorcycleDealer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MotorcycleDealer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MotorcycleDealerContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MotorcycleRepair' => 
  array (
    'type' => 'class',
    'classname' => 'MotorcycleRepair',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MotorcycleRepair',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MotorcycleRepairContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MotorizedBicycle' => 
  array (
    'type' => 'class',
    'classname' => 'MotorizedBicycle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MotorizedBicycle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MotorizedBicycleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\VehicleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Mountain' => 
  array (
    'type' => 'class',
    'classname' => 'Mountain',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Mountain',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MountainContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MoveAction' => 
  array (
    'type' => 'class',
    'classname' => 'MoveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MoveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MoveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Movie' => 
  array (
    'type' => 'class',
    'classname' => 'Movie',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Movie',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovieContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MovieClip' => 
  array (
    'type' => 'class',
    'classname' => 'MovieClip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MovieClip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovieClipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ClipContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MovieRentalStore' => 
  array (
    'type' => 'class',
    'classname' => 'MovieRentalStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MovieRentalStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovieRentalStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MovieSeries' => 
  array (
    'type' => 'class',
    'classname' => 'MovieSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MovieSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovieSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MovieTheater' => 
  array (
    'type' => 'class',
    'classname' => 'MovieTheater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MovieTheater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovieTheaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MovingCompany' => 
  array (
    'type' => 'class',
    'classname' => 'MovingCompany',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MovingCompany',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MovingCompanyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MultiTypedEntity' => 
  array (
    'type' => 'class',
    'classname' => 'MultiTypedEntity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MultiTypedEntity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Type',
      1 => 'JsonSerializable',
    ),
  ),
  'Spatie\\SchemaOrg\\Muscle' => 
  array (
    'type' => 'class',
    'classname' => 'Muscle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Muscle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MuscleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Museum' => 
  array (
    'type' => 'class',
    'classname' => 'Museum',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Museum',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MuseumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicAlbum' => 
  array (
    'type' => 'class',
    'classname' => 'MusicAlbum',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicAlbum',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicAlbumContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MusicPlaylistContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicAlbumProductionType' => 
  array (
    'type' => 'class',
    'classname' => 'MusicAlbumProductionType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicAlbumProductionType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicAlbumProductionTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicAlbumReleaseType' => 
  array (
    'type' => 'class',
    'classname' => 'MusicAlbumReleaseType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicAlbumReleaseType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicAlbumReleaseTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicComposition' => 
  array (
    'type' => 'class',
    'classname' => 'MusicComposition',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicComposition',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicCompositionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicEvent' => 
  array (
    'type' => 'class',
    'classname' => 'MusicEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicGroup' => 
  array (
    'type' => 'class',
    'classname' => 'MusicGroup',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicGroup',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicGroupContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicPlaylist' => 
  array (
    'type' => 'class',
    'classname' => 'MusicPlaylist',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicPlaylist',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicPlaylistContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicRecording' => 
  array (
    'type' => 'class',
    'classname' => 'MusicRecording',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicRecording',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicRecordingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicRelease' => 
  array (
    'type' => 'class',
    'classname' => 'MusicRelease',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicRelease',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicReleaseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MusicPlaylistContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicReleaseFormatType' => 
  array (
    'type' => 'class',
    'classname' => 'MusicReleaseFormatType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicReleaseFormatType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicReleaseFormatTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicStore' => 
  array (
    'type' => 'class',
    'classname' => 'MusicStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicVenue' => 
  array (
    'type' => 'class',
    'classname' => 'MusicVenue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicVenue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicVenueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\MusicVideoObject' => 
  array (
    'type' => 'class',
    'classname' => 'MusicVideoObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\MusicVideoObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\MusicVideoObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NGO' => 
  array (
    'type' => 'class',
    'classname' => 'NGO',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NGO',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NGOContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NLNonprofitType' => 
  array (
    'type' => 'class',
    'classname' => 'NLNonprofitType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NLNonprofitType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NLNonprofitTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NailSalon' => 
  array (
    'type' => 'class',
    'classname' => 'NailSalon',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NailSalon',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NailSalonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Nerve' => 
  array (
    'type' => 'class',
    'classname' => 'Nerve',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Nerve',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NerveContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'NewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NewsMediaOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'NewsMediaOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NewsMediaOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NewsMediaOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Newspaper' => 
  array (
    'type' => 'class',
    'classname' => 'Newspaper',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Newspaper',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NewspaperContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PeriodicalContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NightClub' => 
  array (
    'type' => 'class',
    'classname' => 'NightClub',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NightClub',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NightClubContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NonprofitType' => 
  array (
    'type' => 'class',
    'classname' => 'NonprofitType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NonprofitType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Notary' => 
  array (
    'type' => 'class',
    'classname' => 'Notary',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Notary',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NotaryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LegalServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NoteDigitalDocument' => 
  array (
    'type' => 'class',
    'classname' => 'NoteDigitalDocument',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NoteDigitalDocument',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NoteDigitalDocumentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\NutritionInformation' => 
  array (
    'type' => 'class',
    'classname' => 'NutritionInformation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\NutritionInformation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\NutritionInformationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Observation' => 
  array (
    'type' => 'class',
    'classname' => 'Observation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Observation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ObservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Occupation' => 
  array (
    'type' => 'class',
    'classname' => 'Occupation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Occupation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OccupationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OccupationalExperienceRequirements' => 
  array (
    'type' => 'class',
    'classname' => 'OccupationalExperienceRequirements',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OccupationalExperienceRequirements',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OccupationalExperienceRequirementsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OccupationalTherapy' => 
  array (
    'type' => 'class',
    'classname' => 'OccupationalTherapy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OccupationalTherapy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OccupationalTherapyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OceanBodyOfWater' => 
  array (
    'type' => 'class',
    'classname' => 'OceanBodyOfWater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OceanBodyOfWater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OceanBodyOfWaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Offer' => 
  array (
    'type' => 'class',
    'classname' => 'Offer',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Offer',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfferCatalog' => 
  array (
    'type' => 'class',
    'classname' => 'OfferCatalog',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfferCatalog',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferCatalogContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ItemListContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfferForLease' => 
  array (
    'type' => 'class',
    'classname' => 'OfferForLease',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfferForLease',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferForLeaseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OfferContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfferForPurchase' => 
  array (
    'type' => 'class',
    'classname' => 'OfferForPurchase',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfferForPurchase',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferForPurchaseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OfferContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfferItemCondition' => 
  array (
    'type' => 'class',
    'classname' => 'OfferItemCondition',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfferItemCondition',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferItemConditionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfferShippingDetails' => 
  array (
    'type' => 'class',
    'classname' => 'OfferShippingDetails',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfferShippingDetails',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfferShippingDetailsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OfficeEquipmentStore' => 
  array (
    'type' => 'class',
    'classname' => 'OfficeEquipmentStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OfficeEquipmentStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OfficeEquipmentStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OnDemandEvent' => 
  array (
    'type' => 'class',
    'classname' => 'OnDemandEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OnDemandEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OnDemandEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PublicationEventContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OnlineBusiness' => 
  array (
    'type' => 'class',
    'classname' => 'OnlineBusiness',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OnlineBusiness',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OnlineBusinessContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OnlineStore' => 
  array (
    'type' => 'class',
    'classname' => 'OnlineStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OnlineStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OnlineStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OnlineBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OpeningHoursSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'OpeningHoursSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OpeningHoursSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OpeningHoursSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OpinionNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'OpinionNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OpinionNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OpinionNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Optician' => 
  array (
    'type' => 'class',
    'classname' => 'Optician',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Optician',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OpticianContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Order' => 
  array (
    'type' => 'class',
    'classname' => 'Order',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Order',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrderContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OrderAction' => 
  array (
    'type' => 'class',
    'classname' => 'OrderAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OrderAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrderActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OrderItem' => 
  array (
    'type' => 'class',
    'classname' => 'OrderItem',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OrderItem',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrderItemContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OrderStatus' => 
  array (
    'type' => 'class',
    'classname' => 'OrderStatus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OrderStatus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrderStatusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Organization' => 
  array (
    'type' => 'class',
    'classname' => 'Organization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Organization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OrganizationRole' => 
  array (
    'type' => 'class',
    'classname' => 'OrganizationRole',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OrganizationRole',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationRoleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\RoleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OrganizeAction' => 
  array (
    'type' => 'class',
    'classname' => 'OrganizeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OrganizeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OutletStore' => 
  array (
    'type' => 'class',
    'classname' => 'OutletStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OutletStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OutletStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\OwnershipInfo' => 
  array (
    'type' => 'class',
    'classname' => 'OwnershipInfo',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\OwnershipInfo',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\OwnershipInfoContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaintAction' => 
  array (
    'type' => 'class',
    'classname' => 'PaintAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaintAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaintActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Painting' => 
  array (
    'type' => 'class',
    'classname' => 'Painting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Painting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaintingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PalliativeProcedure' => 
  array (
    'type' => 'class',
    'classname' => 'PalliativeProcedure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PalliativeProcedure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PalliativeProcedureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ParcelDelivery' => 
  array (
    'type' => 'class',
    'classname' => 'ParcelDelivery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ParcelDelivery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ParcelDeliveryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ParentAudience' => 
  array (
    'type' => 'class',
    'classname' => 'ParentAudience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ParentAudience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ParentAudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Park' => 
  array (
    'type' => 'class',
    'classname' => 'Park',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Park',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ParkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ParkingFacility' => 
  array (
    'type' => 'class',
    'classname' => 'ParkingFacility',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ParkingFacility',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ParkingFacilityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PathologyTest' => 
  array (
    'type' => 'class',
    'classname' => 'PathologyTest',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PathologyTest',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PathologyTestContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Patient' => 
  array (
    'type' => 'class',
    'classname' => 'Patient',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Patient',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PatientContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalAudienceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PersonContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PawnShop' => 
  array (
    'type' => 'class',
    'classname' => 'PawnShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PawnShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PawnShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PayAction' => 
  array (
    'type' => 'class',
    'classname' => 'PayAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PayAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PayActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentCard' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentCard',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentCard',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentCardContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentChargeSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentChargeSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentChargeSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentChargeSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentMethod' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentMethod',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentMethod',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentMethodType' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentMethodType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentMethodType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentMethodTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentService' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PaymentStatusType' => 
  array (
    'type' => 'class',
    'classname' => 'PaymentStatusType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PaymentStatusType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PaymentStatusTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PeopleAudience' => 
  array (
    'type' => 'class',
    'classname' => 'PeopleAudience',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PeopleAudience',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PerformAction' => 
  array (
    'type' => 'class',
    'classname' => 'PerformAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PerformAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PerformActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlayActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PerformanceRole' => 
  array (
    'type' => 'class',
    'classname' => 'PerformanceRole',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PerformanceRole',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PerformanceRoleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\RoleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PerformingArtsTheater' => 
  array (
    'type' => 'class',
    'classname' => 'PerformingArtsTheater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PerformingArtsTheater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PerformingArtsTheaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PerformingGroup' => 
  array (
    'type' => 'class',
    'classname' => 'PerformingGroup',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PerformingGroup',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Periodical' => 
  array (
    'type' => 'class',
    'classname' => 'Periodical',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Periodical',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PeriodicalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Permit' => 
  array (
    'type' => 'class',
    'classname' => 'Permit',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Permit',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PermitContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Person' => 
  array (
    'type' => 'class',
    'classname' => 'Person',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Person',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PersonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PetStore' => 
  array (
    'type' => 'class',
    'classname' => 'PetStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PetStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PetStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Pharmacy' => 
  array (
    'type' => 'class',
    'classname' => 'Pharmacy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Pharmacy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PharmacyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Photograph' => 
  array (
    'type' => 'class',
    'classname' => 'Photograph',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Photograph',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhotographContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhotographAction' => 
  array (
    'type' => 'class',
    'classname' => 'PhotographAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhotographAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhotographActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhysicalActivity' => 
  array (
    'type' => 'class',
    'classname' => 'PhysicalActivity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhysicalActivity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysicalActivityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhysicalActivityCategory' => 
  array (
    'type' => 'class',
    'classname' => 'PhysicalActivityCategory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhysicalActivityCategory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysicalActivityCategoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhysicalExam' => 
  array (
    'type' => 'class',
    'classname' => 'PhysicalExam',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhysicalExam',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysicalExamContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhysicalTherapy' => 
  array (
    'type' => 'class',
    'classname' => 'PhysicalTherapy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhysicalTherapy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysicalTherapyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Physician' => 
  array (
    'type' => 'class',
    'classname' => 'Physician',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Physician',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysicianContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PhysiciansOffice' => 
  array (
    'type' => 'class',
    'classname' => 'PhysiciansOffice',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PhysiciansOffice',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PhysiciansOfficeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PhysicianContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Place' => 
  array (
    'type' => 'class',
    'classname' => 'Place',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Place',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PlaceOfWorship' => 
  array (
    'type' => 'class',
    'classname' => 'PlaceOfWorship',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PlaceOfWorship',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PlanAction' => 
  array (
    'type' => 'class',
    'classname' => 'PlanAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PlanAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlanActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Play' => 
  array (
    'type' => 'class',
    'classname' => 'Play',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Play',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlayContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PlayAction' => 
  array (
    'type' => 'class',
    'classname' => 'PlayAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PlayAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlayActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PlayGameAction' => 
  array (
    'type' => 'class',
    'classname' => 'PlayGameAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PlayGameAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlayGameActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Playground' => 
  array (
    'type' => 'class',
    'classname' => 'Playground',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Playground',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlaygroundContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Plumber' => 
  array (
    'type' => 'class',
    'classname' => 'Plumber',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Plumber',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PlumberContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PodcastEpisode' => 
  array (
    'type' => 'class',
    'classname' => 'PodcastEpisode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PodcastEpisode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PodcastEpisodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EpisodeContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PodcastSeason' => 
  array (
    'type' => 'class',
    'classname' => 'PodcastSeason',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PodcastSeason',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PodcastSeasonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PodcastSeries' => 
  array (
    'type' => 'class',
    'classname' => 'PodcastSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PodcastSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PodcastSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PoliceStation' => 
  array (
    'type' => 'class',
    'classname' => 'PoliceStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PoliceStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PoliceStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PoliticalParty' => 
  array (
    'type' => 'class',
    'classname' => 'PoliticalParty',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PoliticalParty',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PoliticalPartyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Pond' => 
  array (
    'type' => 'class',
    'classname' => 'Pond',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Pond',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PondContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PostOffice' => 
  array (
    'type' => 'class',
    'classname' => 'PostOffice',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PostOffice',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PostOfficeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\GovernmentOfficeContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PostalAddress' => 
  array (
    'type' => 'class',
    'classname' => 'PostalAddress',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PostalAddress',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PostalAddressContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ContactPointContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PostalCodeRangeSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'PostalCodeRangeSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PostalCodeRangeSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PostalCodeRangeSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Poster' => 
  array (
    'type' => 'class',
    'classname' => 'Poster',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Poster',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PosterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PreOrderAction' => 
  array (
    'type' => 'class',
    'classname' => 'PreOrderAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PreOrderAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PreOrderActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PrependAction' => 
  array (
    'type' => 'class',
    'classname' => 'PrependAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PrependAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PrependActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AddActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InsertActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Preschool' => 
  array (
    'type' => 'class',
    'classname' => 'Preschool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Preschool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PreschoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PresentationDigitalDocument' => 
  array (
    'type' => 'class',
    'classname' => 'PresentationDigitalDocument',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PresentationDigitalDocument',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PresentationDigitalDocumentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PreventionIndication' => 
  array (
    'type' => 'class',
    'classname' => 'PreventionIndication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PreventionIndication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PreventionIndicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PriceComponentTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'PriceComponentTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PriceComponentTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PriceComponentTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PriceSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'PriceSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PriceSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PriceTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'PriceTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PriceTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PriceTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Product' => 
  array (
    'type' => 'class',
    'classname' => 'Product',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Product',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProductCollection' => 
  array (
    'type' => 'class',
    'classname' => 'ProductCollection',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProductCollection',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductCollectionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CollectionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProductGroup' => 
  array (
    'type' => 'class',
    'classname' => 'ProductGroup',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProductGroup',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductGroupContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProductModel' => 
  array (
    'type' => 'class',
    'classname' => 'ProductModel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProductModel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductModelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProductReturnEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'ProductReturnEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProductReturnEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductReturnEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProductReturnPolicy' => 
  array (
    'type' => 'class',
    'classname' => 'ProductReturnPolicy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProductReturnPolicy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProductReturnPolicyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProfessionalService' => 
  array (
    'type' => 'class',
    'classname' => 'ProfessionalService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProfessionalService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProfessionalServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProfilePage' => 
  array (
    'type' => 'class',
    'classname' => 'ProfilePage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProfilePage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProfilePageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ProgramMembership' => 
  array (
    'type' => 'class',
    'classname' => 'ProgramMembership',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ProgramMembership',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProgramMembershipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Project' => 
  array (
    'type' => 'class',
    'classname' => 'Project',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Project',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PronounceableText' => 
  array (
    'type' => 'class',
    'classname' => 'PronounceableText',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PronounceableText',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PronounceableTextContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Property' => 
  array (
    'type' => 'class',
    'classname' => 'Property',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Property',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PropertyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PropertyValue' => 
  array (
    'type' => 'class',
    'classname' => 'PropertyValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PropertyValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PropertyValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PropertyValueSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'PropertyValueSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PropertyValueSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PropertyValueSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Protein' => 
  array (
    'type' => 'class',
    'classname' => 'Protein',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Protein',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ProteinContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PsychologicalTreatment' => 
  array (
    'type' => 'class',
    'classname' => 'PsychologicalTreatment',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PsychologicalTreatment',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PsychologicalTreatmentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PublicSwimmingPool' => 
  array (
    'type' => 'class',
    'classname' => 'PublicSwimmingPool',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PublicSwimmingPool',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PublicSwimmingPoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PublicToilet' => 
  array (
    'type' => 'class',
    'classname' => 'PublicToilet',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PublicToilet',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PublicToiletContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PublicationEvent' => 
  array (
    'type' => 'class',
    'classname' => 'PublicationEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PublicationEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PublicationEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PublicationIssue' => 
  array (
    'type' => 'class',
    'classname' => 'PublicationIssue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PublicationIssue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PublicationIssueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\PublicationVolume' => 
  array (
    'type' => 'class',
    'classname' => 'PublicationVolume',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\PublicationVolume',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\PublicationVolumeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\QAPage' => 
  array (
    'type' => 'class',
    'classname' => 'QAPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\QAPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QAPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\QualitativeValue' => 
  array (
    'type' => 'class',
    'classname' => 'QualitativeValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\QualitativeValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\QuantitativeValue' => 
  array (
    'type' => 'class',
    'classname' => 'QuantitativeValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\QuantitativeValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\QuantitativeValueDistribution' => 
  array (
    'type' => 'class',
    'classname' => 'QuantitativeValueDistribution',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\QuantitativeValueDistribution',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueDistributionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Quantity' => 
  array (
    'type' => 'class',
    'classname' => 'Quantity',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Quantity',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuantityContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Question' => 
  array (
    'type' => 'class',
    'classname' => 'Question',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Question',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuestionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CommentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Quiz' => 
  array (
    'type' => 'class',
    'classname' => 'Quiz',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Quiz',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuizContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LearningResourceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Quotation' => 
  array (
    'type' => 'class',
    'classname' => 'Quotation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Quotation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuotationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\QuoteAction' => 
  array (
    'type' => 'class',
    'classname' => 'QuoteAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\QuoteAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\QuoteActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RVPark' => 
  array (
    'type' => 'class',
    'classname' => 'RVPark',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RVPark',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RVParkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadiationTherapy' => 
  array (
    'type' => 'class',
    'classname' => 'RadiationTherapy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadiationTherapy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadiationTherapyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioBroadcastService' => 
  array (
    'type' => 'class',
    'classname' => 'RadioBroadcastService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioBroadcastService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioBroadcastServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastServiceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioChannel' => 
  array (
    'type' => 'class',
    'classname' => 'RadioChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioClip' => 
  array (
    'type' => 'class',
    'classname' => 'RadioClip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioClip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioClipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ClipContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioEpisode' => 
  array (
    'type' => 'class',
    'classname' => 'RadioEpisode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioEpisode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioEpisodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EpisodeContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioSeason' => 
  array (
    'type' => 'class',
    'classname' => 'RadioSeason',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioSeason',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioSeasonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioSeries' => 
  array (
    'type' => 'class',
    'classname' => 'RadioSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RadioStation' => 
  array (
    'type' => 'class',
    'classname' => 'RadioStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RadioStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RadioStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Rating' => 
  array (
    'type' => 'class',
    'classname' => 'Rating',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Rating',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RatingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReactAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReactAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReactAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReadAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReadAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReadAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReadActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RealEstateAgent' => 
  array (
    'type' => 'class',
    'classname' => 'RealEstateAgent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RealEstateAgent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RealEstateAgentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RealEstateListing' => 
  array (
    'type' => 'class',
    'classname' => 'RealEstateListing',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RealEstateListing',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RealEstateListingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReceiveAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReceiveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReceiveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReceiveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Recipe' => 
  array (
    'type' => 'class',
    'classname' => 'Recipe',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Recipe',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RecipeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\HowToContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Recommendation' => 
  array (
    'type' => 'class',
    'classname' => 'Recommendation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Recommendation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RecommendationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RecommendedDoseSchedule' => 
  array (
    'type' => 'class',
    'classname' => 'RecommendedDoseSchedule',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RecommendedDoseSchedule',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RecommendedDoseScheduleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RecyclingCenter' => 
  array (
    'type' => 'class',
    'classname' => 'RecyclingCenter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RecyclingCenter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RecyclingCenterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RefundTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'RefundTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RefundTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RefundTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RegisterAction' => 
  array (
    'type' => 'class',
    'classname' => 'RegisterAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RegisterAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RegisterActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RejectAction' => 
  array (
    'type' => 'class',
    'classname' => 'RejectAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RejectAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RejectActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RentAction' => 
  array (
    'type' => 'class',
    'classname' => 'RentAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RentAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RentActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RentalCarReservation' => 
  array (
    'type' => 'class',
    'classname' => 'RentalCarReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RentalCarReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RentalCarReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RepaymentSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'RepaymentSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RepaymentSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RepaymentSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReplaceAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReplaceAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReplaceAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReplaceActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReplyAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReplyAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReplyAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReplyActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Report' => 
  array (
    'type' => 'class',
    'classname' => 'Report',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Report',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReportContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReportageNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'ReportageNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReportageNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReportageNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReportedDoseSchedule' => 
  array (
    'type' => 'class',
    'classname' => 'ReportedDoseSchedule',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReportedDoseSchedule',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReportedDoseScheduleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ResearchOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'ResearchOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ResearchOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResearchOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ResearchProject' => 
  array (
    'type' => 'class',
    'classname' => 'ResearchProject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ResearchProject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResearchProjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ProjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Researcher' => 
  array (
    'type' => 'class',
    'classname' => 'Researcher',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Researcher',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResearcherContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AudienceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Reservation' => 
  array (
    'type' => 'class',
    'classname' => 'Reservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Reservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReservationPackage' => 
  array (
    'type' => 'class',
    'classname' => 'ReservationPackage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReservationPackage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReservationPackageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReservationStatusType' => 
  array (
    'type' => 'class',
    'classname' => 'ReservationStatusType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReservationStatusType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReservationStatusTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReserveAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReserveAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReserveAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReserveActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlanActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Reservoir' => 
  array (
    'type' => 'class',
    'classname' => 'Reservoir',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Reservoir',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReservoirContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Residence' => 
  array (
    'type' => 'class',
    'classname' => 'Residence',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Residence',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResidenceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Resort' => 
  array (
    'type' => 'class',
    'classname' => 'Resort',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Resort',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResortContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Restaurant' => 
  array (
    'type' => 'class',
    'classname' => 'Restaurant',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Restaurant',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RestaurantContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RestrictedDiet' => 
  array (
    'type' => 'class',
    'classname' => 'RestrictedDiet',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RestrictedDiet',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RestrictedDietContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ResumeAction' => 
  array (
    'type' => 'class',
    'classname' => 'ResumeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ResumeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ResumeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReturnAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReturnAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReturnAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReturnActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReturnFeesEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'ReturnFeesEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReturnFeesEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReturnFeesEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReturnLabelSourceEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'ReturnLabelSourceEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReturnLabelSourceEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReturnLabelSourceEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReturnMethodEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'ReturnMethodEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReturnMethodEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReturnMethodEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Review' => 
  array (
    'type' => 'class',
    'classname' => 'Review',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Review',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReviewAction' => 
  array (
    'type' => 'class',
    'classname' => 'ReviewAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReviewAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReviewActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ReviewNewsArticle' => 
  array (
    'type' => 'class',
    'classname' => 'ReviewNewsArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ReviewNewsArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ReviewNewsArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\CriticReviewContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RiverBodyOfWater' => 
  array (
    'type' => 'class',
    'classname' => 'RiverBodyOfWater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RiverBodyOfWater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RiverBodyOfWaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Role' => 
  array (
    'type' => 'class',
    'classname' => 'Role',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Role',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RoleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RoofingContractor' => 
  array (
    'type' => 'class',
    'classname' => 'RoofingContractor',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RoofingContractor',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RoofingContractorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Room' => 
  array (
    'type' => 'class',
    'classname' => 'Room',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Room',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RoomContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RsvpAction' => 
  array (
    'type' => 'class',
    'classname' => 'RsvpAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RsvpAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RsvpActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InformActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\RsvpResponseType' => 
  array (
    'type' => 'class',
    'classname' => 'RsvpResponseType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\RsvpResponseType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\RsvpResponseTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SaleEvent' => 
  array (
    'type' => 'class',
    'classname' => 'SaleEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SaleEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SaleEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SatiricalArticle' => 
  array (
    'type' => 'class',
    'classname' => 'SatiricalArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SatiricalArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SatiricalArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Schedule' => 
  array (
    'type' => 'class',
    'classname' => 'Schedule',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Schedule',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ScheduleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ScheduleAction' => 
  array (
    'type' => 'class',
    'classname' => 'ScheduleAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ScheduleAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ScheduleActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlanActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Schema' => 
  array (
    'type' => 'class',
    'classname' => 'Schema',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Schema',
    'implements' => 
    array (
    ),
  ),
  'Spatie\\SchemaOrg\\ScholarlyArticle' => 
  array (
    'type' => 'class',
    'classname' => 'ScholarlyArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ScholarlyArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ScholarlyArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\School' => 
  array (
    'type' => 'class',
    'classname' => 'School',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\School',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SchoolContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SchoolDistrict' => 
  array (
    'type' => 'class',
    'classname' => 'SchoolDistrict',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SchoolDistrict',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SchoolDistrictContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ScreeningEvent' => 
  array (
    'type' => 'class',
    'classname' => 'ScreeningEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ScreeningEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ScreeningEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Sculpture' => 
  array (
    'type' => 'class',
    'classname' => 'Sculpture',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Sculpture',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SculptureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SeaBodyOfWater' => 
  array (
    'type' => 'class',
    'classname' => 'SeaBodyOfWater',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SeaBodyOfWater',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SeaBodyOfWaterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SearchAction' => 
  array (
    'type' => 'class',
    'classname' => 'SearchAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SearchAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SearchActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SearchRescueOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'SearchRescueOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SearchRescueOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SearchRescueOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SearchResultsPage' => 
  array (
    'type' => 'class',
    'classname' => 'SearchResultsPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SearchResultsPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SearchResultsPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Season' => 
  array (
    'type' => 'class',
    'classname' => 'Season',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Season',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SeasonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Seat' => 
  array (
    'type' => 'class',
    'classname' => 'Seat',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Seat',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SeatContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SeekToAction' => 
  array (
    'type' => 'class',
    'classname' => 'SeekToAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SeekToAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SeekToActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SelfStorage' => 
  array (
    'type' => 'class',
    'classname' => 'SelfStorage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SelfStorage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SelfStorageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SellAction' => 
  array (
    'type' => 'class',
    'classname' => 'SellAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SellAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SellActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SendAction' => 
  array (
    'type' => 'class',
    'classname' => 'SendAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SendAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SendActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Series' => 
  array (
    'type' => 'class',
    'classname' => 'Series',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Series',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Service' => 
  array (
    'type' => 'class',
    'classname' => 'Service',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Service',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ServiceChannel' => 
  array (
    'type' => 'class',
    'classname' => 'ServiceChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ServiceChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ServiceChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShareAction' => 
  array (
    'type' => 'class',
    'classname' => 'ShareAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShareAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShareActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SheetMusic' => 
  array (
    'type' => 'class',
    'classname' => 'SheetMusic',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SheetMusic',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SheetMusicContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShippingDeliveryTime' => 
  array (
    'type' => 'class',
    'classname' => 'ShippingDeliveryTime',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShippingDeliveryTime',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShippingDeliveryTimeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShippingRateSettings' => 
  array (
    'type' => 'class',
    'classname' => 'ShippingRateSettings',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShippingRateSettings',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShippingRateSettingsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShoeStore' => 
  array (
    'type' => 'class',
    'classname' => 'ShoeStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShoeStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShoeStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShoppingCenter' => 
  array (
    'type' => 'class',
    'classname' => 'ShoppingCenter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShoppingCenter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShoppingCenterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ShortStory' => 
  array (
    'type' => 'class',
    'classname' => 'ShortStory',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ShortStory',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ShortStoryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SingleFamilyResidence' => 
  array (
    'type' => 'class',
    'classname' => 'SingleFamilyResidence',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SingleFamilyResidence',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SingleFamilyResidenceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\HouseContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SiteNavigationElement' => 
  array (
    'type' => 'class',
    'classname' => 'SiteNavigationElement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SiteNavigationElement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SiteNavigationElementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SizeGroupEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'SizeGroupEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SizeGroupEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SizeGroupEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SizeSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'SizeSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SizeSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SizeSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SizeSystemEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'SizeSystemEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SizeSystemEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SizeSystemEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SkiResort' => 
  array (
    'type' => 'class',
    'classname' => 'SkiResort',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SkiResort',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SkiResortContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ResortContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      7 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SocialEvent' => 
  array (
    'type' => 'class',
    'classname' => 'SocialEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SocialEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SocialEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SocialMediaPosting' => 
  array (
    'type' => 'class',
    'classname' => 'SocialMediaPosting',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SocialMediaPosting',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SoftwareApplication' => 
  array (
    'type' => 'class',
    'classname' => 'SoftwareApplication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SoftwareApplication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SoftwareSourceCode' => 
  array (
    'type' => 'class',
    'classname' => 'SoftwareSourceCode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SoftwareSourceCode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SoftwareSourceCodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SolveMathAction' => 
  array (
    'type' => 'class',
    'classname' => 'SolveMathAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SolveMathAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SolveMathActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SomeProducts' => 
  array (
    'type' => 'class',
    'classname' => 'SomeProducts',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SomeProducts',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SomeProductsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SpeakableSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'SpeakableSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SpeakableSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SpeakableSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SpecialAnnouncement' => 
  array (
    'type' => 'class',
    'classname' => 'SpecialAnnouncement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SpecialAnnouncement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SpecialAnnouncementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Specialty' => 
  array (
    'type' => 'class',
    'classname' => 'Specialty',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Specialty',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SpecialtyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportingGoodsStore' => 
  array (
    'type' => 'class',
    'classname' => 'SportingGoodsStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportingGoodsStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportingGoodsStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportsActivityLocation' => 
  array (
    'type' => 'class',
    'classname' => 'SportsActivityLocation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportsActivityLocation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportsClub' => 
  array (
    'type' => 'class',
    'classname' => 'SportsClub',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportsClub',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportsClubContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportsEvent' => 
  array (
    'type' => 'class',
    'classname' => 'SportsEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportsEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportsEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportsOrganization' => 
  array (
    'type' => 'class',
    'classname' => 'SportsOrganization',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportsOrganization',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportsOrganizationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SportsTeam' => 
  array (
    'type' => 'class',
    'classname' => 'SportsTeam',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SportsTeam',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SportsTeamContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\SportsOrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SpreadsheetDigitalDocument' => 
  array (
    'type' => 'class',
    'classname' => 'SpreadsheetDigitalDocument',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SpreadsheetDigitalDocument',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SpreadsheetDigitalDocumentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StadiumOrArena' => 
  array (
    'type' => 'class',
    'classname' => 'StadiumOrArena',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StadiumOrArena',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StadiumOrArenaContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      6 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\State' => 
  array (
    'type' => 'class',
    'classname' => 'State',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\State',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StateContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Statement' => 
  array (
    'type' => 'class',
    'classname' => 'Statement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Statement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StatementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StatisticalPopulation' => 
  array (
    'type' => 'class',
    'classname' => 'StatisticalPopulation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StatisticalPopulation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StatisticalPopulationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StatisticalVariable' => 
  array (
    'type' => 'class',
    'classname' => 'StatisticalVariable',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StatisticalVariable',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StatisticalVariableContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ConstraintNodeContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StatusEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'StatusEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StatusEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SteeringPositionValue' => 
  array (
    'type' => 'class',
    'classname' => 'SteeringPositionValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SteeringPositionValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SteeringPositionValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Store' => 
  array (
    'type' => 'class',
    'classname' => 'Store',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Store',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StructuredValue' => 
  array (
    'type' => 'class',
    'classname' => 'StructuredValue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StructuredValue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\StupidType' => 
  array (
    'type' => 'class',
    'classname' => 'StupidType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\StupidType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\StupidTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SubscribeAction' => 
  array (
    'type' => 'class',
    'classname' => 'SubscribeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SubscribeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SubscribeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Substance' => 
  array (
    'type' => 'class',
    'classname' => 'Substance',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Substance',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SubstanceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SubwayStation' => 
  array (
    'type' => 'class',
    'classname' => 'SubwayStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SubwayStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SubwayStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Suite' => 
  array (
    'type' => 'class',
    'classname' => 'Suite',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Suite',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SuiteContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SuperficialAnatomy' => 
  array (
    'type' => 'class',
    'classname' => 'SuperficialAnatomy',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SuperficialAnatomy',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SuperficialAnatomyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SurgicalProcedure' => 
  array (
    'type' => 'class',
    'classname' => 'SurgicalProcedure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SurgicalProcedure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SurgicalProcedureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\SuspendAction' => 
  array (
    'type' => 'class',
    'classname' => 'SuspendAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\SuspendAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SuspendActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Syllabus' => 
  array (
    'type' => 'class',
    'classname' => 'Syllabus',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Syllabus',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SyllabusContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LearningResourceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Synagogue' => 
  array (
    'type' => 'class',
    'classname' => 'Synagogue',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Synagogue',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\SynagogueContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TVClip' => 
  array (
    'type' => 'class',
    'classname' => 'TVClip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TVClip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TVClipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ClipContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TVEpisode' => 
  array (
    'type' => 'class',
    'classname' => 'TVEpisode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TVEpisode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TVEpisodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\EpisodeContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TVSeason' => 
  array (
    'type' => 'class',
    'classname' => 'TVSeason',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TVSeason',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TVSeasonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TVSeries' => 
  array (
    'type' => 'class',
    'classname' => 'TVSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TVSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TVSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Table' => 
  array (
    'type' => 'class',
    'classname' => 'Table',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Table',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TableContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TakeAction' => 
  array (
    'type' => 'class',
    'classname' => 'TakeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TakeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TakeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TattooParlor' => 
  array (
    'type' => 'class',
    'classname' => 'TattooParlor',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TattooParlor',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TattooParlorContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Taxi' => 
  array (
    'type' => 'class',
    'classname' => 'Taxi',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Taxi',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TaxiContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TaxiReservation' => 
  array (
    'type' => 'class',
    'classname' => 'TaxiReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TaxiReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TaxiReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TaxiService' => 
  array (
    'type' => 'class',
    'classname' => 'TaxiService',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TaxiService',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TaxiServiceContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TaxiStand' => 
  array (
    'type' => 'class',
    'classname' => 'TaxiStand',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TaxiStand',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TaxiStandContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Taxon' => 
  array (
    'type' => 'class',
    'classname' => 'Taxon',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Taxon',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TaxonContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TechArticle' => 
  array (
    'type' => 'class',
    'classname' => 'TechArticle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TechArticle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TechArticleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ArticleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TelevisionChannel' => 
  array (
    'type' => 'class',
    'classname' => 'TelevisionChannel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TelevisionChannel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TelevisionChannelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TelevisionStation' => 
  array (
    'type' => 'class',
    'classname' => 'TelevisionStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TelevisionStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TelevisionStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TennisComplex' => 
  array (
    'type' => 'class',
    'classname' => 'TennisComplex',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TennisComplex',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TennisComplexContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TextDigitalDocument' => 
  array (
    'type' => 'class',
    'classname' => 'TextDigitalDocument',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TextDigitalDocument',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TextDigitalDocumentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TextObject' => 
  array (
    'type' => 'class',
    'classname' => 'TextObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TextObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TextObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TheaterEvent' => 
  array (
    'type' => 'class',
    'classname' => 'TheaterEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TheaterEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TheaterEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TheaterGroup' => 
  array (
    'type' => 'class',
    'classname' => 'TheaterGroup',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TheaterGroup',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TheaterGroupContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TherapeuticProcedure' => 
  array (
    'type' => 'class',
    'classname' => 'TherapeuticProcedure',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TherapeuticProcedure',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Thesis' => 
  array (
    'type' => 'class',
    'classname' => 'Thesis',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Thesis',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ThesisContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Thing' => 
  array (
    'type' => 'class',
    'classname' => 'Thing',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Thing',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ThreeDimensionalModel' => 
  array (
    'type' => 'class',
    'classname' => 'ThreeDimensionalModel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ThreeDimensionalModel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ThreeDimensionalModelContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Ticket' => 
  array (
    'type' => 'class',
    'classname' => 'Ticket',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Ticket',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TicketContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TieAction' => 
  array (
    'type' => 'class',
    'classname' => 'TieAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TieAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TieActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AchieveActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TierBenefitEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'TierBenefitEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TierBenefitEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TierBenefitEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TipAction' => 
  array (
    'type' => 'class',
    'classname' => 'TipAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TipAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TipActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TireShop' => 
  array (
    'type' => 'class',
    'classname' => 'TireShop',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TireShop',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TireShopContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TouristAttraction' => 
  array (
    'type' => 'class',
    'classname' => 'TouristAttraction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TouristAttraction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TouristAttractionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TouristDestination' => 
  array (
    'type' => 'class',
    'classname' => 'TouristDestination',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TouristDestination',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TouristDestinationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TouristInformationCenter' => 
  array (
    'type' => 'class',
    'classname' => 'TouristInformationCenter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TouristInformationCenter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TouristInformationCenterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TouristTrip' => 
  array (
    'type' => 'class',
    'classname' => 'TouristTrip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TouristTrip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TouristTripContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ToyStore' => 
  array (
    'type' => 'class',
    'classname' => 'ToyStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ToyStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ToyStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TrackAction' => 
  array (
    'type' => 'class',
    'classname' => 'TrackAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TrackAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TrackActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\FindActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TradeAction' => 
  array (
    'type' => 'class',
    'classname' => 'TradeAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TradeAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TrainReservation' => 
  array (
    'type' => 'class',
    'classname' => 'TrainReservation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TrainReservation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TrainReservationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReservationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TrainStation' => 
  array (
    'type' => 'class',
    'classname' => 'TrainStation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TrainStation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TrainStationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TrainTrip' => 
  array (
    'type' => 'class',
    'classname' => 'TrainTrip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TrainTrip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TrainTripContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TransferAction' => 
  array (
    'type' => 'class',
    'classname' => 'TransferAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TransferAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TravelAction' => 
  array (
    'type' => 'class',
    'classname' => 'TravelAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TravelAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TravelActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MoveActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TravelAgency' => 
  array (
    'type' => 'class',
    'classname' => 'TravelAgency',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TravelAgency',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TravelAgencyContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TreatmentIndication' => 
  array (
    'type' => 'class',
    'classname' => 'TreatmentIndication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TreatmentIndication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TreatmentIndicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Trip' => 
  array (
    'type' => 'class',
    'classname' => 'Trip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Trip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TripContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\TypeAndQuantityNode' => 
  array (
    'type' => 'class',
    'classname' => 'TypeAndQuantityNode',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\TypeAndQuantityNode',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\TypeAndQuantityNodeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UKNonprofitType' => 
  array (
    'type' => 'class',
    'classname' => 'UKNonprofitType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UKNonprofitType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UKNonprofitTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\USNonprofitType' => 
  array (
    'type' => 'class',
    'classname' => 'USNonprofitType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\USNonprofitType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\USNonprofitTypeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UnRegisterAction' => 
  array (
    'type' => 'class',
    'classname' => 'UnRegisterAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UnRegisterAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UnRegisterActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UnitPriceSpecification' => 
  array (
    'type' => 'class',
    'classname' => 'UnitPriceSpecification',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UnitPriceSpecification',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UnitPriceSpecificationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UpdateAction' => 
  array (
    'type' => 'class',
    'classname' => 'UpdateAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UpdateAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UseAction' => 
  array (
    'type' => 'class',
    'classname' => 'UseAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UseAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UseActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserBlocks' => 
  array (
    'type' => 'class',
    'classname' => 'UserBlocks',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserBlocks',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserBlocksContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserCheckins' => 
  array (
    'type' => 'class',
    'classname' => 'UserCheckins',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserCheckins',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserCheckinsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserComments' => 
  array (
    'type' => 'class',
    'classname' => 'UserComments',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserComments',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserCommentsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserDownloads' => 
  array (
    'type' => 'class',
    'classname' => 'UserDownloads',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserDownloads',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserDownloadsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserInteraction' => 
  array (
    'type' => 'class',
    'classname' => 'UserInteraction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserInteraction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserLikes' => 
  array (
    'type' => 'class',
    'classname' => 'UserLikes',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserLikes',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserLikesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserPageVisits' => 
  array (
    'type' => 'class',
    'classname' => 'UserPageVisits',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserPageVisits',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserPageVisitsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserPlays' => 
  array (
    'type' => 'class',
    'classname' => 'UserPlays',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserPlays',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserPlaysContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserPlusOnes' => 
  array (
    'type' => 'class',
    'classname' => 'UserPlusOnes',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserPlusOnes',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserPlusOnesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserReview' => 
  array (
    'type' => 'class',
    'classname' => 'UserReview',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserReview',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserReviewContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ReviewContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\UserTweets' => 
  array (
    'type' => 'class',
    'classname' => 'UserTweets',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\UserTweets',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\UserTweetsContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VacationRental' => 
  array (
    'type' => 'class',
    'classname' => 'VacationRental',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VacationRental',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VacationRentalContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Vehicle' => 
  array (
    'type' => 'class',
    'classname' => 'Vehicle',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Vehicle',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VehicleContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ProductContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Vein' => 
  array (
    'type' => 'class',
    'classname' => 'Vein',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Vein',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VeinContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\VesselContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Vessel' => 
  array (
    'type' => 'class',
    'classname' => 'Vessel',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Vessel',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VesselContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VeterinaryCare' => 
  array (
    'type' => 'class',
    'classname' => 'VeterinaryCare',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VeterinaryCare',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VeterinaryCareContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoGallery' => 
  array (
    'type' => 'class',
    'classname' => 'VideoGallery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoGallery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoGalleryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CollectionPageContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MediaGalleryContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoGame' => 
  array (
    'type' => 'class',
    'classname' => 'VideoGame',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoGame',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoGameContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\GameContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoGameClip' => 
  array (
    'type' => 'class',
    'classname' => 'VideoGameClip',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoGameClip',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoGameClipContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ClipContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoGameSeries' => 
  array (
    'type' => 'class',
    'classname' => 'VideoGameSeries',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoGameSeries',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoGameSeriesContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\SeriesContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoObject' => 
  array (
    'type' => 'class',
    'classname' => 'VideoObject',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoObject',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoObjectContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VideoObjectSnapshot' => 
  array (
    'type' => 'class',
    'classname' => 'VideoObjectSnapshot',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VideoObjectSnapshot',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VideoObjectSnapshotContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\VideoObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\ViewAction' => 
  array (
    'type' => 'class',
    'classname' => 'ViewAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\ViewAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ViewActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VirtualLocation' => 
  array (
    'type' => 'class',
    'classname' => 'VirtualLocation',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VirtualLocation',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VirtualLocationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VisualArtsEvent' => 
  array (
    'type' => 'class',
    'classname' => 'VisualArtsEvent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VisualArtsEvent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VisualArtsEventContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EventContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VisualArtwork' => 
  array (
    'type' => 'class',
    'classname' => 'VisualArtwork',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VisualArtwork',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VisualArtworkContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VitalSign' => 
  array (
    'type' => 'class',
    'classname' => 'VitalSign',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VitalSign',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VitalSignContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Volcano' => 
  array (
    'type' => 'class',
    'classname' => 'Volcano',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Volcano',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VolcanoContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\VoteAction' => 
  array (
    'type' => 'class',
    'classname' => 'VoteAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\VoteAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\VoteActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ChooseActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WPAdBlock' => 
  array (
    'type' => 'class',
    'classname' => 'WPAdBlock',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WPAdBlock',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WPAdBlockContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WPFooter' => 
  array (
    'type' => 'class',
    'classname' => 'WPFooter',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WPFooter',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WPFooterContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WPHeader' => 
  array (
    'type' => 'class',
    'classname' => 'WPHeader',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WPHeader',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WPHeaderContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WPSideBar' => 
  array (
    'type' => 'class',
    'classname' => 'WPSideBar',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WPSideBar',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WPSideBarContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WantAction' => 
  array (
    'type' => 'class',
    'classname' => 'WantAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WantAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WantActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WarrantyPromise' => 
  array (
    'type' => 'class',
    'classname' => 'WarrantyPromise',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WarrantyPromise',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WarrantyPromiseContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WarrantyScope' => 
  array (
    'type' => 'class',
    'classname' => 'WarrantyScope',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WarrantyScope',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WarrantyScopeContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WatchAction' => 
  array (
    'type' => 'class',
    'classname' => 'WatchAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WatchAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WatchActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Waterfall' => 
  array (
    'type' => 'class',
    'classname' => 'Waterfall',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Waterfall',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WaterfallContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LandformContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WearAction' => 
  array (
    'type' => 'class',
    'classname' => 'WearAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WearAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WearActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\UseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WearableMeasurementTypeEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'WearableMeasurementTypeEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WearableMeasurementTypeEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WearableMeasurementTypeEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\MeasurementTypeEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WearableSizeGroupEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'WearableSizeGroupEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WearableSizeGroupEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WearableSizeGroupEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SizeGroupEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WearableSizeSystemEnumeration' => 
  array (
    'type' => 'class',
    'classname' => 'WearableSizeSystemEnumeration',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WearableSizeSystemEnumeration',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WearableSizeSystemEnumerationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\SizeSystemEnumerationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebAPI' => 
  array (
    'type' => 'class',
    'classname' => 'WebAPI',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebAPI',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebAPIContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ServiceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebApplication' => 
  array (
    'type' => 'class',
    'classname' => 'WebApplication',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebApplication',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebApplicationContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebContent' => 
  array (
    'type' => 'class',
    'classname' => 'WebContent',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebContent',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebContentContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebPage' => 
  array (
    'type' => 'class',
    'classname' => 'WebPage',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebPage',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebPageContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebPageElement' => 
  array (
    'type' => 'class',
    'classname' => 'WebPageElement',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebPageElement',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WebSite' => 
  array (
    'type' => 'class',
    'classname' => 'WebSite',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WebSite',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WebSiteContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WholesaleStore' => 
  array (
    'type' => 'class',
    'classname' => 'WholesaleStore',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WholesaleStore',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WholesaleStoreContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\StoreContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WinAction' => 
  array (
    'type' => 'class',
    'classname' => 'WinAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WinAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WinActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\AchieveActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Winery' => 
  array (
    'type' => 'class',
    'classname' => 'Winery',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Winery',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WineryContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      4 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      5 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WorkBasedProgram' => 
  array (
    'type' => 'class',
    'classname' => 'WorkBasedProgram',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WorkBasedProgram',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WorkBasedProgramContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalProgramContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WorkersUnion' => 
  array (
    'type' => 'class',
    'classname' => 'WorkersUnion',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WorkersUnion',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WorkersUnionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\WriteAction' => 
  array (
    'type' => 'class',
    'classname' => 'WriteAction',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\WriteAction',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\WriteActionContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\ActionContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\XPathType' => 
  array (
    'type' => 'class',
    'classname' => 'XPathType',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\XPathType',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\XPathTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Zoo' => 
  array (
    'type' => 'class',
    'classname' => 'Zoo',
    'isabstract' => false,
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Zoo',
    'implements' => 
    array (
      0 => 'Spatie\\SchemaOrg\\Contracts\\ZooContract',
      1 => 'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
      2 => 'Spatie\\SchemaOrg\\Contracts\\PlaceContract',
      3 => 'Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Type' => 
  array (
    'type' => 'interface',
    'interfacename' => 'Type',
    'namespace' => 'Spatie\\SchemaOrg',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Type',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AMRadioChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AMRadioChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AMRadioChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\APIReferenceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'APIReferenceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\APIReferenceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AboutPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AboutPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AboutPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AcceptActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AcceptActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AcceptActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AccommodationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AccommodationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AccommodationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AccountingServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AccountingServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AccountingServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AchieveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AchieveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AchieveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ActionAccessSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActionAccessSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ActionAccessSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ActionStatusTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActionStatusTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ActionStatusTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ActivateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ActivateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ActivateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AddActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AddActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AddActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AdministrativeAreaContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AdministrativeAreaContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AdultEntertainmentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AdultEntertainmentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AdultEntertainmentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AdultOrientedEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AdultOrientedEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AdultOrientedEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AdvertiserContentArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AdvertiserContentArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AdvertiserContentArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AggregateOfferContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AggregateOfferContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AggregateOfferContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AggregateRatingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AggregateRatingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AggregateRatingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AgreeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AgreeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AgreeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AirlineContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AirlineContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AirlineContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AirportContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AirportContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AirportContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AlignmentObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AlignmentObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AlignmentObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AllocateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AllocateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AllocateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AmpStoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AmpStoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AmpStoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AmusementParkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AmusementParkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AmusementParkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AnalysisNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AnalysisNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AnalysisNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AnatomicalStructureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AnatomicalStructureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AnatomicalSystemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AnatomicalSystemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AnatomicalSystemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AnimalShelterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AnimalShelterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AnimalShelterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AnswerContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AnswerContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AnswerContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ApartmentComplexContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ApartmentComplexContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ApartmentComplexContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ApartmentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ApartmentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ApartmentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AppendActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AppendActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AppendActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ApplyActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ApplyActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ApplyActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ApprovedIndicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ApprovedIndicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ApprovedIndicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AquariumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AquariumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AquariumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArchiveComponentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArchiveComponentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArchiveComponentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArchiveOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArchiveOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArchiveOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArriveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArriveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArriveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArtGalleryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArtGalleryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArtGalleryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArteryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArteryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArteryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AskActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AskActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AskActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AskPublicNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AskPublicNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AskPublicNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AssessActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AssessActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AssessActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AssignActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AssignActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AssignActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AtlasContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AtlasContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AtlasContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AttorneyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AttorneyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AttorneyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AudioObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AudioObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AudioObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AudioObjectSnapshotContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AudioObjectSnapshotContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AudioObjectSnapshotContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AudiobookContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AudiobookContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AudiobookContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AuthorizeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AuthorizeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AuthorizeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoBodyShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoBodyShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoBodyShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoDealerContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoDealerContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoDealerContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoPartsStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoPartsStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoPartsStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoRentalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoRentalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoRentalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoRepairContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoRepairContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoRepairContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutoWashContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutoWashContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutoWashContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutomatedTellerContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutomatedTellerContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutomatedTellerContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'AutomotiveBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\AutomotiveBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BackgroundNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BackgroundNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BackgroundNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BakeryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BakeryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BakeryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BankAccountContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BankAccountContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BankAccountContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BankOrCreditUnionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BankOrCreditUnionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BankOrCreditUnionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BarOrPubContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BarOrPubContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BarOrPubContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BarcodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BarcodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BarcodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BeachContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BeachContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BeachContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BeautySalonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BeautySalonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BeautySalonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BedAndBreakfastContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BedAndBreakfastContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BedAndBreakfastContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BedDetailsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BedDetailsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BedDetailsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BedTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BedTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BedTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BefriendActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BefriendActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BefriendActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BikeStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BikeStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BikeStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BioChemEntityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BioChemEntityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BlogContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BlogContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BlogContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BlogPostingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BlogPostingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BlogPostingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BloodTestContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BloodTestContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BloodTestContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BoardingPolicyTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BoardingPolicyTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BoardingPolicyTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BoatReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BoatReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BoatReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BoatTerminalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BoatTerminalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BoatTerminalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BoatTripContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BoatTripContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BoatTripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BodyMeasurementTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BodyMeasurementTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BodyMeasurementTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BodyOfWaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BodyOfWaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BoneContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BoneContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BoneContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BookContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BookContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BookContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BookFormatTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BookFormatTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BookFormatTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BookSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BookSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BookSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BookStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BookStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BookStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BookmarkActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BookmarkActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BookmarkActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BorrowActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BorrowActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BorrowActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BowlingAlleyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BowlingAlleyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BowlingAlleyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BrainStructureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BrainStructureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BrainStructureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BrandContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BrandContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BrandContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BreadcrumbListContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BreadcrumbListContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BreadcrumbListContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BreweryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BreweryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BreweryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BridgeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BridgeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BridgeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BroadcastChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BroadcastChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BroadcastEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BroadcastEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BroadcastEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BroadcastFrequencySpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BroadcastFrequencySpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BroadcastFrequencySpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BroadcastServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BroadcastServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BroadcastServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BrokerageAccountContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BrokerageAccountContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BrokerageAccountContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BuddhistTempleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BuddhistTempleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BuddhistTempleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusOrCoachContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusOrCoachContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusOrCoachContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusStopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusStopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusStopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusTripContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusTripContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusTripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusinessAudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusinessAudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusinessAudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusinessEntityTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusinessEntityTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusinessEntityTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusinessEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusinessEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusinessEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BusinessFunctionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BusinessFunctionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BusinessFunctionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\BuyActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'BuyActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\BuyActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CDCPMDRecordContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CDCPMDRecordContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CDCPMDRecordContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CableOrSatelliteServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CableOrSatelliteServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CableOrSatelliteServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CafeOrCoffeeShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CafeOrCoffeeShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CafeOrCoffeeShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CampgroundContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CampgroundContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CampgroundContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CampingPitchContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CampingPitchContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CampingPitchContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CanalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CanalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CanalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CancelActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CancelActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CancelActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CarContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CarContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CarContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CarUsageTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CarUsageTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CarUsageTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CasinoContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CasinoContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CasinoContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CategoryCodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CategoryCodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CategoryCodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CategoryCodeSetContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CategoryCodeSetContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CategoryCodeSetContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CatholicChurchContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CatholicChurchContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CatholicChurchContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CemeteryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CemeteryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CemeteryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CertificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CertificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CertificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CertificationStatusEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CertificationStatusEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CertificationStatusEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChapterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChapterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChapterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CheckActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CheckActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CheckActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CheckInActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CheckInActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CheckInActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CheckOutActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CheckOutActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CheckOutActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CheckoutPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CheckoutPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CheckoutPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChemicalSubstanceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChemicalSubstanceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChemicalSubstanceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChildCareContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChildCareContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChildCareContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChildrensEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChildrensEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChildrensEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChooseActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChooseActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChooseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ChurchContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ChurchContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ChurchContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CityHallContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CityHallContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CityHallContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CivicStructureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CivicStructureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CivicStructureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ClaimContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClaimContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ClaimContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ClaimReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClaimReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ClaimReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ClipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ClipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ClothingStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ClothingStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ClothingStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CollectionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CollectionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CollectionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CollectionPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CollectionPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CollectionPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CollegeOrUniversityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CollegeOrUniversityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CollegeOrUniversityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComedyClubContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComedyClubContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComedyClubContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComedyEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComedyEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComedyEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComicCoverArtContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComicCoverArtContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComicCoverArtContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComicIssueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComicIssueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComicIssueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComicSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComicSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComicSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComicStoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComicStoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComicStoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CommentActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CommentActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CommentActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CommentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CommentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CommentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CommunicateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CommunicateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CompleteDataFeedContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CompleteDataFeedContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CompleteDataFeedContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CompoundPriceSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CompoundPriceSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CompoundPriceSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComputerLanguageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComputerLanguageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComputerLanguageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ComputerStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ComputerStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ComputerStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConfirmActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConfirmActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConfirmActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConsortiumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConsortiumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConsortiumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConstraintNodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConstraintNodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConstraintNodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConsumeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConsumeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ContactPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ContactPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ContactPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ContactPointContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ContactPointContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ContactPointContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ContactPointOptionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ContactPointOptionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ContactPointOptionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ContinentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ContinentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ContinentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ControlActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ControlActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ControlActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConvenienceStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConvenienceStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConvenienceStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ConversationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ConversationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ConversationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CookActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CookActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CookActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CorporationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CorporationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CorporationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CorrectionCommentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CorrectionCommentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CorrectionCommentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CountryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CountryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CountryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CourseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CourseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CourseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CourseInstanceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CourseInstanceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CourseInstanceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CourthouseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CourthouseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CourthouseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CoverArtContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CoverArtContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CoverArtContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CovidTestingFacilityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CovidTestingFacilityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CovidTestingFacilityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CreateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CreateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreativeWorkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CreativeWorkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreativeWorkSeasonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeasonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreativeWorkSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CreativeWorkSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CreditCardContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CreditCardContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CreditCardContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CrematoriumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CrematoriumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CrematoriumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CriticReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CriticReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CriticReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CssSelectorTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CssSelectorTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CssSelectorTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\CurrencyConversionServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'CurrencyConversionServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\CurrencyConversionServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DDxElementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DDxElementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DDxElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DanceEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DanceEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DanceEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DanceGroupContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DanceGroupContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DanceGroupContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DataCatalogContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DataCatalogContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DataCatalogContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DataDownloadContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DataDownloadContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DataDownloadContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DataFeedContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DataFeedContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DataFeedContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DataFeedItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DataFeedItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DataFeedItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DatasetContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DatasetContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DatasetContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DatedMoneySpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DatedMoneySpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DatedMoneySpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DayOfWeekContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DayOfWeekContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DayOfWeekContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DaySpaContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DaySpaContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DaySpaContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeactivateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeactivateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeactivateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DefenceEstablishmentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DefenceEstablishmentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DefenceEstablishmentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DefinedRegionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DefinedRegionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DefinedRegionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DefinedTermContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DefinedTermContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DefinedTermContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DefinedTermSetContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DefinedTermSetContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DefinedTermSetContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeleteActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeleteActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeleteActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeliveryChargeSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeliveryChargeSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeliveryChargeSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeliveryEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeliveryEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeliveryEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeliveryMethodContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeliveryMethodContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeliveryMethodContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DeliveryTimeSettingsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DeliveryTimeSettingsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DeliveryTimeSettingsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DemandContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DemandContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DemandContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DentistContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DentistContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DentistContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DepartActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DepartActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DepartActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DepartmentStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DepartmentStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DepartmentStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DepositAccountContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DepositAccountContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DepositAccountContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DiagnosticLabContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DiagnosticLabContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DiagnosticLabContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DiagnosticProcedureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DiagnosticProcedureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DiagnosticProcedureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DietContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DietContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DietContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DietarySupplementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DietarySupplementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DietarySupplementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DigitalDocumentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DigitalDocumentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DigitalDocumentPermissionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DigitalDocumentPermissionTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DigitalDocumentPermissionTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DigitalPlatformEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DigitalPlatformEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DigitalPlatformEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DisagreeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DisagreeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DisagreeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DiscoverActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DiscoverActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DiscoverActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DiscussionForumPostingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DiscussionForumPostingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DiscussionForumPostingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DislikeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DislikeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DislikeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DistanceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DistanceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DistanceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DistilleryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DistilleryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DistilleryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DonateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DonateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DonateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DoseScheduleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DoseScheduleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DownloadActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DownloadActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DownloadActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrawActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrawActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrawActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrawingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrawingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrawingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrinkActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrinkActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrinkActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DriveWheelConfigurationValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DriveWheelConfigurationValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DriveWheelConfigurationValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugClassContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugClassContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugClassContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugCostCategoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugCostCategoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugCostCategoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugCostContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugCostContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugCostContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugLegalStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugLegalStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugLegalStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugPregnancyCategoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugPregnancyCategoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugPregnancyCategoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugPrescriptionStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugPrescriptionStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugPrescriptionStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DrugStrengthContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DrugStrengthContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DrugStrengthContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DryCleaningOrLaundryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DryCleaningOrLaundryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DryCleaningOrLaundryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\DurationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'DurationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\DurationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EUEnergyEfficiencyEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EUEnergyEfficiencyEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EUEnergyEfficiencyEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EatActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EatActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EatActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EducationEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EducationEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EducationEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EducationalAudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EducationalAudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EducationalAudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalCredentialContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EducationalOccupationalCredentialContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalCredentialContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalProgramContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EducationalOccupationalProgramContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EducationalOccupationalProgramContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EducationalOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EducationalOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ElectricianContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ElectricianContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ElectricianContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ElectronicsStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ElectronicsStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ElectronicsStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ElementarySchoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ElementarySchoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ElementarySchoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmailMessageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmailMessageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmailMessageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmbassyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmbassyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmbassyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmergencyServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmergencyServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmployeeRoleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmployeeRoleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmployeeRoleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmployerAggregateRatingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmployerAggregateRatingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmployerAggregateRatingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmployerReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmployerReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmployerReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EmploymentAgencyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EmploymentAgencyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EmploymentAgencyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EndorseActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EndorseActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EndorseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EndorsementRatingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EndorsementRatingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EndorsementRatingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EnergyConsumptionDetailsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EnergyConsumptionDetailsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EnergyConsumptionDetailsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EnergyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EnergyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EnergyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EnergyEfficiencyEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EnergyEfficiencyEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EnergyEfficiencyEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EnergyStarEnergyEfficiencyEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EnergyStarEnergyEfficiencyEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EnergyStarEnergyEfficiencyEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EngineSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EngineSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EngineSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EntertainmentBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EntertainmentBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EntryPointContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EntryPointContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EntryPointContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EpisodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EpisodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EpisodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventAttendanceModeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventAttendanceModeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventAttendanceModeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventStatusTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventStatusTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventStatusTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\EventVenueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'EventVenueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\EventVenueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ExchangeRateSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExchangeRateSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ExchangeRateSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ExerciseActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExerciseActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ExerciseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ExerciseGymContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExerciseGymContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ExerciseGymContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ExercisePlanContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExercisePlanContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ExercisePlanContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ExhibitionEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ExhibitionEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ExhibitionEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FAQPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FAQPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FAQPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FMRadioChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FMRadioChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FMRadioChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FastFoodRestaurantContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FastFoodRestaurantContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FastFoodRestaurantContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FestivalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FestivalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FestivalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FilmActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FilmActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FilmActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FinancialProductContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FinancialProductContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FinancialProductContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FinancialServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FinancialServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FindActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FindActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FindActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FireStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FireStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FireStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FlightContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FlightContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FlightContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FlightReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FlightReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FlightReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FloorPlanContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FloorPlanContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FloorPlanContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FloristContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FloristContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FloristContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FollowActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FollowActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FollowActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FoodEstablishmentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FoodEstablishmentReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FoodEstablishmentReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FoodEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FoodEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FoodEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FoodServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FoodServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FoodServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FundingAgencyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FundingAgencyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FundingAgencyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FundingSchemeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FundingSchemeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FundingSchemeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\FurnitureStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'FurnitureStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\FurnitureStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GameAvailabilityEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GameAvailabilityEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GameAvailabilityEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GameContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GameContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GameContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GamePlayModeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GamePlayModeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GamePlayModeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GameServerContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GameServerContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GameServerContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GameServerStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GameServerStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GameServerStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GardenStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GardenStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GardenStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GasStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GasStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GasStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GatedResidenceCommunityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GatedResidenceCommunityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GatedResidenceCommunityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GenderTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GenderTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GenderTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeneContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeneContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeneContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeneralContractorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeneralContractorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeneralContractorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeoCircleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeoCircleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeoCircleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeoCoordinatesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeoCoordinatesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeoCoordinatesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeoShapeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeoShapeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeoShapeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GeospatialGeometryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GeospatialGeometryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GeospatialGeometryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GiveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GiveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GiveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GolfCourseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GolfCourseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GolfCourseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentBenefitsTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentBenefitsTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentBenefitsTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentBuildingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentBuildingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentOfficeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentOfficeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentOfficeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentPermitContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentPermitContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentPermitContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GovernmentServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GovernmentServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GovernmentServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GrantContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GrantContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GrantContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GroceryStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GroceryStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GroceryStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\GuideContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'GuideContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\GuideContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HVACBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HVACBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HVACBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HackathonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HackathonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HackathonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HairSalonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HairSalonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HairSalonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HardwareStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HardwareStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HardwareStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthAndBeautyBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthAndBeautyBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthAspectEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthAspectEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthAspectEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthClubContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthClubContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthClubContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthInsurancePlanContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthInsurancePlanContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthInsurancePlanContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthPlanCostSharingSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthPlanCostSharingSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthPlanCostSharingSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthPlanFormularyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthPlanFormularyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthPlanFormularyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthPlanNetworkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthPlanNetworkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthPlanNetworkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HealthTopicContentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HealthTopicContentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HealthTopicContentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HighSchoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HighSchoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HighSchoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HinduTempleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HinduTempleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HinduTempleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HobbyShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HobbyShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HobbyShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HomeAndConstructionBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HomeAndConstructionBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HomeGoodsStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HomeGoodsStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HomeGoodsStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HospitalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HospitalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HospitalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HostelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HostelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HostelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HotelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HotelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HotelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HotelRoomContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HotelRoomContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HotelRoomContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HouseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HouseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HouseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HousePainterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HousePainterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HousePainterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToDirectionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToDirectionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToDirectionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToSectionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToSectionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToSectionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToStepContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToStepContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToStepContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToSupplyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToSupplyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToSupplyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToTipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToTipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToTipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HowToToolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HowToToolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HowToToolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HyperTocContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HyperTocContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HyperTocContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\HyperTocEntryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'HyperTocEntryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\HyperTocEntryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IPTCDigitalSourceEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IPTCDigitalSourceEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IPTCDigitalSourceEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IceCreamShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IceCreamShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IceCreamShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IgnoreActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IgnoreActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IgnoreActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ImageGalleryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ImageGalleryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ImageGalleryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ImageObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ImageObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ImageObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ImageObjectSnapshotContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ImageObjectSnapshotContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ImageObjectSnapshotContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ImagingTestContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ImagingTestContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ImagingTestContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IndividualPhysicianContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IndividualPhysicianContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IndividualPhysicianContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IndividualProductContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IndividualProductContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IndividualProductContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InfectiousAgentClassContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InfectiousAgentClassContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InfectiousAgentClassContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InfectiousDiseaseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InfectiousDiseaseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InfectiousDiseaseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InformActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InformActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InformActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InsertActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InsertActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InsertActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InstallActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InstallActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InstallActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InsuranceAgencyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InsuranceAgencyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InsuranceAgencyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\IntangibleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'IntangibleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\IntangibleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InteractActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InteractActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InteractActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InteractionCounterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InteractionCounterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InteractionCounterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InternetCafeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InternetCafeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InternetCafeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InvestmentFundContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InvestmentFundContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InvestmentFundContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InvestmentOrDepositContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InvestmentOrDepositContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InviteActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InviteActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InviteActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\InvoiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'InvoiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\InvoiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ItemAvailabilityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ItemAvailabilityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ItemAvailabilityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ItemListContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ItemListContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ItemListContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ItemListOrderTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ItemListOrderTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ItemListOrderTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ItemPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ItemPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ItemPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\JewelryStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'JewelryStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\JewelryStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\JobPostingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'JobPostingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\JobPostingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\JoinActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'JoinActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\JoinActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\JointContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'JointContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\JointContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LakeBodyOfWaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LakeBodyOfWaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LakeBodyOfWaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LandformContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LandformContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LandformContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LandmarksOrHistoricalBuildingsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LandmarksOrHistoricalBuildingsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LandmarksOrHistoricalBuildingsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LanguageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LanguageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LanguageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LearningResourceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LearningResourceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LearningResourceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LeaveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LeaveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LeaveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegalForceStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegalForceStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegalForceStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegalServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegalServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegalServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegalValueLevelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegalValueLevelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegalValueLevelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegislationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegislationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegislationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegislationObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegislationObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegislationObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LegislativeBuildingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LegislativeBuildingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LegislativeBuildingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LendActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LendActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LendActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LibraryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LibraryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LibraryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LibrarySystemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LibrarySystemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LibrarySystemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LifestyleModificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LifestyleModificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LigamentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LigamentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LigamentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LikeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LikeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LikeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LinkRoleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LinkRoleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LinkRoleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LiquorStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LiquorStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LiquorStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ListItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ListItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ListItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ListenActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ListenActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ListenActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LiteraryEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LiteraryEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LiteraryEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LiveBlogPostingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LiveBlogPostingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LiveBlogPostingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LoanOrCreditContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoanOrCreditContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LoanOrCreditContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LocalBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LocalBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LocationFeatureSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LocationFeatureSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LocationFeatureSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LocksmithContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LocksmithContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LocksmithContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LodgingBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LodgingBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LodgingReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LodgingReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LodgingReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LoseActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LoseActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LoseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\LymphaticVesselContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'LymphaticVesselContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\LymphaticVesselContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ManuscriptContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ManuscriptContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ManuscriptContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MapCategoryTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MapCategoryTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MapCategoryTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MapContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MapContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MapContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MarryActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MarryActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MarryActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MassContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MassContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MassContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MathSolverContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MathSolverContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MathSolverContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MaximumDoseScheduleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MaximumDoseScheduleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MaximumDoseScheduleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MeasurementMethodEnumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MeasurementMethodEnumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MeasurementMethodEnumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MeasurementTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MeasurementTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MeasurementTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaGalleryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaGalleryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaGalleryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaManipulationRatingEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaManipulationRatingEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaManipulationRatingEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaReviewItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaReviewItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaReviewItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MediaSubscriptionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MediaSubscriptionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MediaSubscriptionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalAudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalAudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalAudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalAudienceTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalAudienceTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalAudienceTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalCauseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalCauseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalCauseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalClinicContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalClinicContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalClinicContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalCodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalCodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalCodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalConditionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalConditionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalConditionStageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalConditionStageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalConditionStageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalContraindicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalContraindicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalContraindicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalDeviceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalDeviceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalDeviceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalDevicePurposeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalDevicePurposeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalDevicePurposeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalEntityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalEntityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalEvidenceLevelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalEvidenceLevelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalEvidenceLevelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalGuidelineContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContraindicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalGuidelineContraindicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineContraindicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineRecommendationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalGuidelineRecommendationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalGuidelineRecommendationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalImagingTechniqueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalImagingTechniqueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalImagingTechniqueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalIndicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalIndicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalIntangibleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalIntangibleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalObservationalStudyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyDesignContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalObservationalStudyDesignContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalObservationalStudyDesignContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalProcedureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalProcedureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalProcedureTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalProcedureTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalProcedureTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalRiskCalculatorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalRiskCalculatorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalRiskCalculatorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalRiskEstimatorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalRiskEstimatorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalRiskEstimatorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalRiskFactorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalRiskFactorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalRiskFactorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalRiskScoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalRiskScoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalRiskScoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalScholarlyArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalScholarlyArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalScholarlyArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalSignContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalSignContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalSignContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalSignOrSymptomContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalSignOrSymptomContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalSpecialtyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalSpecialtyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalSpecialtyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalStudyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalStudyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalStudyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalStudyStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalStudyStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalStudyStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalSymptomContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalSymptomContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalSymptomContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalTestContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalTestContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalTestContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalTestPanelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalTestPanelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalTestPanelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalTherapyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalTherapyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalTrialContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalTrialContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalTrialContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalTrialDesignContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalTrialDesignContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalTrialDesignContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicalWebPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicalWebPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicalWebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MedicineSystemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MedicineSystemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MedicineSystemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MeetingRoomContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MeetingRoomContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MeetingRoomContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MemberProgramContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MemberProgramContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MemberProgramContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MemberProgramTierContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MemberProgramTierContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MemberProgramTierContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MensClothingStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MensClothingStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MensClothingStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MenuContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MenuContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MenuContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MenuItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MenuItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MenuItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MenuSectionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MenuSectionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MenuSectionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MerchantReturnEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MerchantReturnEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MerchantReturnEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MerchantReturnPolicyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicySeasonalOverrideContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MerchantReturnPolicySeasonalOverrideContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MerchantReturnPolicySeasonalOverrideContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MessageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MessageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MessageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MiddleSchoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MiddleSchoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MiddleSchoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MobileApplicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MobileApplicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MobileApplicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MobilePhoneStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MobilePhoneStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MobilePhoneStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MolecularEntityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MolecularEntityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MolecularEntityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MonetaryAmountContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MonetaryAmountContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MonetaryAmountContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MonetaryAmountDistributionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MonetaryAmountDistributionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MonetaryAmountDistributionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MonetaryGrantContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MonetaryGrantContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MonetaryGrantContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MoneyTransferContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MoneyTransferContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MoneyTransferContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MortgageLoanContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MortgageLoanContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MortgageLoanContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MosqueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MosqueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MosqueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MotelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MotelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MotelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MotorcycleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MotorcycleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MotorcycleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MotorcycleDealerContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MotorcycleDealerContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MotorcycleDealerContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MotorcycleRepairContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MotorcycleRepairContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MotorcycleRepairContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MotorizedBicycleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MotorizedBicycleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MotorizedBicycleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MountainContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MountainContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MountainContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MoveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MoveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MoveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovieClipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovieClipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovieClipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovieContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovieContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovieContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovieRentalStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovieRentalStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovieRentalStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovieSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovieSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovieSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovieTheaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovieTheaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovieTheaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MovingCompanyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MovingCompanyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MovingCompanyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MuscleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MuscleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MuscleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MuseumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MuseumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MuseumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicAlbumContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicAlbumContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicAlbumContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicAlbumProductionTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicAlbumProductionTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicAlbumProductionTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicAlbumReleaseTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicAlbumReleaseTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicAlbumReleaseTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicCompositionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicCompositionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicCompositionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicGroupContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicGroupContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicGroupContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicPlaylistContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicPlaylistContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicPlaylistContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicRecordingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicRecordingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicRecordingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicReleaseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicReleaseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicReleaseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicReleaseFormatTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicReleaseFormatTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicReleaseFormatTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicVenueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicVenueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicVenueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\MusicVideoObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'MusicVideoObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\MusicVideoObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NGOContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NGOContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NGOContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NLNonprofitTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NLNonprofitTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NLNonprofitTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NailSalonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NailSalonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NailSalonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NerveContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NerveContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NerveContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NewsMediaOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NewsMediaOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NewsMediaOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NewspaperContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NewspaperContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NewspaperContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NightClubContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NightClubContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NightClubContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NonprofitTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NonprofitTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NotaryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NotaryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NotaryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NoteDigitalDocumentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NoteDigitalDocumentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NoteDigitalDocumentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\NutritionInformationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'NutritionInformationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\NutritionInformationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ObservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ObservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ObservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OccupationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OccupationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OccupationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OccupationalExperienceRequirementsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OccupationalExperienceRequirementsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OccupationalExperienceRequirementsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OccupationalTherapyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OccupationalTherapyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OccupationalTherapyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OceanBodyOfWaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OceanBodyOfWaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OceanBodyOfWaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferCatalogContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferCatalogContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferCatalogContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferForLeaseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferForLeaseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferForLeaseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferForPurchaseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferForPurchaseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferForPurchaseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferItemConditionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferItemConditionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferItemConditionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfferShippingDetailsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfferShippingDetailsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfferShippingDetailsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OfficeEquipmentStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OfficeEquipmentStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OfficeEquipmentStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OnDemandEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OnDemandEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OnDemandEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OnlineBusinessContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OnlineBusinessContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OnlineBusinessContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OnlineStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OnlineStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OnlineStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OpeningHoursSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OpeningHoursSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OpeningHoursSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OpinionNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OpinionNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OpinionNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OpticianContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OpticianContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OpticianContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrderActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrderActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrderActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrderContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrderContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrderContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrderItemContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrderItemContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrderItemContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrderStatusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrderStatusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrderStatusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrganizationRoleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrganizationRoleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrganizationRoleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OrganizeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OrganizeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OutletStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OutletStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OutletStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\OwnershipInfoContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'OwnershipInfoContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\OwnershipInfoContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaintActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaintActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaintActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaintingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaintingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaintingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PalliativeProcedureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PalliativeProcedureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PalliativeProcedureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ParcelDeliveryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParcelDeliveryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ParcelDeliveryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ParentAudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParentAudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ParentAudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ParkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ParkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ParkingFacilityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ParkingFacilityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ParkingFacilityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PathologyTestContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PathologyTestContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PathologyTestContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PatientContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PatientContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PatientContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PawnShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PawnShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PawnShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PayActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PayActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PayActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentCardContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentCardContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentCardContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentChargeSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentChargeSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentChargeSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentMethodContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentMethodContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentMethodTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentMethodTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentMethodTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PaymentStatusTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PaymentStatusTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PaymentStatusTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PeopleAudienceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PeopleAudienceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PerformActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PerformActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PerformActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PerformanceRoleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PerformanceRoleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PerformanceRoleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PerformingArtsTheaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PerformingArtsTheaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PerformingArtsTheaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PerformingGroupContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PerformingGroupContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PeriodicalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PeriodicalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PeriodicalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PermitContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PermitContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PermitContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PersonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PersonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PersonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PetStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PetStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PetStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PharmacyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PharmacyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PharmacyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhotographActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhotographActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhotographActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhotographContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhotographContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhotographContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysicalActivityCategoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysicalActivityCategoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysicalActivityCategoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysicalActivityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysicalActivityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysicalActivityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysicalExamContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysicalExamContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysicalExamContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysicalTherapyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysicalTherapyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysicalTherapyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysicianContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysicianContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysicianContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PhysiciansOfficeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PhysiciansOfficeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PhysiciansOfficeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlaceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlaceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlaceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlaceOfWorshipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlaceOfWorshipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlanActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlanActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlanActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlayActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlayActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlayActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlayContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlayContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlayContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlayGameActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlayGameActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlayGameActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlaygroundContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlaygroundContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlaygroundContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PlumberContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PlumberContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PlumberContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PodcastEpisodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PodcastEpisodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PodcastEpisodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PodcastSeasonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PodcastSeasonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PodcastSeasonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PodcastSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PodcastSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PodcastSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PoliceStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PoliceStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PoliceStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PoliticalPartyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PoliticalPartyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PoliticalPartyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PondContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PondContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PondContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PostOfficeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PostOfficeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PostOfficeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PostalAddressContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PostalAddressContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PostalAddressContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PostalCodeRangeSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PostalCodeRangeSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PostalCodeRangeSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PosterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PosterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PosterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PreOrderActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PreOrderActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PreOrderActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PrependActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PrependActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PrependActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PreschoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PreschoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PreschoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PresentationDigitalDocumentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PresentationDigitalDocumentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PresentationDigitalDocumentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PreventionIndicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PreventionIndicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PreventionIndicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PriceComponentTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PriceComponentTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PriceComponentTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PriceSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PriceSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PriceTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PriceTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PriceTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductCollectionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductCollectionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductCollectionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductGroupContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductGroupContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductGroupContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductModelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductModelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductModelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductReturnEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductReturnEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductReturnEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProductReturnPolicyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProductReturnPolicyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProductReturnPolicyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProfessionalServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProfessionalServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProfessionalServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProfilePageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProfilePageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProfilePageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProgramMembershipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProgramMembershipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProgramMembershipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PronounceableTextContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PronounceableTextContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PronounceableTextContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PropertyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PropertyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PropertyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PropertyValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PropertyValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PropertyValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PropertyValueSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PropertyValueSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PropertyValueSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ProteinContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ProteinContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ProteinContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PsychologicalTreatmentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PsychologicalTreatmentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PsychologicalTreatmentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PublicSwimmingPoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PublicSwimmingPoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PublicSwimmingPoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PublicToiletContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PublicToiletContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PublicToiletContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PublicationEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PublicationEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PublicationEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PublicationIssueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PublicationIssueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PublicationIssueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\PublicationVolumeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'PublicationVolumeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\PublicationVolumeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QAPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QAPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QAPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QualitativeValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QualitativeValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuantitativeValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuantitativeValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuantitativeValueDistributionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuantitativeValueDistributionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuantitativeValueDistributionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuantityContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuantityContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuantityContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuestionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuestionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuestionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuizContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuizContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuizContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuotationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuotationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuotationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\QuoteActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'QuoteActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\QuoteActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RVParkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RVParkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RVParkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadiationTherapyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadiationTherapyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadiationTherapyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioBroadcastServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioBroadcastServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioBroadcastServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioClipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioClipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioClipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioEpisodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioEpisodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioEpisodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioSeasonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioSeasonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioSeasonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RadioStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RadioStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RadioStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RatingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RatingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RatingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReactActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReactActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReactActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReadActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReadActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReadActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RealEstateAgentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RealEstateAgentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RealEstateAgentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RealEstateListingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RealEstateListingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RealEstateListingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReceiveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReceiveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReceiveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RecipeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RecipeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RecipeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RecommendationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RecommendationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RecommendationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RecommendedDoseScheduleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RecommendedDoseScheduleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RecommendedDoseScheduleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RecyclingCenterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RecyclingCenterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RecyclingCenterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RefundTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RefundTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RefundTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RegisterActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RegisterActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RegisterActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RejectActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RejectActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RejectActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RentActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RentActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RentActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RentalCarReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RentalCarReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RentalCarReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RepaymentSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RepaymentSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RepaymentSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReplaceActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReplaceActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReplaceActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReplyActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReplyActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReplyActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReportContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReportContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReportContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReportageNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReportageNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReportageNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReportedDoseScheduleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReportedDoseScheduleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReportedDoseScheduleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResearchOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResearchOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResearchOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResearchProjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResearchProjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResearchProjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResearcherContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResearcherContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResearcherContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReservationPackageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReservationPackageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReservationPackageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReservationStatusTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReservationStatusTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReservationStatusTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReserveActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReserveActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReserveActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReservoirContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReservoirContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReservoirContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResidenceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResidenceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResidenceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResortContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResortContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResortContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RestaurantContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RestaurantContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RestaurantContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RestrictedDietContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RestrictedDietContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RestrictedDietContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ResumeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ResumeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ResumeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReturnActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReturnActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReturnActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReturnFeesEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReturnFeesEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReturnFeesEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReturnLabelSourceEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReturnLabelSourceEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReturnLabelSourceEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReturnMethodEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReturnMethodEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReturnMethodEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReviewActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReviewActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReviewActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ReviewNewsArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ReviewNewsArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ReviewNewsArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RiverBodyOfWaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RiverBodyOfWaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RiverBodyOfWaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RoleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RoleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RoleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RoofingContractorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RoofingContractorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RoofingContractorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RoomContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RoomContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RoomContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RsvpActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RsvpActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RsvpActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\RsvpResponseTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'RsvpResponseTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\RsvpResponseTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SaleEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SaleEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SaleEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SatiricalArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SatiricalArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SatiricalArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ScheduleActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ScheduleActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ScheduleActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ScheduleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ScheduleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ScheduleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ScholarlyArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ScholarlyArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ScholarlyArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SchoolContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SchoolContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SchoolContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SchoolDistrictContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SchoolDistrictContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SchoolDistrictContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ScreeningEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ScreeningEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ScreeningEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SculptureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SculptureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SculptureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SeaBodyOfWaterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SeaBodyOfWaterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SeaBodyOfWaterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SearchActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SearchActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SearchActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SearchRescueOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SearchRescueOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SearchRescueOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SearchResultsPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SearchResultsPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SearchResultsPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SeasonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SeasonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SeasonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SeatContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SeatContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SeatContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SeekToActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SeekToActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SeekToActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SelfStorageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SelfStorageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SelfStorageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SellActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SellActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SellActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SendActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SendActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SendActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ServiceChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServiceChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ServiceChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShareActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShareActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShareActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SheetMusicContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SheetMusicContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SheetMusicContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShippingDeliveryTimeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShippingDeliveryTimeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShippingDeliveryTimeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShippingRateSettingsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShippingRateSettingsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShippingRateSettingsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShoeStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShoeStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShoeStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShoppingCenterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShoppingCenterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShoppingCenterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ShortStoryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ShortStoryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ShortStoryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SingleFamilyResidenceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SingleFamilyResidenceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SingleFamilyResidenceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SiteNavigationElementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SiteNavigationElementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SiteNavigationElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SizeGroupEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SizeGroupEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SizeGroupEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SizeSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SizeSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SizeSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SizeSystemEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SizeSystemEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SizeSystemEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SkiResortContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SkiResortContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SkiResortContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SocialEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SocialEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SocialEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SocialMediaPostingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SocialMediaPostingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SoftwareApplicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SoftwareApplicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SoftwareSourceCodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SoftwareSourceCodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SoftwareSourceCodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SolveMathActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SolveMathActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SolveMathActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SomeProductsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SomeProductsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SomeProductsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SpeakableSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SpeakableSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SpeakableSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SpecialAnnouncementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SpecialAnnouncementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SpecialAnnouncementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SpecialtyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SpecialtyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SpecialtyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportingGoodsStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportingGoodsStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportingGoodsStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportsActivityLocationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportsActivityLocationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportsClubContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportsClubContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportsClubContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportsEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportsEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportsEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportsOrganizationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportsOrganizationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportsOrganizationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SportsTeamContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SportsTeamContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SportsTeamContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SpreadsheetDigitalDocumentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SpreadsheetDigitalDocumentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SpreadsheetDigitalDocumentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StadiumOrArenaContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StadiumOrArenaContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StadiumOrArenaContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StateContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StateContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StateContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StatementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StatementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StatementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StatisticalPopulationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StatisticalPopulationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StatisticalPopulationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StatisticalVariableContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StatisticalVariableContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StatisticalVariableContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StatusEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StatusEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SteeringPositionValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SteeringPositionValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SteeringPositionValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StructuredValueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StructuredValueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StructuredValueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\StupidTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'StupidTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\StupidTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SubscribeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SubscribeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SubscribeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SubstanceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SubstanceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SubstanceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SubwayStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SubwayStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SubwayStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SuiteContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SuiteContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SuiteContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SuperficialAnatomyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SuperficialAnatomyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SuperficialAnatomyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SurgicalProcedureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SurgicalProcedureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SurgicalProcedureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SuspendActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SuspendActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SuspendActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SyllabusContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SyllabusContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SyllabusContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\SynagogueContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'SynagogueContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\SynagogueContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TVClipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TVClipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TVClipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TVEpisodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TVEpisodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TVEpisodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TVSeasonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TVSeasonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TVSeasonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TVSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TVSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TVSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TableContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TableContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TableContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TakeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TakeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TakeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TattooParlorContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TattooParlorContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TattooParlorContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TaxiContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaxiContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TaxiContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TaxiReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaxiReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TaxiReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TaxiServiceContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaxiServiceContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TaxiServiceContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TaxiStandContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaxiStandContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TaxiStandContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TaxonContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TaxonContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TaxonContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TechArticleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TechArticleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TechArticleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TelevisionChannelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TelevisionChannelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TelevisionChannelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TelevisionStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TelevisionStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TelevisionStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TennisComplexContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TennisComplexContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TennisComplexContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TextDigitalDocumentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TextDigitalDocumentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TextDigitalDocumentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TextObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TextObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TextObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TheaterEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TheaterEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TheaterEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TheaterGroupContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TheaterGroupContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TheaterGroupContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TherapeuticProcedureContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TherapeuticProcedureContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ThesisContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ThesisContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ThesisContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ThingContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ThingContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ThingContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ThreeDimensionalModelContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ThreeDimensionalModelContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ThreeDimensionalModelContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TicketContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TicketContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TicketContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TieActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TieActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TieActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TierBenefitEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TierBenefitEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TierBenefitEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TipActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TipActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TipActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TireShopContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TireShopContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TireShopContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TouristAttractionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TouristAttractionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TouristAttractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TouristDestinationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TouristDestinationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TouristDestinationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TouristInformationCenterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TouristInformationCenterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TouristInformationCenterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TouristTripContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TouristTripContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TouristTripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ToyStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ToyStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ToyStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TrackActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TrackActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TrackActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TradeActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TradeActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TradeActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TrainReservationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TrainReservationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TrainReservationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TrainStationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TrainStationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TrainStationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TrainTripContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TrainTripContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TrainTripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TransferActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TransferActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TransferActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TravelActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TravelActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TravelActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TravelAgencyContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TravelAgencyContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TravelAgencyContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TreatmentIndicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TreatmentIndicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TreatmentIndicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TripContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TripContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TripContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\TypeAndQuantityNodeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'TypeAndQuantityNodeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\TypeAndQuantityNodeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UKNonprofitTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UKNonprofitTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UKNonprofitTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\USNonprofitTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'USNonprofitTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\USNonprofitTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UnRegisterActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UnRegisterActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UnRegisterActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UnitPriceSpecificationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UnitPriceSpecificationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UnitPriceSpecificationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UpdateActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UpdateActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UpdateActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UseActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UseActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UseActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserBlocksContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserBlocksContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserBlocksContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserCheckinsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserCheckinsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserCheckinsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserCommentsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserCommentsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserCommentsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserDownloadsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserDownloadsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserDownloadsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserInteractionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserInteractionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserInteractionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserLikesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserLikesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserLikesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserPageVisitsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserPageVisitsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserPageVisitsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserPlaysContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserPlaysContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserPlaysContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserPlusOnesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserPlusOnesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserPlusOnesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserReviewContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserReviewContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserReviewContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\UserTweetsContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'UserTweetsContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\UserTweetsContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VacationRentalContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VacationRentalContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VacationRentalContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VehicleContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VehicleContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VehicleContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VeinContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VeinContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VeinContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VesselContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VesselContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VesselContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VeterinaryCareContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VeterinaryCareContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VeterinaryCareContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoGalleryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoGalleryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoGalleryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoGameClipContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoGameClipContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoGameClipContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoGameContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoGameContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoGameContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoGameSeriesContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoGameSeriesContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoGameSeriesContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoObjectContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoObjectContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoObjectContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VideoObjectSnapshotContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VideoObjectSnapshotContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VideoObjectSnapshotContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ViewActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ViewActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ViewActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VirtualLocationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VirtualLocationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VirtualLocationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VisualArtsEventContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VisualArtsEventContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VisualArtsEventContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VisualArtworkContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VisualArtworkContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VisualArtworkContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VitalSignContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VitalSignContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VitalSignContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VolcanoContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VolcanoContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VolcanoContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\VoteActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'VoteActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\VoteActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WPAdBlockContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WPAdBlockContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WPAdBlockContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WPFooterContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WPFooterContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WPFooterContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WPHeaderContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WPHeaderContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WPHeaderContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WPSideBarContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WPSideBarContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WPSideBarContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WantActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WantActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WantActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WarrantyPromiseContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WarrantyPromiseContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WarrantyPromiseContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WarrantyScopeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WarrantyScopeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WarrantyScopeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WatchActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WatchActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WatchActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WaterfallContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WaterfallContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WaterfallContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WearActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WearActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WearActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WearableMeasurementTypeEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WearableMeasurementTypeEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WearableMeasurementTypeEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WearableSizeGroupEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WearableSizeGroupEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WearableSizeGroupEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WearableSizeSystemEnumerationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WearableSizeSystemEnumerationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WearableSizeSystemEnumerationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebAPIContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebAPIContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebAPIContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebApplicationContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebApplicationContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebApplicationContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebContentContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebContentContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebContentContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebPageContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebPageContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebPageContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebPageElementContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebPageElementContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebPageElementContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WebSiteContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WebSiteContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WebSiteContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WholesaleStoreContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WholesaleStoreContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WholesaleStoreContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WinActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WinActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WinActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WineryContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WineryContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WineryContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WorkBasedProgramContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WorkBasedProgramContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WorkBasedProgramContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WorkersUnionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WorkersUnionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WorkersUnionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\WriteActionContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'WriteActionContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\WriteActionContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\XPathTypeContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'XPathTypeContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\XPathTypeContract',
    ),
  ),
  'Spatie\\SchemaOrg\\Contracts\\ZooContract' => 
  array (
    'type' => 'interface',
    'interfacename' => 'ZooContract',
    'namespace' => 'Spatie\\SchemaOrg\\Contracts',
    'extends' => 
    array (
      0 => 'Castlegate\\SchemaMap\\Vendor\\Spatie\\SchemaOrg\\Contracts\\ZooContract',
    ),
  ),
);

        public function __construct()
        {
            $this->includeFilePath = __DIR__ . '/autoload_alias.php';
        }

        /**
         * @param string $class
         */
        public function autoload($class): void
        {
            if (!isset($this->autoloadAliases[$class])) {
                return;
            }
            switch ($this->autoloadAliases[$class]['type']) {
                case 'class':
                        $this->load(
                            $this->classTemplate(
                                $this->autoloadAliases[$class]
                            )
                        );
                    break;
                case 'interface':
                    $this->load(
                        $this->interfaceTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                case 'trait':
                    $this->load(
                        $this->traitTemplate(
                            $this->autoloadAliases[$class]
                        )
                    );
                    break;
                default:
                    // Never.
                    break;
            }
        }

        private function load(string $includeFile): void
        {
            file_put_contents($this->includeFilePath, $includeFile);
            include $this->includeFilePath;
            file_exists($this->includeFilePath) && unlink($this->includeFilePath);
        }

        /**
         * @param ClassAliasArray $class
         */
        private function classTemplate(array $class): string
        {
            $abstract = $class['isabstract'] ? 'abstract ' : '';
            $classname = $class['classname'];
            if (isset($class['namespace'])) {
                $namespace = "namespace {$class['namespace']};";
                $extends = '\\' . $class['extends'];
                $implements = empty($class['implements']) ? ''
                : ' implements \\' . implode(', \\', $class['implements']);
            } else {
                $namespace = '';
                $extends = $class['extends'];
                $implements = !empty($class['implements']) ? ''
                : ' implements ' . implode(', ', $class['implements']);
            }
            return <<<EOD
                <?php
                $namespace
                $abstract class $classname extends $extends $implements {}
                EOD;
        }

        /**
         * @param InterfaceAliasArray $interface
         */
        private function interfaceTemplate(array $interface): string
        {
            $interfacename = $interface['interfacename'];
            $namespace = isset($interface['namespace'])
            ? "namespace {$interface['namespace']};" : '';
            $extends = isset($interface['namespace'])
            ? '\\' . implode('\\ ,', $interface['extends'])
            : implode(', ', $interface['extends']);
            return <<<EOD
                <?php
                $namespace
                interface $interfacename extends $extends {}
                EOD;
        }

        /**
         * @param TraitAliasArray $trait
         */
        private function traitTemplate(array $trait): string
        {
            $traitname = $trait['traitname'];
            $namespace = isset($trait['namespace'])
            ? "namespace {$trait['namespace']};" : '';
            $uses = isset($trait['namespace'])
            ? '\\' . implode(';' . PHP_EOL . '    use \\', $trait['use'])
            : implode(';' . PHP_EOL . '    use ', $trait['use']);
            return <<<EOD
                <?php
                $namespace
                trait $traitname { 
                    use $uses; 
                }
                EOD;
        }
    }

    spl_autoload_register([ new AliasAutoloader(), 'autoload' ]);
}
