<?php
/**
 * +----------------------------------------------------------------------
 * | wmt [ File Description ]
 * +----------------------------------------------------------------------
 * | Copyright (c) 2015~2019 http://www.wmt.ltd All rights reserved.
 * +----------------------------------------------------------------------
 * | 版权所有：贵州鸿宇叁柒柒科技有限公司
 * +----------------------------------------------------------------------
 * | Author: shadow <admin@hongyuvip.com>  QQ: 1527200768
 * +----------------------------------------------------------------------
 * | Version: v1.0.0  Date:2019-05-26 Time:11:18
 * +----------------------------------------------------------------------
 */

namespace Hongyukeji\LaravelSms;

use HongYuKeJi\Helpers\Sms as SmsHelpers;

class Sms
{
    public function send($phoneNumbers, $templateCode, $templateParam = [], $smsGateway = null)
    {
        $config = config('sms');
        $gateway = $smsGateway ?: config('sms.driver');
        return (new SmsHelpers($config))->send($phoneNumbers, get_sms_code($templateCode), $templateParam, $gateway);
    }
}