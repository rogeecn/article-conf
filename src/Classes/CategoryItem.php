<?php

namespace rogeecn\ArticleConf\Classes;


use Illuminate\Support\Collection;

class CategoryItem
{
    public $id;
    public $alias;
    public $name;

    /**
     * CategoryItem constructor.
     *
     * @param array|Collection $categoryItems
     */
    public function __construct($categoryItems)
    {
        if (!($categoryItems instanceof Collection)) {
            $categoryItems = Collection::make($categoryItems);
        }

        $categoryItems->each(function ($value, $key) {
            $this->{$key} = $value;
        });
    }
}
