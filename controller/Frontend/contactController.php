<?php

namespace App\controller\Frontend;



class contactController extends Controller
{

    public function contact() 
    {
        return $this->view->render('contact', []);
    }

}