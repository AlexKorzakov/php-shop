<?php

return array(

    'product/([0-9]+)'=> 'product/view/$1', // actionView in ProductController

    'catalog' => 'catalog/index', // actionIndex in CatalogController

    'view-ajax.php'=>'ajax/MakeAjax',

    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory in catalogController
    'category/([0-9]+)' => 'catalog/category/$1', //actionCategory in CatalogController


    'cart/checkout' => 'cart/checkout', // call actionCheckout in CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', //call actionAdd in CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // call actionAddAjax in CartController
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete in CartController
    'cart' => 'cart/index', //call actionIndex in CartController

    'user/order/([0-9]+)' => 'user/order/$1',
    'user/showSecondTableAjax' => 'user/showSecondTableAjax',
    'user/testAjax' => 'user/testAjax',
    'user/register' => 'user/register', // call actionRegister in user controller
    'user/login' => 'user/login', // call actionLogin in user controller
    'user/logout' => 'user/logout', // call actionLogout in user controller

    'cabinet/order' => 'cabinet/order',  //call actionOrder in CabinetController
    'cabinet' => 'cabinet/index', // call actionIndex in CabinetController
    'user/company' => 'cabinet/company', // call actionCompany in CabinetController
    'register/user' => 'user/newcompany', // call actionRegister in CabinetController


    'contacts' => 'site/contact', //call actionContact in SiteController
    'about' => 'site/about', //call actionAbout in site controller
    'blog' => 'news/index', //call newsController
    'payment' => 'site/payment', //call actionPayment SiteController
    'delivery' => 'site/delivery', //call actionDelivery in SiteController
    'return' => 'site/return', //call actionReturn in SiteController
    'returnnoquality' => 'site/returnNoQuality', //call actionReturnNoQuality in SiteController
    'returnquality' => 'site/returnQuality', //call actionReturnNoQuality in SiteController

    'error' => 'site/error',
    ''=> 'site/index', // actionIndex in SiteController
    

);

?>