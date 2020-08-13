<?php

namespace App\controller\Frontend;

use App\model\Parameter;

class chapitreController extends Controller
{

    public function chapitres()
    {
        $chapitres = $this->chapitreDAO->getArticles();
        return $this->view->render('chapitres', [
            'chapitres' => $chapitres
        ]);
    }




    public function chapitre($chapitreId)
    {
        $chapitre = $this->chapitreDAO->getArticle($chapitreId);
        $comments = $this->commentDAO->getCommentsFromArticle($chapitreId);
        return $this->view->render('chapitre', [
            'chapitre' => $chapitre,
            'comments' => $comments
        ]);
    }
    public function addComment(Parameter $post, $chapitreId)
    {
        if($post->get('submit')) {
            $this->commentDAO->addComment($post, $chapitreId);

            header('Location: index.php?route=chapitre&chapitreId='.$chapitreId);
        }
    }
    
}