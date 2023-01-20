<?php

namespace App\Controller;

use App\Repository\WishRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/wish",name="wish_")
 */
class wishController extends AbstractController
{
    /**
     * @Route("",name="home")
     */
    public function home()
    {
        return $this->render('baseWish.html.twig');
    }

    /**
     * @Route("/all",name="all")
     */
    public function allWish(WishRepository $wishRepository) : Response
    {
        $wishs = $wishRepository->findAll();
        return $this->render('wish/listWish.html.twig',["wishs" => $wishs]);
    }

    /**
     * @Route("/details/{id}",name="details")
     */
    public function details(int $id,WishRepository $wishRepository) : Response
    {
        $wish = $wishRepository->find($id);
        return $this->render('wish/detailsWish.html.twig',[
            "wish" => $wish
        ]);
    }
}