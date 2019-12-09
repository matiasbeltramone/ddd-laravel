<?php
declare(strict_types=1);

namespace DDD\Application\Services\Article;

use DDD\Application\Contracts\Command;

final class CreateArticleCommand implements Command
{
    private $authorId;
    private $title;
    private $content;

    public function __construct(
        int $authorId,
        string $title,
        string $content
    ) {
        $this->authorId = $authorId;
        $this->title = $title;
        $this->content = $content;
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
