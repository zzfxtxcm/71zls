<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2013 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think\Controller;

/**
 * ThinkPHP RPC控制器类
 */
class LiteController {

    protected $allowMethodList  =   '';

   /**
     * 架构函数
     * @access public
     */
    public function __construct() {
        //控制器初始化
        if(method_exists($this,'_initialize'))
            $this->_initialize();
echo 'liteController';
    }

}
// 设置控制器别名 便于升级
class_alias('Think\Controller\LiteController','Think\Controller');