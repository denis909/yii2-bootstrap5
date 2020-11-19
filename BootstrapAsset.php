<?php

namespace denis909\bootstrap5;

use yii\web\View;

class BootstrapAsset extends \yii\web\AssetBundle
{

    public $sourcePath = '@vendor/twbs/bootstrap';

    public $css = [
        ['css/bootstrap.css', 'position' => View::POS_HEAD]
    ];

}