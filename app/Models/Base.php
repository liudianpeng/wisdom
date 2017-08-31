<?php
/**
 * TODO 基础 ORM 类
 * User: DarkVisitor
 * Date: 17-8-28
 * Time: 上午10:32
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public $timestamps = true;

    public function freshTimestamp()
    {
        return time();
    }

    /**
     * 避免转换时间戳为时间字符串
     *
     * @param DateTime|int $value
     * @return DateTime|int
     */
    public function fromDateTime($value)
    {
        return $value;
    }
}