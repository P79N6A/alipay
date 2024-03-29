<?php

/**
 * ALIPAY API: alipay.ebpp.bill.add request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayEbppBillAddRequest
{
    /**
     * 外部订单号
     **/
    private $bankBillNo;

    /**
     * 账单的账期，例如201203表示2012年3月的账单。
     **/
    private $billDate;

    /**
     * 账单单据号，例如水费单号，手机号，电费号，信用卡卡号。没有唯一性要求。
     **/
    private $billKey;

    /**
     * 支付宝给每个出账机构指定了一个对应的英文短名称来唯一表示该收费单位。
     **/
    private $chargeInst;

    /**
     * 扩展属性
     **/
    private $extendField;

    /**
     * 输出机构的业务流水号，需要保证唯一性
     **/
    private $merchantOrderNo;

    /**
     * 用户的手机号
     **/
    private $mobile;

    /**
     * 支付宝订单类型。公共事业缴纳JF,信用卡还款HK
     **/
    private $orderType;

    /**
     * 拥有该账单的用户姓名
     **/
    private $ownerName;

    /**
     * 缴费金额。用户支付的总金额。单位为：RMB Yuan。取值范围为[0.01，100000000.00]，精确到小数点后两位。
     **/
    private $payAmount;

    /**
     * 账单的服务费。
     **/
    private $serviceAmount;

    /**
     * 子业务类型是业务类型的下一级概念，例如：WATER表示JF下面的水费，ELECTRIC表示JF下面的电费，GAS表示JF下面的燃气费。
     **/
    private $subOrderType;

    /**
     * 交通违章地点，sub_order_type=TRAFFIC时填写。
     **/
    private $trafficLocation;

    /**
     * 违章行为，sub_order_type=TRAFFIC时填写。
     **/
    private $trafficRegulations;

    private $apiParas = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getBankBillNo()
    {
        return $this->bankBillNo;
    }

    public function setBankBillNo($bankBillNo)
    {
        $this->bankBillNo = $bankBillNo;
        $this->apiParas["bank_bill_no"] = $bankBillNo;
    }

    public function getBillDate()
    {
        return $this->billDate;
    }

    public function setBillDate($billDate)
    {
        $this->billDate = $billDate;
        $this->apiParas["bill_date"] = $billDate;
    }

    public function getBillKey()
    {
        return $this->billKey;
    }

    public function setBillKey($billKey)
    {
        $this->billKey = $billKey;
        $this->apiParas["bill_key"] = $billKey;
    }

    public function getChargeInst()
    {
        return $this->chargeInst;
    }

    public function setChargeInst($chargeInst)
    {
        $this->chargeInst = $chargeInst;
        $this->apiParas["charge_inst"] = $chargeInst;
    }

    public function getExtendField()
    {
        return $this->extendField;
    }

    public function setExtendField($extendField)
    {
        $this->extendField = $extendField;
        $this->apiParas["extend_field"] = $extendField;
    }

    public function getMerchantOrderNo()
    {
        return $this->merchantOrderNo;
    }

    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->merchantOrderNo = $merchantOrderNo;
        $this->apiParas["merchant_order_no"] = $merchantOrderNo;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        $this->apiParas["mobile"] = $mobile;
    }

    public function getOrderType()
    {
        return $this->orderType;
    }

    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        $this->apiParas["order_type"] = $orderType;
    }

    public function getOwnerName()
    {
        return $this->ownerName;
    }

    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
        $this->apiParas["owner_name"] = $ownerName;
    }

    public function getPayAmount()
    {
        return $this->payAmount;
    }

    public function setPayAmount($payAmount)
    {
        $this->payAmount = $payAmount;
        $this->apiParas["pay_amount"] = $payAmount;
    }

    public function getServiceAmount()
    {
        return $this->serviceAmount;
    }

    public function setServiceAmount($serviceAmount)
    {
        $this->serviceAmount = $serviceAmount;
        $this->apiParas["service_amount"] = $serviceAmount;
    }

    public function getSubOrderType()
    {
        return $this->subOrderType;
    }

    public function setSubOrderType($subOrderType)
    {
        $this->subOrderType = $subOrderType;
        $this->apiParas["sub_order_type"] = $subOrderType;
    }

    public function getTrafficLocation()
    {
        return $this->trafficLocation;
    }

    public function setTrafficLocation($trafficLocation)
    {
        $this->trafficLocation = $trafficLocation;
        $this->apiParas["traffic_location"] = $trafficLocation;
    }

    public function getTrafficRegulations()
    {
        return $this->trafficRegulations;
    }

    public function setTrafficRegulations($trafficRegulations)
    {
        $this->trafficRegulations = $trafficRegulations;
        $this->apiParas["traffic_regulations"] = $trafficRegulations;
    }

    public function getApiMethodName()
    {
        return "alipay.ebpp.bill.add";
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    public function getNeedEncrypt()
    {
        return $this->needEncrypt;
    }

    public function setNeedEncrypt($needEncrypt)
    {

        $this->needEncrypt = $needEncrypt;

    }

}
