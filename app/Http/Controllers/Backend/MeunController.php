<?php
/**
 * TODO 模块控制器类
 * User: DarkVisitor
 * Date: 17-8-31
 * Time: 下午2:16
 */

namespace App\Http\Controllers\Backend;



use App\Repositories\ModelRepository;

class MeunController extends BaseController
{
    protected $model;

    public function __construct(ModelRepository $model)
    {
        $this->model = $model;
    }

    /**
     * 显示视图
     */
    public function index()
    {
        return view('backend.meun.list');
    }

    /**
     * 获取全部记录
     */
    public function getList()
    {

    }

    /**
     * 创建新记录
     */
    public function create()
    {
        //return view('backend.meun.create');
    }

    /**
     * 修改记录
     */
    public function update()
    {

    }

    /**
     * 删除一条记录
     */
    public function delete()
    {

    }
}