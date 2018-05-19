<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario03
 * Date: 12/05/2018
 * Time: 15:07
 */

namespace AppBundle\Controller;

use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OportunidadeController extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction(Request $request){

        $SerializerService = $this->get('infra.serializer.service');

        try {
            $oportunidade = $SerializerService->converter($request->getContent(),Oportunidade::class);
              dump($oportunidade); die;
        }catch(\Exception $exception){
            dump($exception->getMessage());die;
        }

    }
}