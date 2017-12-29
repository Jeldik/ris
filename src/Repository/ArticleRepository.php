<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 * @package App\Repository;
 */
class ArticleRepository extends EntityRepository
{
    public function getArticles()
    {
        return $this->findAll();
    }

    /**
     * @param $url
     *
     * @return null|object
     */
    public function getArticle($url)
    {
        return $this->findOneBy(['url' => $url]);
    }

    /**
     * @param \AppBundle\Entity\Article $article
     */
    public function saveArticle(Article $article)
    {
        $this->getEntityManager()->persist($article);
        $this->getEntityManager()->flush();
    }

    public function removeArticle($url)
    {
        if ($article = $this->getArticle($url)) {
            $this->getEntityManager()->remove($article);
            $this->getEntityManager()->flush();
        }
    }
}
