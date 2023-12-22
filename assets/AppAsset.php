<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css',
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css',
        'css/site.css',
        'css/style.css',
        'css/vxod.css',
        'css/style-item.css',
        'css/style-shop.css',
        '//fonts.cdnfonts.com/css/gilroy-bold',
        '//fonts.cdnfonts.com/css/montserrat'
    ];
    public $js = [
        'https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js',
        'https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js',
        'js/main.js',
        'js/item.js',
        'js/cart.js',
        'js/like.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
