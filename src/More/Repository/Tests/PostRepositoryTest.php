<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\Repository\Tests;

use L37sg0\DesignPatterns\More\Repository\InMemoryPersistence;
use L37sg0\DesignPatterns\More\Repository\Post;
use L37sg0\DesignPatterns\More\Repository\PostId;
use L37sg0\DesignPatterns\More\Repository\PostRepository;
use L37sg0\DesignPatterns\More\Repository\PostStatus;
use OutOfBoundsException;
use PHPUnit\Framework\TestCase;

class PostRepositoryTest extends TestCase
{
    private PostRepository $repository;

    protected function setUp(): void
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    public function testCanGenerateId() {
        $this->assertEquals(1, $this->repository->generateId()->toInt());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist() {
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage('Post with id 42 does not exist');

        $this->repository->findById(PostId::fromInt(42));
    }

    public function testCanPersistPostDraft() {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Patteern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->repository->findById($postId);

        var_dump($postId, $post, $this->repository);

        $this->assertEquals($postId, $this->repository->findById($postId)->getId());
        $this->assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}