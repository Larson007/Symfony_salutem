<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OpeningHourRepository")
 */
class OpeningHour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dayname;

    /**
     * @ORM\Column(type="smallint")
     */
    private $daynumber;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $opening_time;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $closing_time;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayname(): ?string
    {
        return $this->dayname;
    }

    public function setDayname(string $dayname): self
    {
        $this->dayname = $dayname;

        return $this;
    }

    public function getDaynumber(): ?int
    {
        return $this->daynumber;
    }

    public function setDaynumber(int $daynumber): self
    {
        $this->daynumber = $daynumber;

        return $this;
    }

    public function getOpeningTime(): ?\DateTimeInterface
    {
        return $this->opening_time;
    }

    public function setOpeningTime(?\DateTimeInterface $opening_time): self
    {
        $this->opening_time = $opening_time;

        return $this;
    }

    public function getClosingTime(): ?\DateTimeInterface
    {
        return $this->closing_time;
    }

    public function setClosingTime(?\DateTimeInterface $closing_time): self
    {
        $this->closing_time = $closing_time;

        return $this;
    }
}
