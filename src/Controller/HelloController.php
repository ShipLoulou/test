<?php

namespace App\Controller;

use App\Repository\HelloWordRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    protected $helloRepo;

    public function __construct(HelloWordRepository $helloRepo)
    {
        $this->helloRepo = $helloRepo;
    }
    #[Route('/', name: 'app_hello')]
    public function index(): Response
    {
        $word = $this->helloRepo->find(random_int(1, 3));

        return $this->render('hello/index.html.twig', [
            'word' => $word,
        ]);
    }
}
