<?php

namespace App\model\manager;

use App\model\Backend\Comment;

use App\model\Parameter;
class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id']);
        $comment->setPseudo($row['pseudo']);
        $comment->setContent($row['content']);
        $comment->setCreatedAt($row['createdAt']);
        $comment->signalementFait($row['signalé']);
        return $comment;
    }

    public function getCommentsFromArticle($chapitreId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt, signalé FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$chapitreId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
    public function getComments()
    {
        $sql = 'SELECT * FROM comment ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $comments = [];
        foreach ($result as $row){
            $commentsId = $row['id'];
            $comments[$commentsId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }

    public function signalCommentaire($commentId)
    {
        $sql = 'UPDATE comment SET signalé = ? WHERE id = ?';
        $this->createQuery($sql, [1, $commentId]);
    }
    public function addComment(Parameter $post, $chapitreId)
    {
        $sql = 'INSERT INTO comment (pseudo, content, createdAt, article_id) VALUES (?, ?, NOW(), ?)';
        $this->createQuery($sql, [$post->get('pseudo'), $post->get('content'), $chapitreId]);
    }
    public function deleteComment($commentId)
    {
        $sql = 'DELETE FROM comment WHERE id = ?';
        $this->createQuery($sql, [$commentId]);
    }
    public function getFlagComments()
    {
        $sql = 'SELECT id, pseudo, content, createdAt, flag FROM comment WHERE flag = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [1]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
    public function unflagComment($commentId)
    {
        $sql = 'UPDATE comment SET flag = ? WHERE id = ?';
        $this->createQuery($sql, [0, $commentId]);
    }
}
