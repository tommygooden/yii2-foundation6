<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace tommygooden\foundation6;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Zurb Foundation 6 css files.
 *
 * @author Tommy Gooden <dev@tommygooden.com>
 */
class Foundation6Asset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $css = [
        'css/bootstrap.css',
    ];
}
