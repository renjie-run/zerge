<?php
namespace app\controller\v1;

use app\BaseController;
use app\exception\BannerMissingException;
use app\validate\IdMustBePositiveInt;
use app\model\Banner as BannerModel;
use think\Exception;

class Banner extends BaseController
{
  /**
   * 根据 id 获取 Banner
   */
  public function getBannerById($id) {
    (new IdMustBePositiveInt())->goCheck();
    $banner = BannerModel::getBannerById($id);
    if (!$banner) {
        throw new Exception(1/0);
    }
    return $banner;
  }
}
