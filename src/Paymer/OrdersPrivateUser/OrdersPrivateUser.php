<?php
namespace Paymer\OrdersPrivateUser;

class OrdersPrivateUser extends \SoapClient
{
    const WSDL_FILE = "http://www.paymer.com/ws3/OrdersPrivateUser.asmx?WSDL";
    private $classmap = array(
        'CreateCodes' => '\Paymer\OrdersPrivateUser\CreateCodes',
        'CreateCodesResponse' => '\Paymer\OrdersPrivateUser\CreateCodesResponse',
        'CodesInfo' => '\Paymer\OrdersPrivateUser\CodesInfo',
        'ServiceStatus' => '\Paymer\OrdersPrivateUser\ServiceStatus',
        'AuthHeader' => '\Paymer\OrdersPrivateUser\AuthHeader',
        'CreateCodesPackage' => '\Paymer\OrdersPrivateUser\CreateCodesPackage',
        'CreateCodesPackageResponse' => '\Paymer\OrdersPrivateUser\CreateCodesPackageResponse',
        'GetCodesPackage' => '\Paymer\OrdersPrivateUser\GetCodesPackage',
        'GetCodesPackageResponse' => '\Paymer\OrdersPrivateUser\GetCodesPackageResponse',
        'VerifyPrivateOrderByNumber' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrderByNumber',
        'VerifyPrivateOrderByNumberResponse' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrderByNumberResponse',
        'OrderInfo' => '\Paymer\OrdersPrivateUser\OrderInfo',
        'VerifyPrivateOrder' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrder',
        'VerifyPrivateOrderResponse' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrderResponse',
        'VerifyPrivateOrderEx' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrderEx',
        'VerifyPrivateOrderExResponse' => '\Paymer\OrdersPrivateUser\VerifyPrivateOrderExResponse',
        'OrderInfoEx' => '\Paymer\OrdersPrivateUser\OrderInfoEx',
        'IssueInfo' => '\Paymer\OrdersPrivateUser\IssueInfo',
        'TransPrivateOrder2Codes' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2Codes',
        'TransPrivateOrder2CodesResponse' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2CodesResponse',
        'TransPrivateOrder2New' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2New',
        'TransPrivateOrder2NewResponse' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2NewResponse',
        'TransPrivateOrder2Order' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2Order',
        'TransPrivateOrder2OrderResponse' => '\Paymer\OrdersPrivateUser\TransPrivateOrder2OrderResponse',
        'TransPrivateOrderToPackage' => '\Paymer\OrdersPrivateUser\TransPrivateOrderToPackage',
        'TransPrivateOrderToPackageResponse' => '\Paymer\OrdersPrivateUser\TransPrivateOrderToPackageResponse',
    );

