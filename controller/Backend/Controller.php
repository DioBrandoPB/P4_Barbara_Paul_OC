<?php

namespace App\controller\Backend;

use App\model\manager\ChapitreDAO;
use App\model\manager\CommentDAO;
use App\model\manager\Validation;

use App\model\manager\View;
use App\model\Request;


abstract class Controller
{
    protected $chapitreDAO;
    protected $commentDAO;
    protected $view;
    protected $validation;
    protected $get;
    protected $post;
    protected $session;


    public function __construct()
    {
        $this->chapitreDAO = new ChapitreDAO();
        $this->commentDAO = new CommentDAO();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}