<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** Tipo de procedimento do SEI. */
#[ORM\Entity]
#[ApiResource]
class SeiTipoProcedimento
{
    #[ORM\Id, ORM\Column, ORM\GeneratedValue]
    private ?int $id = null;

    /** ID do tipo de procedimento no SEI. */
    #[ORM\Column(type: 'integer')]
    private ?int $idTipoProcedimento = null;

    /** Nome do tipo de procedimento. */
    #[ORM\Column]
    private ?string $nome = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getIdTipoProcedimento(): ?int
    {
        return $this->idTipoProcedimento;
    }

    public function setIdTipoProcedimento(?int $idTipoProcedimento): void
    {
        $this->idTipoProcedimento = $idTipoProcedimento;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(?string $nome): void
    {
        $this->nome = $nome;
    }
}
