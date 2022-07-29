<?php

namespace App\Controller;

use App\Model\DetailModel;
use App\Controller\AbstractController;

class DetailController extends AbstractController
{
    public function index()
    {
        $DetailModel = new DetailModel();

        $details = $DetailModel->findById($_GET['id']);
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('Detail.php', [
            'details' => $details
        ]);
    }

}