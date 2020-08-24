<?php

if (!function_exists('sms_send')) {
    /**
     * 发送短信助手函数
     *
     * @param $mobile_number
     * @param string $template_code
     * @param array $template_params
     * @param string|null $gateway
     * @param array|null $config
     * @return mixed
     */
    function sms_send($mobile_number, string $template_code, array $template_params = [], string $gateway = null, array $config = null)
    {
        return app('sms')->send($mobile_number, get_sms_code($template_code, $config), $template_params, $gateway, $config);
    }
}

if (!function_exists('get_sms_code')) {
    /**
     * 根据key获取短信模板Code或文字内容
     *
     * @param $template_code
     * @param array|null $config
     * @return \Illuminate\Config\Repository|mixed|null
     */
    function get_sms_code($template_code, array $config = null)
    {
        if (!empty($config)) {
            $gateway = isset($config['default']) ? $config['default'] : null;
            return isset($config['templates'][$gateway][$template_code]) ? $config['templates'][$gateway][$template_code] : $template_code;
        } else {
            $gateway = config('sms.driver');
            return config("sms.templates.{$gateway}.{$template_code}", $template_code);
        }
    }
}
