<?php

use kartik\tree\TreeView;
use kartik\tree\TreeViewInput;
use app\models\TblTree;

echo TreeViewInput::widget([
    // single query fetch to render the tree
    // use the Product model you have in the previous step
    'query' => TblTree::find()->addOrderBy('root, lft'),
    'headingOptions'=>['label'=>'Categories'],
    'name' => 'kv-product', // input name
    'value' => '1,2,3',     // values selected (comma separated for multiple select)
    'asDropdown' => true,   // will render the tree input widget as a dropdown.
    'multiple' => true,     // set to false if you do not need multiple selection
    'fontAwesome' => true,  // render font awesome icons
    'rootOptions' => [
        'label'=>'<i class="fa fa-tree"></i>',  // custom root label
        'class'=>'text-success'
    ],
    //'options'=>['disabled' => true],
]);



//use app\models\TblTree;
//
//echo TreeView::widget([
//    'query' => TblTree::find()->addOrderBy('root, lft'),
//    'headingOptions' => ['label' => 'Categories'],
//    'fontAwesome' => false,     // optional
//    'isAdmin' => false,         // optional (toggle to enable admin mode)
//    'displayValue' => 1,        // initial display value
//    'softDelete' => true,       // defaults to true
//    'cacheSettings' => [
//        'enableCache' => true   // defaults to true
//    ]
//]);

