<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 2017/6/10
 * Time: 12:02
 * @name InterfaceController
 * @author yj
 * @desc 接口测试
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class InterfaceController extends Yaf_Controller_Abstract {

    /**
     * 大数据量接口测试
     * @return string
     */
    public function indexAction() {
        //1. fetch query
        $post = $this->getRequest()->getParam("get", "已经");

        //2. fetch model
        $model = new SampleModel();

        return $post?:$model->selectSample();
    }
}