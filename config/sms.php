<?php

return [
    'driver' => env('SMS_DRIVER', 'aliyun'),

    'default' => [
        'gateway' => env('SMS_DEFAULT_GATEWAY', 'yunpian'),
    ],

    'config' => [
        'debug' => env('SMS_CONFIG_DEBUG', false),
        'default_sign' => '',
        'verify_code' => [
            'limit_rule' => 'throttle:5',
            'expires_at' => 60 * 15,
        ],
        'templates' =>
            [
                'verify_code' => [
                    'name' => '验证码',
                    'key' => 'verify_code',
                    'description' => '您的验证码是#code#。有效期为15分钟，请尽快验证！',
                ],

                // Other...
            ],
    ],

    'gateways' => [
        'aliyun' => [
            'sms_name' => '阿里云',
            'sms_url' => 'https://dysms.console.aliyun.com/dysms.htm',
            'accessKeyId' => env('SMS_ALIYUN_ACCESSKEYID'),
            'accessKeySecret' => env('SMS_ALIYUN_ACCESSKEYSECRET'),
            'signName' => env('SMS_ALIYUN_SIGNNAME'),
        ],
        'yunpian' => [
            'sms_name' => '云片网',
            'sms_url' => 'https://www.yunpian.com',
            'apikey' => env('SMS_YUNPIAN_APIKEY'),
        ],
        'qcloud' => [
            'sms_name' => '腾讯云',
            'sms_url' => 'https://cloud.tencent.com/product/sms',
            'appid' => '',
            'appkey' => '',
            'smsSign' => '',
        ],
        'duanxinbao' => [
            'sms_name' => '短信宝',
            'sms_url' => 'http://www.smsbao.com',
            'user' => '',
            'pass' => '',
            'signName' => '',
        ],
        'submail' => [
            'sms_name' => '赛邮云',
            'sms_url' => 'https://www.mysubmail.com',
            'appid' => '',
            'appkey' => '',
        ],
        'sendcloud' => [
            'sms_name' => 'SendCloud',
            'sms_url' => 'https://www.sendcloud.net',
            'sms_user' => '',
            'sms_key' => '',
        ],
        'ihuyi' => [
            'sms_name' => '互亿无线',
            'sms_url' => 'http://www.ihuyi.com',
            'apiid' => '',
            'apikey' => '',
        ],
    ],

    'templates' => [
        'aliyun' => [
            'verify_code' => env('SMS_ALIYUN_VERIFICATION_CODE'),
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

        // Other...
    ],

];