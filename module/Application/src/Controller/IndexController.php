<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $Product =  Array(
            Array("id"=>"1","name"=>"Samsung Galaxy M51","price"=>" 6.290.000₫", "srcImg"=>"https://cdn.tgdd.vn/Products/Images/42/217536/samsung-galaxy-m51-trang-new-600x600-600x600.jpg"),
            Array("id"=>"2","name"=>"iPhone 13 Pro Max 128GB","price"=>"31.190.000₫", "srcImg"=>"https://cdn.tgdd.vn/Products/Images/42/230529/iphone-13-pro-max-gold-1-600x600.jpg"),
            Array("id"=>"3","name"=>"OPPO Reno7","price"=>"8.490.000₫", "srcImg"=>"https://cdn.tgdd.vn/Products/Images/42/274721/OPPO-Reno7-4G-Thumb-cam-1-600x600.jpg"),
            Array("id"=>"4","name"=>"POCO C40","price"=>"3.490.000₫", "srcImg"=>"https://cdn.tgdd.vn/Products/Images/42/277057/xiaomi-poco-c40-thumb-vang-600x600.jpg"), 
        );


        return new ViewModel([
            'Product' =>  $Product 
        ]);
    }
}
