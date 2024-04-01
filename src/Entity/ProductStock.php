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
use App\Repository\ProductStockRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductStockRepository::class)]
#[ApiResource]
class ProductStock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $stock_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $product_id = null;

    #[ORM\Column(nullable: true)]
    private ?float $price = null;

    #[ORM\Column(nullable: true)]
    private ?bool $extended = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $price_type = null;

    #[ORM\Column(nullable: true)]
    private ?bool $active = null;

    #[ORM\Column(nullable: true)]
    private ?bool $default_stock = null;

    #[ORM\Column(nullable: true)]
    private ?float $stock = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $warehouses = null;

    #[ORM\Column(nullable: true)]
    private ?float $warn_level = null;

    #[ORM\Column(nullable: true)]
    private ?float $sold = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ean = null;

    #[ORM\Column(nullable: true)]
    private ?float $weight = null;

    #[ORM\Column(nullable: true)]
    private ?int $weight_type = null;

    #[ORM\Column(nullable: true)]
    private ?int $availiability_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $delivery_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $gfx_id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $options = null;

    #[ORM\Column(nullable: true)]
    private ?float $package = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_wholesale = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_special = null;

    #[ORM\Column(nullable: true)]
    private ?int $price_type_wholesale = null;

    #[ORM\Column(nullable: true)]
    private ?int $price_type_special = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_buying = null;

    #[ORM\Column(nullable: true)]
    private ?int $calculation_unit_id = null;

    #[ORM\Column(nullable: true)]
    private ?float $calculation_unit_ratio = null;

    #[ORM\Column(nullable: true)]
    private ?float $historical_lowest_price = null;

    #[ORM\Column(nullable: true)]
    private ?float $wholesale_historical_lowest_price = null;

    #[ORM\Column(nullable: true)]
    private ?float $special_historical_lowest_price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStockId(): ?int
    {
        return $this->stock_id;
    }

    public function setStockId(int $stock_id): static
    {
        $this->stock_id = $stock_id;

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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getExtended(): ?bool
    {
        return $this->extended;
    }

    public function setExtended(?bool $extended): static
    {
        $this->extended = $extended;

        return $this;
    }

    public function getPriceType(): ?string
    {
        return $this->price_type;
    }

    public function setPriceType(?string $price_type): static
    {
        $this->price_type = $price_type;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): static
    {
        $this->active = $active;

        return $this;
    }

    public function isDefaultStock(): ?bool
    {
        return $this->default_stock;
    }

    public function setDefaultStock(?bool $default_stock): static
    {
        $this->default_stock = $default_stock;

        return $this;
    }

    public function getStock(): ?float
    {
        return $this->stock;
    }

    public function setStock(?float $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getWarehouses(): ?array
    {
        return $this->warehouses;
    }

    public function setWarehouses(?array $warehouses): static
    {
        $this->warehouses = $warehouses;

        return $this;
    }

    public function getWarnLevel(): ?float
    {
        return $this->warn_level;
    }

    public function setWarnLevel(?float $warn_level): static
    {
        $this->warn_level = $warn_level;

        return $this;
    }

    public function getSold(): ?float
    {
        return $this->sold;
    }

    public function setSold(?float $sold): static
    {
        $this->sold = $sold;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): static
    {
        $this->ean = $ean;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightType(): ?int
    {
        return $this->weight_type;
    }

    public function setWeightType(?int $weight_type): static
    {
        $this->weight_type = $weight_type;

        return $this;
    }

    public function getAvailiabilityId(): ?int
    {
        return $this->availiability_id;
    }

    public function setAvailiabilityId(?int $availiability_id): static
    {
        $this->availiability_id = $availiability_id;

        return $this;
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

    public function getGfxId(): ?int
    {
        return $this->gfx_id;
    }

    public function setGfxId(?int $gfx_id): static
    {
        $this->gfx_id = $gfx_id;

        return $this;
    }

    public function getOptions(): ?array
    {
        return $this->options;
    }

    public function setOptions(?array $options): static
    {
        $this->options = $options;

        return $this;
    }

    public function getPackage(): ?float
    {
        return $this->package;
    }

    public function setPackage(?float $package): static
    {
        $this->package = $package;

        return $this;
    }

    public function getPriceWholesale(): ?float
    {
        return $this->price_wholesale;
    }

    public function setPriceWholesale(float $price_wholesale): static
    {
        $this->price_wholesale = $price_wholesale;

        return $this;
    }

    public function getPriceSpecial(): ?float
    {
        return $this->price_special;
    }

    public function setPriceSpecial(?float $price_special): static
    {
        $this->price_special = $price_special;

        return $this;
    }

    public function getPriceTypeWholesale(): ?int
    {
        return $this->price_type_wholesale;
    }

    public function setPriceTypeWholesale(?int $price_type_wholesale): static
    {
        $this->price_type_wholesale = $price_type_wholesale;

        return $this;
    }

    public function getPriceTypeSpecial(): ?int
    {
        return $this->price_type_special;
    }

    public function setPriceTypeSpecial(?int $price_type_special): static
    {
        $this->price_type_special = $price_type_special;

        return $this;
    }

    public function getPriceBuying(): ?float
    {
        return $this->price_buying;
    }

    public function setPriceBuying(?float $price_buying): static
    {
        $this->price_buying = $price_buying;

        return $this;
    }

    public function getCalculationUnitId(): ?int
    {
        return $this->calculation_unit_id;
    }

    public function setCalculationUnitId(?int $calculation_unit_id): static
    {
        $this->calculation_unit_id = $calculation_unit_id;

        return $this;
    }

    public function getCalculationUnitRatio(): ?float
    {
        return $this->calculation_unit_ratio;
    }

    public function setCalculationUnitRatio(?float $calculation_unit_ratio): static
    {
        $this->calculation_unit_ratio = $calculation_unit_ratio;

        return $this;
    }

    public function getHistoricalLowestPrice(): ?float
    {
        return $this->historical_lowest_price;
    }

    public function setHistoricalLowestPrice(?float $historical_lowest_price): static
    {
        $this->historical_lowest_price = $historical_lowest_price;

        return $this;
    }

    public function getWholesaleHistoricalLowestPrice(): ?float
    {
        return $this->wholesale_historical_lowest_price;
    }

    public function setWholesaleHistoricalLowestPrice(?float $wholesale_historical_lowest_price): static
    {
        $this->wholesale_historical_lowest_price = $wholesale_historical_lowest_price;

        return $this;
    }

    public function getSpecialHistoricalLowestPrice(): ?float
    {
        return $this->special_historical_lowest_price;
    }

    public function setSpecialHistoricalLowestPrice(?float $special_historical_lowest_price): static
    {
        $this->special_historical_lowest_price = $special_historical_lowest_price;

        return $this;
    }
}
