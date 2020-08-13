<?php

namespace App\controller\Frontend;



class livresController extends Controller
{


    public function livres() 
    {
        return $this->view->render('livres', []);
    }


}