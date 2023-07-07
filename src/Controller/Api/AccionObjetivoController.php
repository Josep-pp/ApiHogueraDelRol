<?php

namespace App\Controller\Api;

use App\Repository\AccionObjetivoRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Rest\Route(path="/accionesobjetivos")
 */
class AccionObjetivoController extends AbstractFOSRestController
{
    private $rep;

    public function __construct(AccionObjetivoRepository  $rep){ //Importar el Repositorio
        $this->rep = $rep;
    }
    /**
     * @Rest\Get (path="/")
     * @Rest\View (serializerGroups={"get_acciones_objetivos"}, serializerEnableMaxDepthChecks = true)
     */

    public function  getAllAccionObjetivo(){
        $accionObjetivo = $this->rep->findAll();

        return ['AccionesObjetivos' => $accionObjetivo];

    }


}