<?php

/**
 * ALIPAY API: alipay.pass.sync.add request
 *
 * @author auto create
 * @since 1.0, 2019-03-08 15:29:11
 */
class AlipayPassSyncAddRequest
{
    /**
     * alipass文件Base64编码后的内容。
     **/
    private $fileContent;

    /**
     * 商户外部交易号，由商户生成并确保其唯一性
     **/
    private $outTradeNo;

    /**
     * 商户与支付宝签约时，分配的唯一ID。
     **/
    private $partnerId;

    /**
     * 支付宝用户ID，即买家用户ID
     **/
    private $userId;

    private $apiParas = [];
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion = "1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt = false;

    public function getFileContent()
    {
        return $this->fileContent;
    }

    public function setFileContent($fileContent)
    {
        $this->fileContent = $fileContent;
        $this->apiParas["file_content"] = $fileContent;
    }

    public function getOutTradeNo()
    {
        return $this->outTradeNo;
    }

    public function setOutTradeNo($outTradeNo)
    {
        $this->outTradeNo = $outTradeNo;
        $this->apiParas["out_trade_no"] = $outTradeNo;
    }

    public function getPartnerId()
    {
        return $this->partnerId;
    }

    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        $this->apiParas["partner_id"] = $partnerId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
        $this->apiParas["user_id"] = $userId;
    }

    public function getApiMethodName()
    {
        return "alipay.pass.sync.add";
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
