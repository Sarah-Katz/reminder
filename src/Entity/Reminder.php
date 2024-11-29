<?php

namespace App\Entity;

use App\Repository\ReminderRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReminderRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Reminder
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $title = null;

    #[ORM\Column]
    private ?bool $isDone = false;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetimeCreate;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetimeExpire = null;

    #[ORM\ManyToOne(inversedBy: 'reminders')]
    private ?Category $category = null;

    
    #[ORM\PrePersist]
    /**
     * Sets the creation date and time of the reminder to the current date and time.
     *
     * This method is automatically called before persisting a new Reminder entity.
     * It initializes the createdAt property with the current date and time.
     *
     * @return void
     */
    public function setCreatedAtValue(): void
    {
        $this->datetimeCreate = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function isDone(): ?bool
    {
        return $this->isDone;
    }

    public function setDone(bool $isDone): static
    {
        $this->isDone = $isDone;

        return $this;
    }

    public function getDatetimeCreate(): ?\DateTimeInterface
    {
        return $this->datetimeCreate;
    }

    public function setDatetimeCreate(\DateTimeInterface $datetimeCreate): static
    {
        $this->datetimeCreate = $datetimeCreate;

        return $this;
    }

    public function getDatetimeExpire(): ?\DateTimeInterface
    {
        return $this->datetimeExpire;
    }

    public function setDatetimeExpire(\DateTimeInterface $datetimeExpire): static
    {
        $this->datetimeExpire = $datetimeExpire;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
