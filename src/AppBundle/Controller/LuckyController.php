<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}")
     */

    public function numberAction($count)
    {
        // ...
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

        return new Response(
            '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
        );
        // $numbersList = implode(', ', $numbers);

        // $html = $this->container->get('templating')->render(
        //     'lucky/number.html.twig',
        //     array('luckyNumberList' => $numbersList)
        // );

        // return new Response($html);
        return $this->render(
        'lucky/number.html.twig',
        array('luckyNumberList' => $numbersList)
    );
        
    }
        
}