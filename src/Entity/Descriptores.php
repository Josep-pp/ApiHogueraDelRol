<?php

namespace App\Entity;

use App\Repository\DescriptoresRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DescriptoresRepository::class)
 */
class Descriptores
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptor1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descriptor2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptor1(): ?string
    {
        return $this->descriptor1;
    }

    public function setDescriptor1(string $descriptor1): self
    {
        $this->descriptor1 = $descriptor1;

        return $this;
    }

    public function getDescriptor2(): ?string
    {
        return $this->descriptor2;
    }

    public function setDescriptor2(string $descriptor2): self
    {
        $this->descriptor2 = $descriptor2;

        return $this;
    }
}
