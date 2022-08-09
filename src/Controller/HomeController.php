<?php

namespace App\Controller;

use App\Model\HomeModel;
use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
                $search = $_GET['search'];
        $homeModel = new HomeModel();

      
        
        if (isset($_POST["formsearch"]))  {
            $searchcontent = $_POST["search-content"];
        
            $searchs = $postModel->search($searchcontent);
        }

        $search = $_GET['search'];

        $homes = $homeModel->findAll($search);
        
        $this->render('home.php', [
            'homes' => $homes,
            'search' => $search
        ]);
    }
    public function searchh(){
        if (isset($_POST["formsearch"]))  {
            $searchcontent = $_POST["search-content"];
        
            $searchs = $homes->search($searchcontent);
        }
        $this->render('home.php', [
            'searchs' => $searchs,
            'searchcontent' => $searchcontent
        ] 
        );
    }

}
