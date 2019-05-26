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
 * | Version: v1.0.0  Date:2019-05-26 Time:11:20
 * +----------------------------------------------------------------------
 */

namespace Hongyukeji\LaravelSms\Facades;

use Illuminate\Support\Facades\Facade;

class Sms extends Facade
{
    public static function getFacadeAccessor()
    {
        return \Hongyukeji\LaravelSms\Sms::class;
    }
}