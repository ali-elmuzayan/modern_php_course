<?php


class Page
{
    private array $attributes;

    public function __construct()
    {
        $this->attributes = [
            'id' => 5,
            'title' => 'Hello everyone',
        ];
    }

    public function __get($key)
    {
        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        }
        return null;
    }

    public function __set($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($this->attributes[$key]);
    }

    public function __unset($key)
    {
        unset($this->attributes[$key]);
    }

}

$page = new Page();
$page->content = 'This the content';
$page->slug = 'content';
echo '<br>';
var_dump($page->content);
echo '<br>';
var_dump($page->slug);
echo '<br>';
var_dump(isset($page->content));
echo '<br>';
unset($page->content);
var_dump(isset($page->content));
echo '<br>';
