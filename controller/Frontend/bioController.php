<?php

namespace App\controller\Frontend;



class bioController extends Controller
{


    public function biographie() 
    {
        return $this->view->render('biographie', []);
    }


}