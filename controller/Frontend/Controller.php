<?php

namespace App\controller\Frontend;

use App\model\manager\ChapitreDAO;
use App\model\manager\CommentDAO;
use App\model\manager\UserDAO;
use App\model\Validation;
use App\model\Session;
use App\model\manager\View;
use App\model\Request;


abstract class Controller
{
    protected $chapitreDAO;
    protected $commentDAO;
    protected $userDAO;
    protected $view;
    protected $validation;
    protected $get;
    protected $post;
    protected $session;


    public function __construct()
    {
        $this->chapitreDAO = new ChapitreDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }

}