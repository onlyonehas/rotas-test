<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShiftsRepository")
 */
class Shifts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $rota_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $staff_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start_time;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_time;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timestamp;

    public function getId()
    {
        return $this->id;
    }

    public function getRotaId(): ?int
    {
        return $this->rota_id;
    }

    public function setRotaId(int $rota_id): self
    {
        $this->rota_id = $rota_id;

        return $this;
    }

    public function getStaffId(): ?int
    {
        return $this->staff_id;
    }

    public function setStaffId(int $staff_id): self
    {
        $this->staff_id = $staff_id;

        return $this;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(\DateTimeInterface $start_time): self
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(\DateTimeInterface $end_time): self
    {
        $this->end_time = $end_time;

        return $this;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(\DateTimeInterface $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }
}
