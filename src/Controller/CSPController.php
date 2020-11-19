<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CSPController extends AbstractController
{

    /**
     * @Route("/csp", name="csp")
     * @param Request $request
     * @return Response
     */
    public function csp(Request $request): Response
    {

        $policy = $request->query->get('policy');
        $payload = $request->query->get('payload');

        if ($policy && $payload) {

            $content = $this->renderView('csp.html.twig', [
                'policy' => $policy,
                'payload' => $payload
            ]);

            return new Response(
                $content,
                Response::HTTP_OK,
                [
                    'Content-Security-Policy' => $policy
                ]
            );
        }

        return $this->render('csp.html.twig', []);
    }

}