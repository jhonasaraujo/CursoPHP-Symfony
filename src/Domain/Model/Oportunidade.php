<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario03
 * Date: 12/05/2018
 * Time: 14:48
 */

namespace Domain\Model;



class Oportunidade
{
    /**
     * @var int
     */
    private $idOportunidade;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var \DateTime
     */
    private $periodoInicial;

    /**
     * @var \DateTime
     */
    private $periodoFinal;

    /**
     * Oportunidade constructor.
     * @param string $descricao
     * @param \DateTime $periodoInicial
     * @param \DateTime $periodoFinal
     */
    public function __construct(
        string $descricao,
        \DateTime $periodoInicial,
        \DateTime $periodoFinal)
    {
        $this->descricao = $descricao;
        $this->periodoInicial = $periodoInicial;
        $this->periodoFinal = $periodoFinal;
    }

    /**
     * @return String
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoInicial()
    {
        return $this->periodoInicial;
    }

    /**
     * @return \DateTime
     */
    public function getPeriodoFinal()
    {
        return $this->periodoFinal;
    }
}