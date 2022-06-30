<?php

namespace App\Controller;

use App\Entity\Course;
use App\Repository\CourseRepository;
use App\Repository\JoboffersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StronaglownaController extends AbstractController
{
    #[Route('/stronaglowna', name: 'app_stronaglowna')]
    public function index(CourseRepository $courserepository): Response
    {




        return $this->render('stronaglowna/index.html.twig', [
            'controller_name' => 'StronaglownaController',
            'course_db' => $courserepository->findAll(),
        ]);
    }
}

// 'controller_name' => 'StronaglownaController',
