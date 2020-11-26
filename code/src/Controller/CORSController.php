<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CORSController extends AbstractController
{

    /**
     * @Route("/cors", name="cors")
     * @return Response
     */
    public function cors(): Response
    {
        return $this->render('cors.html.twig', []);
    }

    /**
     * @Route("/cors/resource", name="cors_resource", methods={"GET", "POST", "OPTIONS"})
     * @param Request $request
     * @return Response
     */
    public function corsResource(Request $request): Response
    {
        return new Response(
            $request->getContent(),
            Response::HTTP_OK,
            [
                'Access-Control-Allow-Methods' => $request->get('methods'),
                'Access-Control-Allow-Headers' => $request->get('headers'),
                'Access-Control-Allow-Origin' => $request->get('origin')
            ]
        );
    }


}