<?php
declare(strict_types=1);

namespace DDD\Domain\Article;

interface ArticleRepository
{
    /**
     * @param ArticleEntity $articleEntity
     * @return void
     */
    public function save(ArticleEntity $articleEntity): void;
}
