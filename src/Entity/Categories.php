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
use App\Repository\CategoriesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
#[ApiResource]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $category_id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $root = null;

    #[ORM\Column(nullable: true)]
    private ?int $order_sort = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $translations = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    public function setCategoryId(int $category_id): static
    {
        $this->category_id = $category_id;

        return $this;
    }

    public function getRoot(): ?bool
    {
        return $this->root;
    }

    public function setRoot(bool $root): static
    {
        $this->root = $root;

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
