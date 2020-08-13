<?php

namespace App\controller\Backend;

use App\controller\Frontend\Controller;
use App\model\manager\ChapitreDAO;
use App\model\manager\View;

class adminController extends Controller
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function admin() 
    {
        return $this->view->render('admin', []);
    }
    public function comments()
    {
        $comments = $this->commentDAO->getComments();
        return $this->view->render('admin', [
            'comments' => $comments
        ]);
    }
}