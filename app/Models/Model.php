<?php
/**
 * TODO 模块 ORM  类
 * User: DarkVisitor
 * Date: 2017/8/28
 * Time: 20:16
 */

namespace App\Models;


class Model extends Base
{
    protected $table = "models";
    protected $primaryKey = "id";
    public $incrementing = true;    //主键字段是否是数字并且自增长

    /**
     * 获取子类模块
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrenModels(){
        return $this->hasMany($this, "parent_id", $this->primaryKey);
    }
}