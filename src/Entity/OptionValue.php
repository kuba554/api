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
use App\Repository\OptionValueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionValueRepository::class)]
#[ApiResource]
class OptionValue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $ovalue_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $option_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $order_sort = null;

    #[ORM\Column(nullable: true)]
    private ?int $change_price_type = null;

    #[ORM\Column(nullable: true)]
    private ?float $change_price_value = null;

    #[ORM\Column(nullable: true)]
    private ?int $procent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $color = null;

    #[ORM\Column(nullable: true)]
    private ?int $total_products = null;

    #[ORM\Column(nullable: true)]
    private ?int $total_stock = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOvalueId(): ?int
    {
        return $this->ovalue_id;
    }

    public function setOvalueId(?int $ovalue_id): static
    {
        $this->ovalue_id = $ovalue_id;

        return $this;
    }

    public function getOptionId(): ?int
    {
        return $this->option_id;
    }

    public function setOptionId(?int $option_id): static
    {
        $this->option_id = $option_id;

        return $this;
    }

    public function getOrderSort(): ?int
    {
        return $this->order_sort;
    }

    public function setOrderSort(?int $order_sort): static
    {
        $this->order_sort = $order_sort;

        return $this;
    }

    public function getChangePriceType(): ?int
    {
        return $this->change_price_type;
    }

    public function setChangePriceType(?int $change_price_type): static
    {
        $this->change_price_type = $change_price_type;

        return $this;
    }

    public function getChangePriceValue(): ?float
    {
        return $this->change_price_value;
    }

    public function setChangePriceValue(?float $change_price_value): static
    {
        $this->change_price_value = $change_price_value;

        return $this;
    }

    public function getProcent(): ?int
    {
        return $this->procent;
    }

    public function setProcent(?int $procent): static
    {
        $this->procent = $procent;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getTotalProducts(): ?int
    {
        return $this->total_products;
    }

    public function setTotalProducts(?int $total_products): static
    {
        $this->total_products = $total_products;

        return $this;
    }

    public function getTotalStock(): ?int
    {
        return $this->total_stock;
    }

    public function setTotalStock(?int $total_stock): static
    {
        $this->total_stock = $total_stock;

        return $this;
    }

    public function getTranslation(): ?array
    {
        return $this->translation;
    }

    public function setTranslation(?array $translation): static
    {
        $this->translation = $translation;

        return $this;
    }
}
