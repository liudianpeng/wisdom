<?php
/**
 * TODO 用户 ORM 类
 * User: DarkVisitor
 * Date: 17-8-28
 * Time: 上午10:40
 */

namespace App\Models;


class User extends Base
{
    protected $table = "users";
    protected $primaryKey = "id";
    public $incrementing = false;


}