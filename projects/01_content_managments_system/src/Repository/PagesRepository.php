<?php

namespace App\Repository;

use App\Model\PageModel;
use PDO;

class PagesRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    function get(): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pages");
        $stmt->execute();
        $entries = $stmt->fetchAll(PDO::FETCH_CLASS, PageModel::class);
        return $entries;
    }

    public function fetchForNavigation(): array
    {
        return $this->get();
    }

    public function fetchBySlug(string $slug): ?PageModel
    {
        $stmt = $this->pdo->prepare("SELECT * FROM pages WHERE slug = :slug");
        $stmt->bindValue(":slug", $slug);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, PageModel::class);
        $entry = $stmt->fetch();
        if (!empty($entry)) {

            return $entry;
        } else {
            return null;
        }
    }

    public function create(string $title, string $slug, string $content): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO pages (title, slug, content) VALUES (:title, :slug, :content)");
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":slug", $slug);
        $stmt->bindValue(":content", $content);
        $stmt->execute();

    }

    public function update(int $id, string $title, string $content): void
    {

        $stmt = $this->pdo->prepare("UPDATE pages SET title = :title, content = :content WHERE id = :id");
        $stmt->bindValue(":title", $title);
        $stmt->bindValue(":content", $content);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function is_slug_exist(string $slug): bool
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) As `count` FROM pages WHERE slug = :slug");
        $stmt->bindValue(":slug", $slug);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['count'] > 0);
    }

    public function fetchById(int $id): ?PageModel
    {
        if (!empty($id) && is_numeric($id)) {
            $stmt = $this->pdo->prepare("SELECT * FROM pages WHERE id = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchObject(PageModel::class);
        }
        return null;
    }

    public function is_exist(string $id): bool
    {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) As `count` FROM pages WHERE id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['count'] > 0);
    }

    public function delete(string $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM pages WHERE id = :id");
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}