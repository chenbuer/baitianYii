<?php

use kartik\tree\TreeView;
use app\models\TblTree;
use kartik\tree\Module;
use yii\helpers\Url;

echo TreeView::widget([
    'headingOptions' => ['label' => 'henCategory'],
    'rootOptions'       => ['label' => 'wolawolawo'],

    'query' => TblTree::find()->addOrderBy('root, lft'),

    'isAdmin' => true,         // optional (toggle to enable admin mode)

//    'nodeActions' => [
//        Module::NODE_MANAGE => Url::to(['/treemanager/node/manage']),
//    ],
    'displayValue'=>2,
    'iconEditSettings'=> [      //定义上面表单的
        'show' => 'list',
        'listData' => [
            'folder' => 'Folder',
            'file' => 'File',
            'mobile' => 'Phone',
            'bell' => 'Bell',
        ],
    ],


    //定义添加上去的
    'nodeAddlViews' => [
        Module::VIEW_PART_2 => '@kvtree/views/_article'
    ],

    'softDelete' => true,
    'cacheSettings' => ['enableCache' => true]

//    'nodeView'          => 'app/views/index/index',

//    'fontAwesome' => false,     // optional

//    'displayValue' => 1,        // initial display value
//    'softDelete' => true,       // defaults to true
//    'cacheSettings' => [
//        'enableCache' => true   // defaults to true
//    ],

//    'toolbar'=> [
//        TreeView::BTN_REFRESH => false,
//        TreeView::BTN_CREATE => false,
//        TreeView::BTN_CREATE_ROOT => false,
//        TreeView::BTN_REMOVE => false,
//        TreeView::BTN_SEPARATOR => false,
//        TreeView::BTN_MOVE_UP => false,
//        TreeView::BTN_MOVE_DOWN => false,
//        TreeView::BTN_MOVE_LEFT => false,
//        TreeView::BTN_MOVE_RIGHT => false,
//        TreeView::BTN_SEPARATOR => false,
//    ],

]);

