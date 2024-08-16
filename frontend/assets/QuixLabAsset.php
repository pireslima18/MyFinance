<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class QuixLabAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/quixlab/style.css',
        'css/quixlab/plugins/chartist/css/chartist.min.css',
        'css/quixlab/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css',
        'css/quixlab/plugins/pg-calendar/css/pignose.calendar.min.css',
        'css/quixlab/font-awesome.min.css',
    ];
    public $js = [
        'js/quixlab/common.min.js',
        'js/quixlab/custom.min.js',
        'js/quixlab/settings.js',
        'js/quixlab/gleek.js',
        'js/quixlab/styleSwitcher.js',
        'js/quixlab/circle-progress/circle-progress.min.js',
        'js/quixlab/d3v3/index.js',
        'js/quixlab/topojson/topojson.min.js',
        'js/quixlab/datamaps/datamaps.world.min.js',
        'js/quixlab/raphael/raphael.min.js',
        'js/quixlab/morris/morris.min.js',
        'js/quixlab/moment/moment.min.js',
        'js/quixlab/pg-calendar/pignose.calendar.min.js',
        'js/quixlab/chartist/chartist.min.js',
        'js/quixlab/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js',
        'js/quixlab/dashboard/dashboard-1.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
