<?php
declare(strict_types=1);

namespace DDD\Infrastructure\Persistence\Eloquent;

use App\Article;
use DDD\Domain\Article\ArticleEntity;
use DDD\Domain\Article\ArticleRepository;

final class ArticleEloquentRepository implements ArticleRepository
{
    private $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function save(ArticleEntity $articleEntity): void
    {
        $this->model->create($article);
    }
}
