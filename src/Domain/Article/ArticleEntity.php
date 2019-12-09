<?php
declare(strict_types=1);

namespace DDD\Domain\Article;

final class ArticleEntity
{
    private $authorId;
    private $title;
    private $content;

    private function __construct(
        int $authorId,
        string $title,
        string $content
    ) {
        $this->authorId = $authorId;
        $this->title = $title;
        $this->content = $content;
    }

    public static function create(
        int $authorId,
        string $title,
        string $content
    ): ArticleEntity {
        return new ArticleEntity(
            $authorId,
            $title,
            $content
        );
    }

    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = ucfirst($title);
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $this->filterBadWords($content);
    }

    private function filterBadWords(string $text): ?string
    {
        //... Implements this
        return $text;
    }
}
