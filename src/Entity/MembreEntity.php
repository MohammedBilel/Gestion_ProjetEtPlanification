<?php

namespace App\Entity;

use App\Repository\MembreEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MembreEntityRepository::class)
 */
class MembreEntity
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
    private $nomMembre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomMembre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailMembre;

    /**
     * @ORM\ManyToOne(targetEntity=AdminEntity::class, inversedBy="membreAdmin")
     */
    private $adminEntity;

    /**
     * @ORM\OneToMany(targetEntity=MessagerieEntity::class, mappedBy="membreEntity")
     */
    private $messageMembre;

    /**
     * @ORM\OneToMany(targetEntity=TacheEntity::class, mappedBy="membreEntity")
     */
    private $tacheMembre;

    /**
     * @ORM\ManyToOne(targetEntity=ChefEntity::class, inversedBy="membreChef")
     */
    private $chefEntity;

    public function __construct()
    {
        $this->messageMembre = new ArrayCollection();
        $this->tacheMembre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMembre(): ?string
    {
        return $this->nomMembre;
    }

    public function setNomMembre(string $nomMembre): self
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    public function getPrenomMembre(): ?string
    {
        return $this->prenomMembre;
    }

    public function setPrenomMembre(string $prenomMembre): self
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }

    public function getEmailMembre(): ?string
    {
        return $this->emailMembre;
    }

    public function setEmailMembre(string $emailMembre): self
    {
        $this->emailMembre = $emailMembre;

        return $this;
    }

    public function getAdminEntity(): ?AdminEntity
    {
        return $this->adminEntity;
    }

    public function setAdminEntity(?AdminEntity $adminEntity): self
    {
        $this->adminEntity = $adminEntity;

        return $this;
    }

    /**
     * @return Collection|MessagerieEntity[]
     */
    public function getMessageMembre(): Collection
    {
        return $this->messageMembre;
    }

    public function addMessageMembre(MessagerieEntity $messageMembre): self
    {
        if (!$this->messageMembre->contains($messageMembre)) {
            $this->messageMembre[] = $messageMembre;
            $messageMembre->setMembreEntity($this);
        }

        return $this;
    }

    public function removeMessageMembre(MessagerieEntity $messageMembre): self
    {
        if ($this->messageMembre->removeElement($messageMembre)) {
            // set the owning side to null (unless already changed)
            if ($messageMembre->getMembreEntity() === $this) {
                $messageMembre->setMembreEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TacheEntity[]
     */
    public function getTacheMembre(): Collection
    {
        return $this->tacheMembre;
    }

    public function addTacheMembre(TacheEntity $tacheMembre): self
    {
        if (!$this->tacheMembre->contains($tacheMembre)) {
            $this->tacheMembre[] = $tacheMembre;
            $tacheMembre->setMembreEntity($this);
        }

        return $this;
    }

    public function removeTacheMembre(TacheEntity $tacheMembre): self
    {
        if ($this->tacheMembre->removeElement($tacheMembre)) {
            // set the owning side to null (unless already changed)
            if ($tacheMembre->getMembreEntity() === $this) {
                $tacheMembre->setMembreEntity(null);
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
