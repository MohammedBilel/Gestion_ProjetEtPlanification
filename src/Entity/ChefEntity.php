<?php

namespace App\Entity;

use App\Repository\ChefEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChefEntityRepository::class)
 */
class ChefEntity
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
    private $nomChef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomChef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailChef;

    /**
     * @ORM\OneToMany(targetEntity=MembreEntity::class, mappedBy="chefEntity")
     */
    private $membreChef;

    /**
     * @ORM\OneToMany(targetEntity=ProjetEntity::class, mappedBy="chefEntity")
     */
    private $projetChef;

    /**
     * @ORM\OneToMany(targetEntity=MessagerieEntity::class, mappedBy="chefEntity")
     */
    private $messageChef;

    /**
     * @ORM\OneToMany(targetEntity=TacheEntity::class, mappedBy="chefEntity")
     */
    private $tacheChef;

    public function __construct()
    {
        $this->membreChef = new ArrayCollection();
        $this->projetChef = new ArrayCollection();
        $this->messageChef = new ArrayCollection();
        $this->tacheChef = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomChef(): ?string
    {
        return $this->nomChef;
    }

    public function setNomChef(string $nomChef): self
    {
        $this->nomChef = $nomChef;

        return $this;
    }

    public function getPrenomChef(): ?string
    {
        return $this->prenomChef;
    }

    public function setPrenomChef(string $prenomChef): self
    {
        $this->prenomChef = $prenomChef;

        return $this;
    }

    public function getEmailChef(): ?string
    {
        return $this->emailChef;
    }

    public function setEmailChef(string $emailChef): self
    {
        $this->emailChef = $emailChef;

        return $this;
    }

    /**
     * @return Collection|MembreEntity[]
     */
    public function getMembreChef(): Collection
    {
        return $this->membreChef;
    }

    public function addMembreChef(MembreEntity $membreChef): self
    {
        if (!$this->membreChef->contains($membreChef)) {
            $this->membreChef[] = $membreChef;
            $membreChef->setChefEntity($this);
        }

        return $this;
    }

    public function removeMembreChef(MembreEntity $membreChef): self
    {
        if ($this->membreChef->removeElement($membreChef)) {
            // set the owning side to null (unless already changed)
            if ($membreChef->getChefEntity() === $this) {
                $membreChef->setChefEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|ProjetEntity[]
     */
    public function getProjetChef(): Collection
    {
        return $this->projetChef;
    }

    public function addProjetChef(ProjetEntity $projetChef): self
    {
        if (!$this->projetChef->contains($projetChef)) {
            $this->projetChef[] = $projetChef;
            $projetChef->setChefEntity($this);
        }

        return $this;
    }

    public function removeProjetChef(ProjetEntity $projetChef): self
    {
        if ($this->projetChef->removeElement($projetChef)) {
            // set the owning side to null (unless already changed)
            if ($projetChef->getChefEntity() === $this) {
                $projetChef->setChefEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|MessagerieEntity[]
     */
    public function getMessageChef(): Collection
    {
        return $this->messageChef;
    }

    public function addMessageChef(MessagerieEntity $messageChef): self
    {
        if (!$this->messageChef->contains($messageChef)) {
            $this->messageChef[] = $messageChef;
            $messageChef->setChefEntity($this);
        }

        return $this;
    }

    public function removeMessageChef(MessagerieEntity $messageChef): self
    {
        if ($this->messageChef->removeElement($messageChef)) {
            // set the owning side to null (unless already changed)
            if ($messageChef->getChefEntity() === $this) {
                $messageChef->setChefEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TacheEntity[]
     */
    public function getTacheChef(): Collection
    {
        return $this->tacheChef;
    }

    public function addTacheChef(TacheEntity $tacheChef): self
    {
        if (!$this->tacheChef->contains($tacheChef)) {
            $this->tacheChef[] = $tacheChef;
            $tacheChef->setChefEntity($this);
        }

        return $this;
    }

    public function removeTacheChef(TacheEntity $tacheChef): self
    {
        if ($this->tacheChef->removeElement($tacheChef)) {
            // set the owning side to null (unless already changed)
            if ($tacheChef->getChefEntity() === $this) {
                $tacheChef->setChefEntity(null);
            }
        }

        return $this;
    }
}
