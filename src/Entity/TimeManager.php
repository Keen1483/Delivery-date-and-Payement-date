<?php

namespace App\Entity;

use App\Repository\TimeManagerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TimeManagerRepository::class)
 */
class TimeManager
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deliveryAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $paymentAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeliveryAt(): ?\DateTimeInterface
    {
        return $this->deliveryAt;
    }

    public function setDeliveryAt(\DateTimeInterface $deliveryAt): self
    {
        $this->deliveryAt = $deliveryAt;

        return $this;
    }

    public function getPaymentAt(): ?\DateTimeInterface
    {
        return $this->paymentAt;
    }

    public function setPaymentAt(\DateTimeInterface $paymentAt): self
    {
        $this->paymentAt = $paymentAt;

        return $this;
    }
}
