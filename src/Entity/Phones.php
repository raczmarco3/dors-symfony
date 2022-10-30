<?php

namespace App\Entity;

use App\Repository\PhonesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhonesRepository::class)
 */
class Phones
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $FirID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirID(): ?string
    {
        return $this->FirID;
    }

    public function setFirID(string $FirID): self
    {
        $this->FirID = $FirID;

        return $this;
    }
}
