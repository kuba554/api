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
use App\Repository\ProductImagesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductImagesRepository::class)]
#[ApiResource]
class ProductImages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $gfx_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $product_id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $main = null;

    #[ORM\Column(nullable: true)]
    private ?int $order_sord = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $unic_name = null;

    #[ORM\Column(nullable: true)]
    private ?bool $hidden = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $extension = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGfxId(): ?int
    {
        return $this->gfx_id;
    }

    public function setGfxId(int $gfx_id): static
    {
        $this->gfx_id = $gfx_id;

        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(?int $product_id): static
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function isMain(): ?bool
    {
        return $this->main;
    }

    public function setMain(?bool $main): static
    {
        $this->main = $main;

        return $this;
    }

    public function getOrderSord(): ?int
    {
        return $this->order_sord;
    }

    public function setOrderSord(?int $order_sord): static
    {
        $this->order_sord = $order_sord;

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

    public function getUnicName(): ?string
    {
        return $this->unic_name;
    }

    public function setUnicName(?string $unic_name): static
    {
        $this->unic_name = $unic_name;

        return $this;
    }

    public function isHidden(): ?bool
    {
        return $this->hidden;
    }

    public function setHidden(?bool $hidden): static
    {
        $this->hidden = $hidden;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): static
    {
        $this->extension = $extension;

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
