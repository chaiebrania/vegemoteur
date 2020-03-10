<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PieceRepository")
 */
class Piece
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
    private $code;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $designation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lecture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preci;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nserie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $section;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postetravaile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $frequencecalibrage;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FicheVie", inversedBy="piece", cascade={"persist", "remove"})
     */
    private $fichedevie;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FicheCalibrage", inversedBy="piece", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $fichecalibrage;

 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getLecture(): ?string
    {
        return $this->lecture;
    }

    public function setLecture(string $lecture): self
    {
        $this->lecture = $lecture;

        return $this;
    }

    public function getPreci(): ?string
    {
        return $this->preci;
    }

    public function setPreci(string $preci): self
    {
        $this->preci = $preci;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNserie(): ?string
    {
        return $this->Nserie;
    }

    public function setNserie(string $Nserie): self
    {
        $this->Nserie = $Nserie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
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

    public function getPostetravaile(): ?string
    {
        return $this->postetravaile;
    }

    public function setPostetravaile(string $postetravaile): self
    {
        $this->postetravaile = $postetravaile;

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

    public function getFrequencecalibrage(): ?int
    {
        return $this->frequencecalibrage;
    }

    public function setFrequencecalibrage(int $frequencecalibrage): self
    {
        $this->frequencecalibrage = $frequencecalibrage;

        return $this;
    }

    public function getFichedevie(): ?FicheVie
    {
        return $this->fichedevie;
    }

    public function setFichedevie(?FicheVie $fichedevie): self
    {
        $this->fichedevie = $fichedevie;

        return $this;
    }

    public function getFichecalibrage(): ?FicheCalibrage
    {
        return $this->fichecalibrage;
    }

    public function setFichecalibrage(FicheCalibrage $fichecalibrage): self
    {
        $this->fichecalibrage = $fichecalibrage;

        return $this;
    }

  
}
