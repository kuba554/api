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
use App\Repository\UnitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UnitsRepository::class)]
#[ApiResource]
class Units
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $unit_id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $floating_point = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnitId(): ?int
    {
        return $this->unit_id;
    }

    public function setUnitId(int $unit_id): static
    {
        $this->unit_id = $unit_id;

        return $this;
    }

    public function getFloatingPoint(): ?bool
    {
        return $this->floating_point;
    }

    public function setFloatingPoint(?bool $floating_point): static
    {
        $this->floating_point = $floating_point;

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
