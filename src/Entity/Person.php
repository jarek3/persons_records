<?php

namespace App\Entity;

use App\Repository\PersonRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reprezentuje záznamy databázové tabulky osob.
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 * @UniqueEntity("id")
 * @package App\Entity
 */

class Person
{
    /**
     * @var int Unikátní ID osoby.
     * @ORM\Id()
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string Text (jméno osoby).
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Vyplňte prosím jméno")
     */
    private $name;

    /**
     * @var string Text (jméno osoby).
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="vyplňte prosím příjmení")
     */
    private $surname;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    public $phone_number;
    /**

     * @var string|null
     */
    private $url;

    /**
     * Getter pro ID osoby.
     * @return int ID osoby
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Setter pro URL adresu osoby.
     * @param string|null $url URL adresa osoby
     * @return Person sebe
     */
    public function setUrl(int $id = null): self
    {
        $this->url = $id;
        return $this;
    }
   /**
    * Getter pro jméno osoby.
    * @return null|string jméno osoby
    */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Setter pro jméno osoby.
     * @param string $name
     * @return Person
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Getter pro příjmení osoby.
     * @return null|string příjmení osoby
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Setter pro příjmení osoby.
     * @param string|null $surname příjmení osoby
     * @return Person
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Getter pro telefonní číslo osoby.
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    /**
     * Setter pro telefonní číslo osoby.
     * @param string $phone_number telefonní číslo osoby
     * @return Person
     */
    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }
}
