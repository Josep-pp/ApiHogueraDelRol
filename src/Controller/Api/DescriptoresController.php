<?php

namespace App\Controller\Api;
use App\Repository\DescriptoresRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Rest\Route(path="/descriptores")
 */
class DescriptoresController extends AbstractFOSRestController
{
    private $rep;

    public function __construct(DescriptoresRepository  $rep){ //Importar el Repositorio
        $this->rep = $rep;
    }

    /**
     * @Rest\Get (path="/")
     * @Rest\View (serializerGroups={"get_descriptores"}, serializerEnableMaxDepthChecks = true)
     */

    public function  getAllDescriptores(){
        $descriptores = $this->rep->findAll();

        return ['Descriptores' => $descriptores];

    }

 
}