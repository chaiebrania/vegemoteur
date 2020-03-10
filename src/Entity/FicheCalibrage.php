<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FicheCalibrageRepository")
 */
class FicheCalibrage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $calibragepar;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $conforme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ajusterconforme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ajusternonconforme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $freq;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remarque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m6;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m7;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m8;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m9;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $m10;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Piece", mappedBy="fichecalibrage", cascade={"persist", "remove"})
     */
    private $piece;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): self
    {
        $this->section = $section;

        return $this;
    }

    public function getCalibragepar(): ?string
    {
        return $this->calibragepar;
    }

    public function setCalibragepar(string $calibragepar): self
    {
        $this->calibragepar = $calibragepar;

        return $this;
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

    public function getConforme(): ?string
    {
        return $this->conforme;
    }

    public function setConforme(string $conforme): self
    {
        $this->conforme = $conforme;

        return $this;
    }

    public function getAjusterconforme(): ?string
    {
        return $this->ajusterconforme;
    }

    public function setAjusterconforme(string $ajusterconforme): self
    {
        $this->ajusterconforme = $ajusterconforme;

        return $this;
    }

    public function getAjusternonconforme(): ?string
    {
        return $this->ajusternonconforme;
    }

    public function setAjusternonconforme(string $ajusternonconforme): self
    {
        $this->ajusternonconforme = $ajusternonconforme;

        return $this;
    }

    public function getFreq(): ?string
    {
        return $this->freq;
    }

    public function setFreq(string $freq): self
    {
        $this->freq = $freq;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }

    public function getM1(): ?string
    {
        return $this->m1;
    }

    public function setM1(string $m1): self
    {
        $this->m1 = $m1;

        return $this;
    }

    public function getM2(): ?string
    {
        return $this->m2;
    }

    public function setM2(string $m2): self
    {
        $this->m2 = $m2;

        return $this;
    }

    public function getM3(): ?string
    {
        return $this->m3;
    }

    public function setM3(string $m3): self
    {
        $this->m3 = $m3;

        return $this;
    }

    public function getM4(): ?string
    {
        return $this->m4;
    }

    public function setM4(string $m4): self
    {
        $this->m4 = $m4;

        return $this;
    }

    public function getM5(): ?string
    {
        return $this->m5;
    }

    public function setM5(string $m5): self
    {
        $this->m5 = $m5;

        return $this;
    }

    public function getM6(): ?string
    {
        return $this->m6;
    }

    public function setM6(string $m6): self
    {
        $this->m6 = $m6;

        return $this;
    }

    public function getM7(): ?string
    {
        return $this->m7;
    }

    public function setM7(string $m7): self
    {
        $this->m7 = $m7;

        return $this;
    }

    public function getM8(): ?string
    {
        return $this->m8;
    }

    public function setM8(string $m8): self
    {
        $this->m8 = $m8;

        return $this;
    }

    public function getM9(): ?string
    {
        return $this->m9;
    }

    public function setM9(string $m9): self
    {
        $this->m9 = $m9;

        return $this;
    }

    public function getM10(): ?string
    {
        return $this->m10;
    }

    public function setM10(string $m10): self
    {
        $this->m10 = $m10;

        return $this;
    }

    public function getPiece(): ?Piece
    {
        return $this->piece;
    }

    public function setPiece(Piece $piece): self
    {
        $this->piece = $piece;

        // set the owning side of the relation if necessary
        if ($piece->getFichecalibrage() !== $this) {
            $piece->setFichecalibrage($this);
        }

        return $this;
    }
}
