<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\Repository;

class Post
{
    private PostId $id;
    private PostStatus $status;
    private string $title;
    private string $text;

    static public function draft(PostId $id, string $title, string $text): Post {
        return new self(
            $id,
            PostStatus::fromString(PostStatus::STATE_DRAFT),
            $title,
            $text
        );
    }

    static public function fromState(array $state): Post {
        return new self(
            PostId::fromInt($state['id']),
            PostStatus::fromInt($state['statusId']),
            $state['title'],
            $state['text']
        );
    }

    private function __construct(
        PostId $id,
        PostStatus $status,
        string $title,
        string $text
    ) {
        $this->id       = $id;
        $this->status   = $status;
        $this->title    = $title;
        $this->text     = $text;
    }

    public function getId(): PostId {
        return $this->id;
    }

    public function getStatus(): PostStatus {
        return $this->status;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getText(): string {
        return $this->text;
    }
}