<?php

namespace Domain\Model;


class Inscricao
{
    /**
     * @var int
     */
    private $idInscricao;

    /**
     * @var candidato
     */
    private $candidato;

    /**
     * @var oportunidade
     */
    private $oportunidade;

    /**
     * @var string
     */
    private $codigoConfirmacao;

    /**
     * @var boolean
     */
    private $ativa;
}