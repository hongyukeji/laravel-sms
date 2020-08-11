<?php

return [
    'default' => env('SMS_DRIVER', 'aliyun'),

    'gateways' => [
        'aliyun' => [
            'sms_name' => '阿里云',
            'sms_url' => 'https://dysms.console.aliyun.com/dysms.htm',
            'accessKeyId' => env('SMS_ALIYUN_ACCESSKEYID'),
            'accessKeySecret' => env('SMS_ALIYUN_ACCESSKEYSECRET'),
            'signName' => env('SMS_ALIYUN_SIGNNAME'),
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\AliyunGateway',
        ],
        'yunpian' => [
            'sms_name' => '云片网',
            'sms_url' => 'https://www.yunpian.com',
            'apikey' => env('SMS_YUNPIAN_APIKEY'),
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\YunpianGateway',
        ],
        'qcloud' => [
            'sms_name' => '腾讯云',
            'sms_url' => 'https://cloud.tencent.com/product/sms',
            'appid' => '',
            'appkey' => '',
            'smsSign' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\QcloudGateway',
        ],
        'duanxinbao' => [
            'sms_name' => '短信宝',
            'sms_url' => 'http://www.smsbao.com',
            'user' => '',
            'pass' => '',
            'signName' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\DuanxinbaoGateway',
        ],
        'submail' => [
            'sms_name' => '赛邮云',
            'sms_url' => 'https://www.mysubmail.com',
            'appid' => '',
            'appkey' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\SubmailGateway',
        ],
        'sendcloud' => [
            'sms_name' => 'SendCloud',
            'sms_url' => 'https://www.sendcloud.net',
            'sms_user' => '',
            'sms_key' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\SendCloudGateway',
        ],
        'ihuyi' => [
            'sms_name' => '互亿无线',
            'sms_url' => 'http://www.ihuyi.com',
            'apiid' => '',
            'apikey' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\IhuyiGateway',
        ],
        'chuanglan' => [
            'sms_name' => '创蓝253',
            'sms_url' => 'https://www.253.com',
            'api_send_url' => 'http://smssh1.253.com/msg/send/json',
            'api_variable_url' => 'http://smssh1.253.com/msg/variable/json',
            'api_balance_query_url' => 'http://smssh1.253.com/msg/balance/json',
            'api_account' => env('SMS_CHUANGLAN_API_ACCOUNT'),
            'api_password' => env('SMS_CHUANGLAN_API_PASSWORD'),
            'sms_sign' => env('SMS_CHUANGLAN_SMS_SIGN'),
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\ChuanglanGateway',
        ],
        'luosimao' => [
            'sms_name' => '螺丝帽',
            'sms_url' => 'https://luosimao.com',
            'api_key' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\LuosimaoGateway',
        ],
        'huaxin' => [
            'sms_name' => '华信云通信',
            'sms_url' => 'https://www.ipyy.com',
            'account' => '',
            'password' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\HuaxinGateway',
        ],
        'huawei' => [
            'sms_name' => '华为云',
            'sms_url' => 'https://www.huaweicloud.com/product/msgsms.html',
            'app_key' => '',
            'app_secret' => '',
            'sms_sign' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\HuaweiGateway',
        ],
        'baidu' => [
            'sms_name' => '百度云',
            'sms_url' => 'https://cloud.baidu.com',
            'invokeId' => '',
            'ak' => '',
            'sk' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\BaiduGateway',
        ],
        'qiniu' => [
            'sms_name' => '七牛云',
            'sms_url' => 'https://www.qiniu.com/products/sms',
            'access_key' => '',
            'secret_key' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\QiniuGateway',
        ],
        'yunzhixun' => [
            'sms_name' => '云之讯',
            'sms_url' => 'https://www.ucpaas.com/index.html',
            'app_id' => '',
            'token' => '',
            'sid' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\YunzhixunGateway',
        ],
        'kaixintong' => [
            'sms_name' => '凯信通',
            'sms_url' => 'http://www.kingtto.cn',
            'account' => '',
            'password' => '',
            'userid' => '',
            'driver' => 'Hongyukeji\\PhpSms\\Gateways\\KaixintongGateway',
        ],
    ],

    'templates' => [
        'aliyun' => [
            'verify_code' => 'SMS_00000000',
        ],
        'yunpian' => [
            'verify_code' => env('SMS_YUNPIAN_VERIFICATION_CODE'),
        ],
        'duanxinbao' => [
            'verify_code' => '您的验证码是%s。有效期为15分钟，请尽快验证！',
        ],
        'chuanglan' => [
            'verify_code' => '您的验证码是{$var}。有效期为15分钟，请尽快验证！',
        ],
    ],
];
