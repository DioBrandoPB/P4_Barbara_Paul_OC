<?php

namespace App\controller\Frontend;




class accueilController extends Controller
{


    public function index()
    {
        $chapitres = $this->chapitreDAO->getLastArticles();
        return $this->view->render('accueil', [
            'chapitres' => $chapitres
        ]);
    }
}