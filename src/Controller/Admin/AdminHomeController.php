<?php

namespace App\Controller\Admin;

use phpDocumentor\Reflection\Types\This;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AdminHomeController  extends AbstractController

{
    #[Route('/Admin/home', name: 'admin_home')]
public function home():Response
 {

return $this->render("admin/home.html.twig");
 }
}