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
use App\Repository\ProducersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProducersRepository::class)]
#[ApiResource]
class Producers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $producer_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $web = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gfx = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isdefault = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $translations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducerId(): ?int
    {
        return $this->producer_id;
    }

    public function setProducerId(int $producer_id): static
    {
        $this->producer_id = $producer_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getWeb(): ?string
    {
        return $this->web;
    }

    public function setWeb(?string $web): static
    {
        $this->web = $web;

        return $this;
    }

    public function getGfx(): ?string
    {
        return $this->gfx;
    }

    public function setGfx(?string $gfx): static
    {
        $this->gfx = $gfx;

        return $this;
    }

    public function isIsdefault(): ?bool
    {
        return $this->isdefault;
    }

    public function setIsdefault(?bool $isdefault): static
    {
        $this->isdefault = $isdefault;

        return $this;
    }

    public function getTranslations(): ?string
    {
        return $this->translations;
    }

    public function setTranslations(?string $translations): static
    {
        $this->translations = $translations;

        return $this;
    }
}
