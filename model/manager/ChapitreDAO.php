<?php

namespace App\model\manager;

use App\model\Backend\chapitre;


class ChapitreDAO extends DAO
{
    private function buildObject($row)
    {
        $chapitre = new chapitre();
        $chapitre->setId($row['id']);
        $chapitre->setTitle($row['title']);
        $chapitre->setContent($row['content']);
        $chapitre->setExtrait($row['extrait']);
        $chapitre->setAuthor($row['author']);
        $chapitre->setImage($row['Images']);
        $chapitre->setCreatedAt($row['createdAt']);
        return $chapitre;
    }

    public function getArticles()
    {
        $sql = 'SELECT * FROM chapitre ORDER BY id DESC';
        $result = $this->createQuery($sql);
        $chapitres = [];
        foreach ($result as $row){
            $chapitreId = $row['id'];
            $chapitres[$chapitreId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $chapitres;
    }

    public function getArticle($chapitreId)
    {
        $sql = 'SELECT * FROM chapitre WHERE id = ?';
        $result = $this->createQuery($sql, [$chapitreId]);
        $chapitre = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($chapitre);
    }

    public function getLastArticles()
    {
        $sql = 'SELECT * FROM chapitre ORDER BY id DESC LIMIT 0,1';
        $result = $this->createQuery($sql);
        $chapitres = [];
        foreach ($result as $row){
            $chapitreId = $row['id'];
            $chapitres[$chapitreId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $chapitres;
    
    }
    
    public function addArticle($chapitre)
    {
        //Permet de récupérer les variables $title, $content et $author
        extract($chapitre);
        $sql = 'INSERT INTO chapitre (title, content, author, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$title, $content, $author]);
    }
    
}



