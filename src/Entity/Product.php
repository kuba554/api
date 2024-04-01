<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ApiResource]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $product_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SKU = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_edit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $EAN = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $variants = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $attributes = null;

    #[ORM\Column(nullable: true)]
    private ?int $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $producer_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $group_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $unit_id = null;

    #[ORM\Column(nullable: true)]
    private ?int $gfx_id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $options = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $stock = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $main_image = null;

    #[ORM\Column(nullable: true)]
    private ?bool $stock_active = null;

    #[ORM\Column(nullable: true)]
    private ?float $stock_weight = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_wholesale = null;

    #[ORM\Column(nullable: true)]
    private ?float $price_suggested = null;

    #[ORM\Column(nullable: true)]
    private ?int $tax_id = null;

    #[ORM\Column(nullable: true)]
    private ?float $stock_stock = null;

    #[ORM\ManyToOne(targetEntity:Taxes::class, inversedBy: 'product')]
    private ?Taxes $taxes = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translations = null;

    #[ORM\Column(nullable: true)]
    private ?int $category_id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $Categories = null;

    #[ORM\Column(nullable: true)]
    private ?int $page = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $extension = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $delivery_time = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductId(): ?int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): static
    {
        $this->product_id = $product_id;

        return $this;
    }

    public function getSKU(): ?string
    {
        return $this->SKU;
    }

    public function setSKU(?string $SKU): static
    {
        $this->SKU = $SKU;

        return $this;
    }

    public function getDateEdit(): ?\DateTimeInterface
    {
        return $this->date_edit;
    }

    public function setDateEdit(?\DateTimeInterface $date_edit): static
    {
        $this->date_edit = $date_edit;

        return $this;
    }

    public function getEAN(): ?string
    {
        return $this->EAN;
    }

    public function setEAN(?string $EAN): static
    {
        $this->EAN = $EAN;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getVariants(): ?string
    {
        return $this->variants;
    }

    public function setVariants(?string $variants): static
    {
        $this->variants = $variants;

        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    public function setAttributes(?string $attributes): static
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProducerId(): ?int
    {
        return $this->producer_id;
    }

    public function setProducerId(?int $producer_id): static
    {
        $this->producer_id = $producer_id;

        return $this;
    }

    public function getGroupId(): ?int
    {
        return $this->group_id;
    }

    public function setGroupId(?int $group_id): static
    {
        $this->group_id = $group_id;

        return $this;
    }

    public function getUnitId(): ?int
    {
        return $this->unit_id;
    }

    public function setUnitId(?int $unit_id): static
    {
        $this->unit_id = $unit_id;

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

    public function getStock(): ?array
    {
        return $this->stock;
    }

    public function setStock(?array $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getMainImage(): ?array
    {
        return $this->main_image;
    }

    public function setMainImage(?array $main_image): static
    {
        $this->main_image = $main_image;

        return $this;
    }

    public function isStockActive(): ?bool
    {
        return $this->stock_active;
    }

    public function setStockActive(?bool $stock_active): static
    {
        $this->stock_active = $stock_active;

        return $this;
    }

    public function getStockWeight(): ?float
    {
        return $this->stock_weight;
    }

    public function setStockWeight(float $stock_weight): static
    {
        $this->stock_weight = $stock_weight;

        return $this;
    }

    public function getPriceWholesale(): ?float
    {
        return $this->price_wholesale;
    }

    public function setPriceWholesale(?float $price_wholesale): static
    {
        $this->price_wholesale = $price_wholesale;

        return $this;
    }

    public function getPriceSuggested(): ?float
    {
        return $this->price_suggested;
    }

    public function setPriceSuggested(?float $price_suggested): static
    {
        $this->price_suggested = $price_suggested;

        return $this;
    }

    public function getTaxId(): ?int
    {
        return $this->tax_id;
    }

    public function setTaxId(?int $tax_id): static
    {
        $this->tax_id = $tax_id;

        return $this;
    }

    public function getStockStock(): ?float
    {
        return $this->stock_stock;
    }

    public function setStockStock(?float $stock_stock): static
    {
        $this->stock_stock = $stock_stock;

        return $this;
    }

    public function getTaxes(): ?Taxes
    {
        return $this->taxes;
    }

    public function setTaxes(?Taxes $taxes): static
    {
        $this->taxes = $taxes;

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

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(?int $category_id): static
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getCategories(): ?array
    {
        return $this->Categories;
    }

    public function setCategories(?array $Categories): static
    {
        $this->Categories = $Categories;

        return $this;
    }

    public function getPage(): ?int
    {
        return $this->page;
    }

    public function setPage(?int $page): static
    {
        $this->page = $page;

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

    public function getDeliveryTime(): ?string
    {
        return $this->delivery_time;
    }

    public function setDeliveryTime(?string $delivery_time): static
    {
        $this->delivery_time = $delivery_time;

        return $this;
    }
}
