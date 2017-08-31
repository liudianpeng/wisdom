<?php
/**
 * Created by PhpStorm.
 * User: DarkVisitor
 * Date: 17-8-31
 * Time: 下午2:21
 */

namespace App\Repositories;


use App\Models\Model;

class ModelRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * 获取全部记录
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->model->all();
    }
}