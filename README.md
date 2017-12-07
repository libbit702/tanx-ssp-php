# tanx-ssp-php
阿里妈妈广告Api PHP SDK

## 说明
php代码使用[php-protobuf](https://github.com/allegro/php-protobuf)编译自阿里妈妈的tanx-ssp.proto文件

文件仅供参考，安全起见，在实际使用中建议自己根据proto文件使用上面提到的工具重新编译一套新的代码出来

该proto文件语法为proto2，不适用于google官方的[proto](https://github.com/google/protobuf/tree/master/php)编译工具,原因可参见此[issue](https://github.com/google/protobuf/issues/3513#issuecomment-323149773)

## 用法示例（

```
//以下仅为简单示例，实际对接可能需要很多额外的代码，因为Api的请求中有很多参数为reuqired
require_once("Request.php");
require_once("Request_App.php');
require_once("Response.php');

use Tanx\Request;
use Tanx\Request_App;
use Tanx\Response;

//Request
$request = new Request();
$request->setVersion($params['version']);
$request->setId($params['id']);

//APP
$request_app = new Request_App();
$request_app->setAppName($params['app']['app_name']);
$request_app->appendCategory($params['app']['category']);
$request_app->setPackageName($params['app']['package_name']);
$request->setApp($request_app);

//Request Debug
$request->dump();

try {
    $options = [
		'http' => [
			'method' => 'POST',
			'header' => 'Content-type:application/octet-stream',
			'content' => $request->serializeToString(),
		]
	];
    $ctx = stream_context_create($options);
    $fp = fopen($url, 'rb', false, $ctx);
    $result = stream_get_contents($fp);
    fclose($fp);
	$response = new Response();
	$response->parseFromString($result);

	//Response Debug
	$response->dump();

} catch (Exception $e) {
	// var_dump($e);
}
```