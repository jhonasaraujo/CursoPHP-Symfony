<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario03
 * Date: 19/05/2018
 * Time: 14:08
 */

namespace Domain\Service;


use Domain\Model\Oportunidade;

interface OportunidadeServiceInterface
{
    /**
     * @param Oportunidade $oportunidade
     * @return void
     */

    public function salvar(Oportunidade $oportunidade);
}