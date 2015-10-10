<?php
/**
 * Created by PhpStorm.
 * User: ihsan
 * Date: 08.10.2015
 * Time: 14:20
 */

ini_set("soap.wsdl_cache_enabled", "0");

try{

    $client = new SoapClient('https://api.n11.com/ws/ProductService.wsdl');

    $request = [
        'auth' => [
            'appKey' => 'a45ac9bc-e3e2-4d19-b9e0-217a264764cf',
            'appSecret' => 'mNBz6YmdN1xXu2In',
        ],
        'productId' => '80370471',
        'price' => '200',
        'currencyType' => '1',
            'stockItems' => [
                'stockItem' => [
                    'sellerStockCode' => '1648648',
                    'optionPrice' => '300',
                ]
            ]

    ];

    $veri = $client->UpdateProductPriceById($request);

    echo "<pre>";
    //print_r($client->__getFunctions());
    print_r($veri);

}catch (Exception $e){
    echo $e->getMessage();
}




