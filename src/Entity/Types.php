<?php

namespace App\Entity;

use App\Repository\TypesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypesRepository::class)
 */
class Types
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $Group_;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Comment;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Created;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Updated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroup(): ?int
    {
        return $this->Group_;
    }

    public function setGroup(?int $Group_): self
    {
        $this->Group_ = $Group_;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(?string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->Created;
    }

    public function setCreated(\DateTimeInterface $Created): self
    {
        $this->Created = $Created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->Updated;
    }

    public function setUpdated(\DateTimeInterface $Updated): self
    {
        $this->Updated = $Updated;

        return $this;
    }
}
