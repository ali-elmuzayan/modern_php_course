<?php

class PostsRepository
{
    public function __construct(private string $a, private string $b)
    {
    }
}

class PostsController
{
    public function __construct(private PostsRepository $postsRepository)
    {
    }
}

// Container pattern
class Container
{
    private array $instances = [];
    private array $recipes = [];

    public function bind(string $name, Closure $recipe): void
    {
        $this->recipes[$name] = $recipe; // Store the recipe
    }

    public function get(string $name)
    {
        if (!isset($this->instances[$name])) {
            if (!isset($this->recipes[$name])) {
                throw new RuntimeException("Could not build: {$name}");
            }
            $this->instances[$name] = $this->recipes[$name]($this);
        }

        return $this->instances[$name];
    }
}

// Register instances with the container
$container = new Container();

$container->bind('postsRepository', function () {
    return new PostsRepository('A', 'B');
});

$container->bind('postsController', function (Container $container) {
    $postsRepository = $container->get('postsRepository');
    return new PostsController($postsRepository);
});

// Retrieve the postsController instance
$postsController = $container->get('postsController');
