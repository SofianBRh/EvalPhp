<?php

namespace App\Controller;
use App\Model\CrudModel;

use App\Controller\AbstractController;

class CrudController extends AbstractController







{
    public function ccreate()
    {
        $AjoutModel = new CrudModel();

        $Ajouts = $AjoutModel->ccreate();
        // ma logique métier ici
        // exemple récupérer des données en BDD
        // traiter des formulaire
        // vérifier que l'utilisateur a les droits
        // etc...
        $this->render('Ajout.php', [
            'Ajouts' => $Ajouts,
        ]);
    }

}
