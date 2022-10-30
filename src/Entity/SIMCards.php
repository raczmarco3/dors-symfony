<?php

namespace App\Entity;

use App\Repository\SIMCardsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SIMCardsRepository::class)
 */
class SIMCards
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $PhoneID;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Slot;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $MobileNumber;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $IMSI;

    /**
     * @ORM\Column(type="date")
     */
    private $Expiration;

    /**
     * @ORM\Column(type="date")
     */
    private $MobilnetExpiration;

    /**
     * @ORM\Column(type="integer")
     */
    private $MobilnetDataLimit;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $MobilnetIP;

    /**
     * @ORM\Column(type="integer")
     */
    private $CarrierID;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Package;

    /**
     * @ORM\Column(type="integer")
     */
    private $TypeID;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Activated;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Comment;

    /**
     * @ORM\Column(type="integer")
     */
    private $Creator;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Created;

    /**
     * @ORM\Column(type="integer")
     */
    private $Updater;

    /**
     * @ORM\Column(type="datetime")
     */
    private $Updated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoneID(): ?int
    {
        return $this->PhoneID;
    }

    public function setPhoneID(int $PhoneID): self
    {
        $this->PhoneID = $PhoneID;

        return $this;
    }

    public function getSlot(): ?int
    {
        return $this->Slot;
    }

    public function setSlot(int $Slot): self
    {
        $this->Slot = $Slot;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->MobileNumber;
    }

    public function setMobileNumber(string $MobileNumber): self
    {
        $this->MobileNumber = $MobileNumber;

        return $this;
    }

    public function getIMSI(): ?string
    {
        return $this->IMSI;
    }

    public function setIMSI(string $IMSI): self
    {
        $this->IMSI = $IMSI;

        return $this;
    }

    public function getExpiration(): ?\DateTimeInterface
    {
        return $this->Expiration;
    }

    public function setExpiration(\DateTimeInterface $Expiration): self
    {
        $this->Expiration = $Expiration;

        return $this;
    }

    public function getMobilnetExpiration(): ?\DateTimeInterface
    {
        return $this->MobilnetExpiration;
    }

    public function setMobilnetExpiration(\DateTimeInterface $MobilnetExpiration): self
    {
        $this->MobilnetExpiration = $MobilnetExpiration;

        return $this;
    }

    public function getMobilnetDataLimit(): ?int
    {
        return $this->MobilnetDataLimit;
    }

    public function setMobilnetDataLimit(int $MobilnetDataLimit): self
    {
        $this->MobilnetDataLimit = $MobilnetDataLimit;

        return $this;
    }

    public function getMobilnetIP(): ?string
    {
        return $this->MobilnetIP;
    }

    public function setMobilnetIP(string $MobilnetIP): self
    {
        $this->MobilnetIP = $MobilnetIP;

        return $this;
    }

    public function getCarrierID(): ?int
    {
        return $this->CarrierID;
    }

    public function setCarrierID(int $CarrierID): self
    {
        $this->CarrierID = $CarrierID;

        return $this;
    }

    public function getPackage(): ?string
    {
        return $this->Package;
    }

    public function setPackage(string $Package): self
    {
        $this->Package = $Package;

        return $this;
    }

    public function getTypeID(): ?int
    {
        return $this->TypeID;
    }

    public function setTypeID(int $TypeID): self
    {
        $this->TypeID = $TypeID;

        return $this;
    }

    public function getActivated(): ?int
    {
        return $this->Activated;
    }

    public function setActivated(int $Activated): self
    {
        $this->Activated = $Activated;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->Comment;
    }

    public function setComment(string $Comment): self
    {
        $this->Comment = $Comment;

        return $this;
    }

    public function getCreator(): ?int
    {
        return $this->Creator;
    }

    public function setCreator(int $Creator): self
    {
        $this->Creator = $Creator;

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

    public function getUpdater(): ?int
    {
        return $this->Updater;
    }

    public function setUpdater(int $Updater): self
    {
        $this->Updater = $Updater;

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
