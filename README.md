<h1 align="center"> laravel-sms </h1>

<p align="center"> :iphone: SMS - 短信发送，从未如此简单。全网首款支持所有短信服务商，自由扩展，无缝对接。</p>


## Installing

```shell
$ composer require hongyukeji/laravel-sms

$ php artisan vendor:publish --provider="Hongyukeji\LaravelSms\LaravelSmsServiceProvider"
```

## Usage

```php
$sms = sms_send('13952101395', 'verify_code', ['code' => '1234']);
print_r($sms);
```
TODO

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/hongyukeji/laravel-sms/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/hongyukeji/laravel-sms/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT