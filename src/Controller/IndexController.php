<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/{name}/{age}")
     */
    public function home($name, $age)
    {
        return $this->render('index.html.twig',[
            'name' => $name,
            'age' => $age
        ]);
    }
}
