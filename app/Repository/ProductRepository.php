<?php

namespace App\Repository;

use App\Models\Product as Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class ProductRepository
 * @package App\Repository
 *
 * Репозиторий для работы с сущностью 'Product'.
 * Может получать и выдавать наборы данных.
 * Не может создовать/изменять сущности.
 * Убирает часть логики из контроллера.
 */
class ProductRepository extends BaseRepository
{
    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param $count
     * @return Collection
     *
     * Получить дефолтный список для вывода
     */
    public function getForProductList($count)
    {
        return $this->startCondition()
            ::orderBy('availability', 'DESC')
            ->paginate($count);
    }

    /**
     * @param $column
     * @param $orderBy
     * @param $count
     * @return mixed
     *
     * Получить отсортированный список для вывода
     */
    public function getForProductsListSortBy($column, $orderBy, $count)
    {
        return $this->startCondition()
            ::orderByRaw('availability DESC,'.$column.' '.$orderBy)
            ->paginate($count);
    }
}
