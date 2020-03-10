<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheVieRepository")
 */
class FicheVie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nateintervention;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $refdocument;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resultat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $visa;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Piece", mappedBy="fichedevie", cascade={"persist", "remove"})
     */
    private $piece;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getNateintervention(): ?string
    {
        return $this->nateintervention;
    }

    public function setNateintervention(string $nateintervention): self
    {
        $this->nateintervention = $nateintervention;

        return $this;
    }

    public function getRefdocument(): ?string
    {
        return $this->refdocument;
    }

    public function setRefdocument(string $refdocument): self
    {
        $this->refdocument = $refdocument;

        return $this;
    }

    public function getResultat(): ?string
    {
        return $this->resultat;
    }

    public function setResultat(string $resultat): self
    {
        $this->resultat = $resultat;

        return $this;
    }

    public function getVisa(): ?string
    {
        return $this->visa;
    }

    public function setVisa(string $visa): self
    {
        $this->visa = $visa;

        return $this;
    }

    public function getPiece(): ?Piece
    {
        return $this->piece;
    }

    public function setPiece(?Piece $piece): self
    {
        $this->piece = $piece;

        // set (or unset) the owning side of the relation if necessary
        $newFichedevie = null === $piece ? null : $this;
        if ($piece->getFichedevie() !== $newFichedevie) {
            $piece->setFichedevie($newFichedevie);
        }

        return $this;
    }
}
