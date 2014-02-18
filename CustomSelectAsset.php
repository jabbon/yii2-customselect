<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace jabbon\customselect;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CustomSelectAsset extends AssetBundle {

    public $sourcePath = '@vendor/jabbon/customselect/assets';
    public $js = [
        'jquery.customSelect.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];

}
