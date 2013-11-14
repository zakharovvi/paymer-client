<?php
namespace Paymer\RedeemPrivateUser;

class RedeemPrivateUser extends \SoapClient
{

    const WSDL_FILE = "https://www.paymer.com/ecc3/ws/RedeemPrivateUser.asmx?WSDL";
    private $classmap = array(
        'RedeemOrderEx' => '\Paymer\RedeemPrivateUser\RedeemOrderEx',
        'RedeemOrderExResponse' => '\Paymer\RedeemPrivateUser\RedeemOrderExResponse',
        'Result' => '\Paymer\RedeemPrivateUser\Result',
        'EccAuthHeader' => '\Paymer\RedeemPrivateUser\EccAuthHeader',
        'CheckRedemptionOrderEx' => '\Paymer\RedeemPrivateUser\CheckRedemptionOrderEx',
        'CheckRedemptionOrderExResponse' => '\Paymer\RedeemPrivateUser\CheckRedemptionOrderExResponse',
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
     * Погашение с клиентским requestId
     *
     * @param \Paymer\RedeemPrivateUser\RedeemOrderEx $parameters
     * @return \Paymer\RedeemPrivateUser\RedeemOrderExResponse
     */
    public function RedeemOrderEx(\Paymer\RedeemPrivateUser\RedeemOrderEx $parameters)
    {
        return $this->__soapCall(
            'RedeemOrderEx',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * Проверка погашения по requestId
    stateId: (0 - успешное погашение,
     * 1 - погашение не найдено, 2 - откат погашения, 3 - погашение
     * не подтверждено, -1 - внутренняя ошибка)
     *
     * @param \Paymer\RedeemPrivateUser\CheckRedemptionOrderEx $parameters
     * @return \Paymer\RedeemPrivateUser\CheckRedemptionOrderExResponse
     */
    public function CheckRedemptionOrderEx(\Paymer\RedeemPrivateUser\CheckRedemptionOrderEx $parameters)
    {
        return $this->__soapCall(
            'CheckRedemptionOrderEx',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

}

?>
