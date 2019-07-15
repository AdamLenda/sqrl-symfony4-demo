<?php

namespace App\Doctrine;

use Doctrine\ORM\Mapping\NamingStrategy;

class CamelCaseNamingStrategy implements NamingStrategy
{
  public function propertyToColumnName($propertyName, $className = null)
  {
    return $propertyName;
  }

  public function joinColumnName($propertyName, $className = null)
  {
    return ucwords($propertyName) . ucwords($this->referenceColumnName());
  }

  public function referenceColumnName()
  {
    return 'id';
  }

  public function joinTableName($sourceEntity, $targetEntity, $propertyName = null)
  {
    return ucwords($this->classToTableName($sourceEntity)) . ucwords($this->classToTableName($targetEntity));
  }

  public function classToTableName($className)
  {
    return ucwords(substr($className, strrpos($className, '\\') + 1));
  }

  public function joinKeyColumnName($entityName, $referencedColumnName = null)
  {
    return ucwords($this->classToTableName($entityName)) . ($referencedColumnName ?: ucwords($this->referenceColumnName()));
  }

  function embeddedFieldToColumnName($propertyName, $embeddedColumnName, $className = null, $embeddedClassName = null)
  {
    return ucwords($propertyName) . '_' . ucwords($embeddedColumnName);
  }
}