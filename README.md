# opensdk-caotravel


### 介绍
曹操出行SDK

#### 使用示例
~~~php
require '../vendor/autoload.php';

use OpenSDK\CaoTravel\Client;
use OpenSDK\CaoTravel\Requests\CaoTravelOrdersQueryGetRequest;

class CaoTravelOrdersQueryGetRequestTest
{
    public function __invoke()
    {
        $c = new Client();
        $c->appKey = $this->appKey;
        $c->appSecret = $this->appSecret;
        $c->gatewayUrl = $this->url;
        $req = new CaoTravelOrdersQueryGetRequest();

        $oid = '164418193202242';
        $req->setOrderId($oid);
        $req->setTimestamp(self::msectime());

        $c->execute($req);
        $response = $c->result();
        if(empty($response) || !isset($response['code']) || $response['code']!=200){
            echo '无结果';exit;
        }
        var_dump($response);exit;

    }
    public static function msectime() {

        list($msec, $sec) = explode(' ', microtime());
        $msectime = (int)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        return $msectime;
    }
}
~~~