    public function __construct($wsdl = null, $options = array())
    {
        foreach ($this->classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        if (isset($options['headers'])) {
            $this->__setSoapHeaders($options['headers']);
        }
        parent::__construct($wsdl ? : self::WSDL_FILE, $options);
    }

    /**
     * Create PAYMER check (number and code) for pre-reserve.
     *
     * @param  \Paymer\OrdersPrivateUser\CreateCodes         $parameters
     * @return \Paymer\OrdersPrivateUser\CreateCodesResponse
     */
    public function CreateCodes(\Paymer\OrdersPrivateUser\CreateCodes $parameters)
    {
        return $this->__soapCall(
            'CreateCodes',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Create package of essential elements for multi-checks operations.
     *
     * @param  \Paymer\OrdersPrivateUser\CreateCodesPackage         $parameters
     * @return \Paymer\OrdersPrivateUser\CreateCodesPackageResponse
     */
    public function CreateCodesPackage(\Paymer\OrdersPrivateUser\CreateCodesPackage $parameters)
    {
        return $this->__soapCall(
            'CreateCodesPackage',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Get numbers and codes for package of essential elements for created package.
     *
     * @param  \Paymer\OrdersPrivateUser\GetCodesPackage         $parameters
     * @return \Paymer\OrdersPrivateUser\GetCodesPackageResponse
     */
    public function GetCodesPackage(\Paymer\OrdersPrivateUser\GetCodesPackage $parameters)
    {
        return $this->__soapCall(
            'GetCodesPackage',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Verify PAYMER check number.
    Returns: FalseOrder - PAYMER check not valid (requisites
     * changed or payed off),
    FalseCodes - false number and code
     *
     * @param  \Paymer\OrdersPrivateUser\VerifyPrivateOrderByNumber         $parameters
     * @return \Paymer\OrdersPrivateUser\VerifyPrivateOrderByNumberResponse
     */
    public function VerifyPrivateOrderByNumber(\Paymer\OrdersPrivateUser\VerifyPrivateOrderByNumber $parameters)
    {
        return $this->__soapCall(
            'VerifyPrivateOrderByNumber',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Verify PAYMER check number and code.
    Returns: FalseOrder - PAYMER check not valid (requisites
     * changed or payed off),
    FalseCodes - false number and code.
     *
     * @param  \Paymer\OrdersPrivateUser\VerifyPrivateOrder         $parameters
     * @return \Paymer\OrdersPrivateUser\VerifyPrivateOrderResponse
     */
    public function VerifyPrivateOrder(\Paymer\OrdersPrivateUser\VerifyPrivateOrder $parameters)
    {
        return $this->__soapCall(
            'VerifyPrivateOrder',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Verify PAYMER check number and code.
    Returns: FalseOrder - PAYMER check not valid (requisites
     * changed or payed off),
    FalseCodes - false number and code.
     *
     * @param  \Paymer\OrdersPrivateUser\VerifyPrivateOrderEx         $parameters
     * @return \Paymer\OrdersPrivateUser\VerifyPrivateOrderExResponse
     */
    public function VerifyPrivateOrderEx(\Paymer\OrdersPrivateUser\VerifyPrivateOrderEx $parameters)
    {
        return $this->__soapCall(
            'VerifyPrivateOrderEx',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * PAYMER check exchange using reserved essential elements.
    Create PAYMER check with requested
     * Amount and with reserved essential elements .
     *
     * @param  \Paymer\OrdersPrivateUser\TransPrivateOrder2Codes         $parameters
     * @return \Paymer\OrdersPrivateUser\TransPrivateOrder2CodesResponse
     */
    public function TransPrivateOrder2Codes(\Paymer\OrdersPrivateUser\TransPrivateOrder2Codes $parameters)
    {
        return $this->__soapCall(
            'TransPrivateOrder2Codes',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * PAYMER check exchange.
    Create new PAYMER check with requested Amount.
     *
     * @param  \Paymer\OrdersPrivateUser\TransPrivateOrder2New         $parameters
     * @return \Paymer\OrdersPrivateUser\TransPrivateOrder2NewResponse
     */
    public function TransPrivateOrder2New(\Paymer\OrdersPrivateUser\TransPrivateOrder2New $parameters)
    {
        return $this->__soapCall(
            'TransPrivateOrder2New',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * PAYMER check merge.
    Merge PAYMER check with requested Amount with PAYMER check of the
     * same Issue.
     *
     * @param  \Paymer\OrdersPrivateUser\TransPrivateOrder2Order         $parameters
     * @return \Paymer\OrdersPrivateUser\TransPrivateOrder2OrderResponse
     */
    public function TransPrivateOrderBetween(\Paymer\OrdersPrivateUser\TransPrivateOrder2Order $parameters)
    {
        return $this->__soapCall(
            'TransPrivateOrderBetween',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * PAYMER check multi-exchange.
    Exchange PAYMER checks with requested Amount.
    Use pre-requested
     * package of essential elements .
     *
     * @param  \Paymer\OrdersPrivateUser\TransPrivateOrderToPackage         $parameters
     * @return \Paymer\OrdersPrivateUser\TransPrivateOrderToPackageResponse
     */
    public function TransPrivateOrderToPackage2(\Paymer\OrdersPrivateUser\TransPrivateOrderToPackage $parameters)
    {
        return $this->__soapCall(
            'TransPrivateOrderToPackage2',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

}
