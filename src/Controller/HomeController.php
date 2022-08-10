<?php

namespace App\Controller;

use App\Model\HomeModel;
use App\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function index()
    {
        if(isset($_GET['search']))  {
                $search = $_GET['search'];}else{$search=NULL;
                }
        $homeModel = new HomeModel();

      
        
       

      
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
