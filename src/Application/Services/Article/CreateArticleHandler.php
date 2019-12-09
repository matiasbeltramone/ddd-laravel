<?php
declare(strict_types=1);

namespace DDD\Application\Services\Article;

use DDD\Application\Contracts\Command;
use DDD\Application\Contracts\Handler;
use DDD\Domain\Article\ArticleEntity;
use DDD\Domain\Article\ArticleRepository;

final class CreateArticleHandler implements Handler
{
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Command|CreateArticleCommand $command
     */
    public function __invoke(Command $command)
    {
        $article = ArticleEntity::create(
            $command->getAuthorId(),
            $command->getTitle(),
            $command->getContent()
        );

        $this->repository->save($article);
    }
}
