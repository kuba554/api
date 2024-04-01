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
use App\Repository\CategoriesTreeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\Configuration\Migration\JsonFile;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesTreeRepository::class)]
#[ApiResource]
class CategoriesTree
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $tree_id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $children = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTreeId(): ?int
    {
        return $this->tree_id;
    }

    public function setTreeId(int $tree_id): static
    {
        $this->tree_id = $tree_id;

        return $this;
    }

    public function getChildren(): ?array
    {
        return $this->children;
    }

    public function setChildren(?array $children): static
    {
        $this->children = $children;

        return $this;
    }
}
