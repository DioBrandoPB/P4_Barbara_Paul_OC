<?php

namespace App\controller\Frontend;

use App\model\Parameter;



class commentController extends Controller
{

    public function signalCommentaire($commentId)
    {
        $this->commentDAO->signalCommentaire($commentId);
        header('Location: ../../index.php');
    }
    public function deleteComment($commentId)
    {
        $this->commentDAO->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
        header('Location: index.php');
    }
}