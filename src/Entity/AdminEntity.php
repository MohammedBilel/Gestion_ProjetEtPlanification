<?php

namespace App\Entity;

use App\Repository\AdminEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminEntityRepository::class)
 */
class AdminEntity
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
    private $nomAdmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomAdmin;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailAdmin;

    /**
     * @ORM\OneToMany(targetEntity=MembreEntity::class, mappedBy="adminEntity")
     */
    private $membreAdmin;

    public function __construct()
    {
        $this->membreAdmin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAdmin(): ?string
    {
        return $this->nomAdmin;
    }

    public function setNomAdmin(string $nomAdmin): self
    {
        $this->nomAdmin = $nomAdmin;

        return $this;
    }

    public function getPrenomAdmin(): ?string
    {
        return $this->prenomAdmin;
    }

    public function setPrenomAdmin(string $prenomAdmin): self
    {
        $this->prenomAdmin = $prenomAdmin;

        return $this;
    }

    public function getEmailAdmin(): ?string
    {
        return $this->emailAdmin;
    }

    public function setEmailAdmin(string $emailAdmin): self
    {
        $this->emailAdmin = $emailAdmin;

        return $this;
    }

    /**
     * @return Collection|MembreEntity[]
     */
    public function getMembreAdmin(): Collection
    {
        return $this->membreAdmin;
    }

    public function addMembreAdmin(MembreEntity $membreAdmin): self
    {
        if (!$this->membreAdmin->contains($membreAdmin)) {
            $this->membreAdmin[] = $membreAdmin;
            $membreAdmin->setAdminEntity($this);
        }

        return $this;
    }

    public function removeMembreAdmin(MembreEntity $membreAdmin): self
    {
        if ($this->membreAdmin->removeElement($membreAdmin)) {
            // set the owning side to null (unless already changed)
            if ($membreAdmin->getAdminEntity() === $this) {
                $membreAdmin->setAdminEntity(null);
            }
        }

        return $this;
    }
}
