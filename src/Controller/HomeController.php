<?php

namespace App\Controller;

use App\Model\HomeModel;
use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        $homeModel = new HomeModel();

        $homes = $homeModel->findAll();
        
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('home.php', [
            'homes' => $homes
        ]);
    }

}