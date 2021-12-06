<?php

namespace App\Entity;

use App\Repository\ProjetEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetEntityRepository::class)
 */
class ProjetEntity
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
    private $intitule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=ProjetEntity::class, inversedBy="projetAdmin")
     */
    private $projetEntity;

    /**
     * @ORM\OneToMany(targetEntity=ProjetEntity::class, mappedBy="projetEntity")
     */
    private $projetAdmin;

    /**
     * @ORM\OneToMany(targetEntity=TacheEntity::class, mappedBy="projetEntity")
     */
    private $tacheProjet;

    /**
     * @ORM\ManyToOne(targetEntity=ChefEntity::class, inversedBy="projetChef")
     */
    private $chefEntity;

    public function __construct()
    {
        $this->projetAdmin = new ArrayCollection();
        $this->tacheProjet = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getProjetEntity(): ?self
    {
        return $this->projetEntity;
    }

    public function setProjetEntity(?self $projetEntity): self
    {
        $this->projetEntity = $projetEntity;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getProjetAdmin(): Collection
    {
        return $this->projetAdmin;
    }

    public function addProjetAdmin(self $projetAdmin): self
    {
        if (!$this->projetAdmin->contains($projetAdmin)) {
            $this->projetAdmin[] = $projetAdmin;
            $projetAdmin->setProjetEntity($this);
        }

        return $this;
    }

    public function removeProjetAdmin(self $projetAdmin): self
    {
        if ($this->projetAdmin->removeElement($projetAdmin)) {
            // set the owning side to null (unless already changed)
            if ($projetAdmin->getProjetEntity() === $this) {
                $projetAdmin->setProjetEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TacheEntity[]
     */
    public function getTacheProjet(): Collection
    {
        return $this->tacheProjet;
    }

    public function addTacheProjet(TacheEntity $tacheProjet): self
    {
        if (!$this->tacheProjet->contains($tacheProjet)) {
            $this->tacheProjet[] = $tacheProjet;
            $tacheProjet->setProjetEntity($this);
        }

        return $this;
    }

    public function removeTacheProjet(TacheEntity $tacheProjet): self
    {
        if ($this->tacheProjet->removeElement($tacheProjet)) {
            // set the owning side to null (unless already changed)
            if ($tacheProjet->getProjetEntity() === $this) {
                $tacheProjet->setProjetEntity(null);
            }
        }

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
