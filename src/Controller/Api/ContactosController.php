<?php

namespace App\Controller\Api;
use App\Entity\Contactos;
use App\Form\ContactosType;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use App\Repository\ContactosRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Rest\Route(path="/contactos")
 */
class ContactosController extends AbstractFOSRestController
{

    private $rep;

    public function __construct(ContactosRepository  $rep){ //Importar el Repositorio
        $this->rep = $rep;
    }

    /**
     * @Rest\Post (path="/")
     * @Rest\View (serializerGroups={"post_contacto"}, serializerEnableMaxDepthChecks= true)//
     */

    public function createContacto(Request $request){ 

        $contacto = new Contactos();

        $form = $this->createForm(ContactosType::class, $contacto);

        $form->handleRequest($request);

        if(!$form->isSubmitted() || !$form->isValid() ){
            //return $form;
            return new JsonResponse ('Bad data', 400);
        }


        $this->rep->add($contacto, true);
        return $contacto;

    }

}