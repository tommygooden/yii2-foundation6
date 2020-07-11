<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\bootstrap4;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Zurb Foundation javascript files.
 *
 * @author Tommy Gooden <dev@tommygooden.com>
 */
class Foundation6PluginAsset extends AssetBundle
{
    public $sourcePath = '@npm/bootstrap/dist';
    public $js = [
        'js/bootstrap.bundle.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap4\Foundation6Asset',
    ];
}
