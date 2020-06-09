<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repository
 *
 * Репозиторий для работы с сущностью.
 * Может получать и выдавать наборы данных.
 * Не может создовать/изменять сущности.
 * Убирает часть логики из контроллера.
 */
abstract class BaseRepository
{
    /**
     * @var  Model
     */
    protected Model $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     *
     * Вернуть клон пустой модели, что бы продолжать работать с моделью, не хранящей состояние
     */
    protected function startCondition()
    {
        return clone $this->model;
    }
}
