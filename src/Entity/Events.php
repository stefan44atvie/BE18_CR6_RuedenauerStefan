<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $event_name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $event_datetime = null;

    #[ORM\Column(length: 255)]
    private ?string $event_description = null;

    #[ORM\Column(length: 255)]
    private ?string $event_image = null;

    #[ORM\Column]
    private ?int $event_capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $event_email = null;

    #[ORM\Column(length: 255)]
    private ?string $event_phone = null;

    #[ORM\Column(length: 255)]
    private ?string $event_address = null;

    #[ORM\Column(length: 255)]
    private ?string $event_url = null;

    #[ORM\Column(length: 255)]
    private ?string $event_type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventName(): ?string
    {
        return $this->event_name;
    }

    public function setEventName(string $event_name): self
    {
        $this->event_name = $event_name;

        return $this;
    }

    public function getEventDatetime(): ?\DateTimeInterface
    {
        return $this->event_datetime;
    }

    public function setEventDatetime(\DateTimeInterface $event_datetime): self
    {
        $this->event_datetime = $event_datetime;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->event_description;
    }

    public function setEventDescription(string $event_description): self
    {
        $this->event_description = $event_description;

        return $this;
    }

    public function getEventImage(): ?string
    {
        return $this->event_image;
    }

    public function setEventImage(string $event_image): self
    {
        $this->event_image = $event_image;

        return $this;
    }

    public function getEventCapacity(): ?int
    {
        return $this->event_capacity;
    }

    public function setEventCapacity(int $event_capacity): self
    {
        $this->event_capacity = $event_capacity;

        return $this;
    }

    public function getEventEmail(): ?string
    {
        return $this->event_email;
    }

    public function setEventEmail(string $event_email): self
    {
        $this->event_email = $event_email;

        return $this;
    }

    public function getEventPhone(): ?string
    {
        return $this->event_phone;
    }

    public function setEventPhone(string $event_phone): self
    {
        $this->event_phone = $event_phone;

        return $this;
    }

    public function getEventAddress(): ?string
    {
        return $this->event_address;
    }

    public function setEventAddress(string $event_address): self
    {
        $this->event_address = $event_address;

        return $this;
    }

    public function getEventUrl(): ?string
    {
        return $this->event_url;
    }

    public function setEventUrl(string $event_url): self
    {
        $this->event_url = $event_url;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->event_type;
    }

    public function setEventType(string $event_type): self
    {
        $this->event_type = $event_type;

        return $this;
    }
}
