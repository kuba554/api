<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DeliveriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DeliveriesRepository::class)]
#[ApiResource]
class Deliveries
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $delivery_id = null;

    #[ORM\Column(nullable: true)]
    private ?float $hours = null;

    #[ORM\Column(nullable: true)]
    private ?float $days = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeliveryId(): ?int
    {
        return $this->delivery_id;
    }

    public function setDeliveryId(?int $delivery_id): static
    {
        $this->delivery_id = $delivery_id;

        return $this;
    }

    public function getHours(): ?float
    {
        return $this->hours;
    }

    public function setHours(?float $hours): static
    {
        $this->hours = $hours;

        return $this;
    }

    public function getDays(): ?float
    {
        return $this->days;
    }

    public function setDays(?float $days): static
    {
        $this->days = $days;

        return $this;
    }

    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    public function setTranslations(?array $translations): static
    {
        $this->translations = $translations;

        return $this;
    }
}
