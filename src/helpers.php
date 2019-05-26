<?php

use HongYuKeJi\Helpers\Sms;

if (!function_exists('sms')) {
    /**
     * 短信
     *
     * @param $phoneNumbers
     * @param $templateCode | $templateContent
     * @param array $templateParam
     * @param null $smsGateway
     * @return mixed
     */
    function sms($phoneNumbers, $templateCode, $templateParam = [], $smsGateway = null)
    {
        $config = config('sms');
        $gateway = $smsGateway ?: config('sms.driver');
        return (new Sms($config))->send($phoneNumbers, get_sms_code($templateCode), $templateParam, $gateway);
    }
}

if (!function_exists('get_sms_code')) {
    /**
     * 根据key获取短信模板Code
     *
     * @param $key
     * @return \Illuminate\Config\Repository|mixed
     */
    function get_sms_code($key)
    {
        $gateway = config('sms.driver');
        return config("sms.templates.{$gateway}." . $key);
    }
}
