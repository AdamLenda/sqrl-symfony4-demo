<?php

namespace App\Entity\DefaultDb;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package App\Entity\DefaultDb
 * @ORM\Entity
 * @ORM\Table(name="Users")
 */
class User
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer", nullable=false)
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;

  /** @ORM\Column(type="string", nullable=false) */
  private $userName;

  /** @ORM\Column(type="binary", length=1028, nullable=true) */
  private $encryptedPassword;

  public function getId()
  {
    return $this->id;
  }

  public function getUserName()
  {
    return $this->userName;
  }
}