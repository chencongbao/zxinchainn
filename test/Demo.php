<?php
require_once '../vendor/autoload.php';

use NftZxinchainn\Factory;
use NftZxinchainn\Tools\Support\Bytes;

$config = [
    'appId' => '33333',
    'appKey' => '234234',
    'priKey' => "-----BEGIN PRIVATE KEY-----\n234234234\n-----END PRIVATE KEY-----\n",
    'pubKey' => "-----BEGIN PUBLIC KEY-----\ndwerwerwer\n-----END PUBLIC KEY-----\n",
    'identification' => 'fddfgdfg',
    'address' => "dfgsdsdf",
    'test' => false,
    'log' => [
        'default'  => 'daily', // or 'single'、'errorlog'、'syslog' 等
        'channels' => [
            'daily' => [
                'driver' => 'daily',  // 日志驱动 daily = 按日期切割文件
                'path'   => 'nft_zxin/logs/nft_zxin.log', // 日志文件路径
                'days'   => 7,        // 保留天数
                'level'  => 'debug',  // 日志等级
            ],
        ],
    ],
];
    $app = Factory::nftProgram($config);


    //企业首次绑定
    //$res = $app->wallet->getVerifyCode('320902198502288511',1,1);//获取手机验证码
    //$app->wallet->getUserInfo('320902198502288511','验证码',1);//获取唯一标识
    //$res = $app->auth->deriveKeyPair();//派生生成子公私钥对
    //$res = $app->wallet->getVerifyCode('320902198502288511',1,2);//获取邮件验证码
    //$res = $app->wallet->bindPlatformSelf('邮箱验证码','上面返回公钥','用户唯一标识');//平台自身绑定
    //$res = $app->wallet->queryBindInfo('11111');//检查是否绑定成功


    //$res = $app->wallet->checkAddressToUser('qwqwqwq','qwqwwqwq');
    //$res = $app->upload->getSecret();
    //='/Users/apple/Desktop/Rattler.png';

    //$res = $app->upload->uploadToCos($filePath);
    //$file = fopen('/Users/apple/Desktop/Rattler.png');
    //$res = $app->upload->uploadFileToCos($_FILES);
    //$res = $app->wallet->uploadBusinessLicense($_FILES,$mobile='13222388880',$verifyCode='1313');
    //$res = $app->wallet->uploadLicensePlatform($_FILES);
//var_dump(Bytes::getBytes(file_get_contents($_FILES['file']['tmp_name'])));

$url = 'https://assets.hcq.me/wp-content/uploads/2022/04/1650850673-dd74bf0c88aa84c.png';
var_dump(Bytes::getUrlBytes($url));
exit();
    $res = $app->nft->publishNft('ZX89fd7b14d32eab21eb7b9ab6c6019c08113743a8','23322323');
    var_dump($res);





