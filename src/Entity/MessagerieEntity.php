<?php

namespace App\Entity;

use App\Repository\MessagerieEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessagerieEntityRepository::class)
 */
class MessagerieEntity
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
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity=MembreEntity::class, inversedBy="messageMembre")
     */
    private $membreEntity;

    /**
     * @ORM\ManyToOne(targetEntity=ChefEntity::class, inversedBy="messageChef")
     */
    private $chefEntity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getMembreEntity(): ?MembreEntity
    {
        return $this->membreEntity;
    }

    public function setMembreEntity(?MembreEntity $membreEntity): self
    {
        $this->membreEntity = $membreEntity;

        return $this;
    }

    public function getChefEntity(): ?ChefEntity
    {
        return $this->chefEntity;
    }

    public function setChefEntity(?ChefEntity $chefEntity): self
    {
        $this->chefEntity = $chefEntity;

        return $this;
    }
}
