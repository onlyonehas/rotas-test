<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RotasRepository")
 */
class Rotas
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
    private $shop_id;

    /**
     * @ORM\Column(type="date")
     */
    private $week_commence_date;

    /**
     * @ORM\Column(type="datetime")
     */
    private $timestamps;


    public function getId()
    {
        return $this->id;
    }

    public function getShopId(): ?int
    {
        return $this->shop_id;
    }

    public function setShopId(int $shop_id): self
    {
        $this->shop_id = $shop_id;

        return $this;
    }

    public function getWeekCommenceDate(): ?date
    {
        return $this->week_commence_date;
    }

    public function setWeekCommenceDate(date $week_commence_date): self
    {
        $this->week_commence_date = $week_commence_date;

        return $this;
    }

    public function getTimestamps(): ?\DateTimeInterface
    {
        return $this->timestamps;
    }

    public function setTimestamps(\DateTimeInterface $timestamps): self
    {
        $this->timestamps = $timestamps;

        return $this;
    }
}
