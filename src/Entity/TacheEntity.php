<?php

namespace App\Entity;

use App\Repository\TacheEntityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TacheEntityRepository::class)
 */
class TacheEntity
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
    private $nomTache;

    /**
     * @ORM\Column(type="date")
     */
    private $dureeEstimee;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $dateFin;

    /**
     * @ORM\Column(type="object")
     */
    private $precedente;

    /**
     * @ORM\Column(type="object")
     */
    private $suivante;

    /**
     * @ORM\ManyToOne(targetEntity=MembreEntity::class, inversedBy="tacheMembre")
     */
    private $membreEntity;

    /**
     * @ORM\ManyToOne(targetEntity=ProjetEntity::class, inversedBy="tacheProjet")
     */
    private $projetEntity;

    /**
     * @ORM\ManyToOne(targetEntity=ChefEntity::class, inversedBy="tacheChef")
     */
    private $chefEntity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTache(): ?string
    {
        return $this->nomTache;
    }

    public function setNomTache(string $nomTache): self
    {
        $this->nomTache = $nomTache;

        return $this;
    }

    public function getDureeEstimee(): ?\DateTimeInterface
    {
        return $this->dureeEstimee;
    }

    public function setDureeEstimee(\DateTimeInterface $dureeEstimee): self
    {
        $this->dureeEstimee = $dureeEstimee;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getPrecedente()
    {
        return $this->precedente;
    }

    public function setPrecedente($precedente): self
    {
        $this->precedente = $precedente;

        return $this;
    }

    public function getSuivante()
    {
        return $this->suivante;
    }

    public function setSuivante($suivante): self
    {
        $this->suivante = $suivante;

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

    public function getProjetEntity(): ?ProjetEntity
    {
        return $this->projetEntity;
    }

    public function setProjetEntity(?ProjetEntity $projetEntity): self
    {
        $this->projetEntity = $projetEntity;

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
