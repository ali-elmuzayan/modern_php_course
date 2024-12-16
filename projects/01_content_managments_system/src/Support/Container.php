<?php

namespace App\Support;

use Closure;
use Exception;

class Container
{
    private array $instances = [];
    private array $recipes = [];

    /**
     * Bind a recipe to the container
     * @param string $key The identifier for the recipe.
     * @param Closure $recipe Closure $recipe the closure that creates the instance
     * @return void
     */

    public function bind(string $key, Closure $recipe): void
    {
        $this->recipes[$key] = $recipe;
    }

    /**
     * Retrieve an instance from the container
     * @param string $key The identifier for the instance
     * @return mixed The resolved instance.
     * @throws Exception If no recipe is found for the given key
     */
    public function get(string $key): mixed
    {
        if (empty($this->instances[$key])) {
            $this->instances[$key] = $this->resolve($key);
        }
        return $this->instances[$key];
    }

    /**
     * Resolve a recipe and create an instance
     *
     * @param string $key The identifier for the recipe.
     * @return mixed the Created instance.
     * @throws Exception if no recipe is defined for the key.
     */
    private function resolve(string $key): mixed
    {
        if (!isset($this->recipes[$key])) {
            throw new Exception("No recipe found for key: $key");
        }
        return ($this->recipes[$key]($this));
    }

}