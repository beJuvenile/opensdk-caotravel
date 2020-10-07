<?php
/**
 * API: meituan.orders.query.get 查询美团订单
 *
 * @author limo
 * @since 1.0, 2018.07.25
 */
namespace OpenSDK\CaoTravel\Requests;
use OpenSDK\CaoTravel\Interfaces\Request;

class CaoTravelOrdersQueryGetRequest implements Request
{

    public $requestType = 'get';

    public $dataType = 'json';

    //订单id
    public $order_id = '';

    //用户sid，作为平台的唯一标识
    public $timestamp = '';

    public $apiParas = array();


    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
        $this->apiParas["timestamp"] = $timestamp;
    }

    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
        $this->apiParas["order_id"] = $order_id;
    }


	public function getApiMethodName()
	{
		return '/v2/common/queryOrderDetailV2';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{

	}

    /**
     * 解析结果
     *
     * @param   $response   array
     * @return  array
     */
    public function getResult($response)
    {
        return $response;
    }

}
