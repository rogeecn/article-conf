<?php

namespace rogeecn\ArticleConf\Classes;


use Illuminate\Support\Collection;
use rogeecn\ArticleConf\Exceptions\CategoryNotExist;

class Category
{
    /** @var Collection */
    private $instance;

    public function __construct()
    {
        $this->instance = Collection::make(config('conf.category'));
    }

    /**
     * @param $id
     *
     * @return CategoryItem
     * @throws \Throwable
     */
    public function fromID($id)
    {
        $item = $this->instance->where('id', '=', $id)->first();
        throw_unless($item, CategoryNotExist::class, "category id : {$id} not exist");

        return new CategoryItem($item);
    }

    /**
     * @param $alias
     *
     * @return CategoryItem
     * @throws \Throwable
     */
    public function fromAlias($alias)
    {
        $item = $this->instance->where('alias', '=', $alias)->first();
        throw_unless($item, CategoryNotExist::class, "category alias : {$alias} not exist");

        return new CategoryItem($item);
    }
}
