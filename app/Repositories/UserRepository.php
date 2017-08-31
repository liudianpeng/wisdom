<?php
/**
 * TODO 用户实例
 * User: DarkVisitor
 * Date: 2017/8/30
 * Time: 21:28
 */

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 获取全部用户
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return $this->user->all();
    }
}