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
        $sms_config = config("sms");
        if (is_array($mobile_number)) {
            $verify_mobile_number = !empty($mobile_number[0]) ? $mobile_number[0] : null;
        } else {
            $verify_mobile_number = $mobile_number;
        }
        // 验证是否是国际号码
        $is_international_mobile = !is_mobile_number($verify_mobile_number);
        // 判断手机号是否为国际号码
        if ($is_international_mobile) {
            $sms_config = array_replace_recursive($sms_config, !empty($sms_config['international']) ? $sms_config['international'] : []);
            config(["sms" => $sms_config]);
        }
        return app('sms')->send($mobile_number, get_sms_code($template_code, $sms_config), $template_params, $gateway, $config);
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
            $gateway = config('sms.default');
            return config("sms.templates.{$gateway}.{$template_code}", $template_code);
        }
    }
}

if (!function_exists('is_mobile_number')) {
    /**
     * 判断是否是手机号
     *
     * @param $str
     * @return bool
     */
    function is_mobile_number($str)
    {
        $pattern = '/^1\d{10}$/';
        if (preg_match($pattern, $str)) {
            return true;
        } else {
            return false;
        }
    }
}
