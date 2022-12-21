<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=membre::class, inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_membre;

    /**
     * @ORM\ManyToOne(targetEntity=enseignant::class, inversedBy="cours")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_enseignant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMembre(): ?membre
    {
        return $this->id_membre;
    }

    public function setIdMembre(?membre $id_membre): self
    {
        $this->id_membre = $id_membre;

        return $this;
    }

    public function getIdEnseignant(): ?enseignant
    {
        return $this->id_enseignant;
    }

    public function setIdEnseignant(?enseignant $id_enseignant): self
    {
        $this->id_enseignant = $id_enseignant;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
