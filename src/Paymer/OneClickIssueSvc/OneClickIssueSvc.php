<?php
namespace Paymer\OneClickIssueSvc;

class OneClickIssueSvc extends \SoapClient
{
    const WSDL_FILE = "https://www.paymer.com/ecc3/ws/OneClickIssueSvc.asmx?WSDL";
    private $classmap = array(
        'OneClickGetPrice' => '\Paymer\OneClickIssueSvc\OneClickGetPrice',
        'OneClickGetPriceResponse' => '\Paymer\OneClickIssueSvc\OneClickGetPriceResponse',
        'Result' => '\Paymer\OneClickIssueSvc\Result',
        'AuthHeader' => '\Paymer\OneClickIssueSvc\AuthHeader',
        'OneClickGetPriceEx' => '\Paymer\OneClickIssueSvc\OneClickGetPriceEx',
        'OneClickGetPriceExResponse' => '\Paymer\OneClickIssueSvc\OneClickGetPriceExResponse',
        'OneClickOrderForUser' => '\Paymer\OneClickIssueSvc\OneClickOrderForUser',
        'OneClickOrderForUserResponse' => '\Paymer\OneClickIssueSvc\OneClickOrderForUserResponse',
        'OneClickOrderLimitForUser' => '\Paymer\OneClickIssueSvc\OneClickOrderLimitForUser',
        'OneClickOrderLimitForUserResponse' => '\Paymer\OneClickIssueSvc\OneClickOrderLimitForUserResponse',
        'OneClickOrderLimitMultiForUser' => '\Paymer\OneClickIssueSvc\OneClickOrderLimitMultiForUser',
        'OneClickOrderLimitMultiForUserResponse' => '\Paymer\OneClickIssueSvc\OneClickOrderLimitMultiForUserResponse',
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
     * описание:<br>показывает сколько необходимо внести
     * средств с учетом комиссии для создания чека для
     * метода OneClickOrderForUser<br><br>параметры метода:<br>amount -
     * сумма чека без комиссии<br>wmtype - тип валюты (например:
     * WMR, WMZ,..)<br>price - возвращаемое значение с учетом комисии<br><br>возвращает:<br>Success
     * - успешно. искомая сумма в поле price<br>NotAuthenticated - нет
     * доступа к методу<br>InternalError - ошибка, валюта не найдена.
     * неверные входные параметры
     *
     * @param  \Paymer\OneClickIssueSvc\OneClickGetPrice         $parameters
     * @return \Paymer\OneClickIssueSvc\OneClickGetPriceResponse
     */
    public function OneClickGetPrice(\Paymer\OneClickIssueSvc\OneClickGetPrice $parameters)
    {
        return $this->__soapCall(
            'OneClickGetPrice',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * описание:<br>показывает сколько необходимо внести
     * средств с учетом комиссии для создания чека для
     * метода OneClickOrderForUser<br>возвращает paymer-кошелек и лимит
     * чека<br><br>параметры метода:<br>amount - сумма чека без
     * комиссии<br>wmtype - тип валюты (например: WMR, WMZ,..)<br>price
     * - возвращаемое значение с учетом комисии<br>PurseN -
     * paymer-кошелек, на который осуществляется перевод<br>amountLimit
     * - максимальная сумма единичного чека (если значение
     * -1, то лимит не установлен)<br><br>возвращает:<br>Success
     * - успешно. искомая сумма в поле price<br>NotAuthenticated - нет
     * доступа к методу<br>InternalError - ошибка, валюта не найдена.
     * неверные входные параметры
     *
     * @param  \Paymer\OneClickIssueSvc\OneClickGetPriceEx         $parameters
     * @return \Paymer\OneClickIssueSvc\OneClickGetPriceExResponse
     */
    public function OneClickGetPriceEx(\Paymer\OneClickIssueSvc\OneClickGetPriceEx $parameters)
    {
        return $this->__soapCall(
            'OneClickGetPriceEx',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * описание:<br>создает обеспеченный чек по Wmid и WM-транзакции<br><br>параметры
     * метода:<br>wmid - WM-идентификатор владельца создаваемого
     * чека<br>amount - сумма чека без учета комиссии<br>wmTransID
     * - WM-транзакция на кошелек Paymer с учетом комиссии
     * (рассчитывается методом getPrice)<br>wmtype - тип валюты
     * (например: WMR, WMZ,..)<br>NumLen - длина номера чека (8-30)<br>CodeLen
     * - длина кода чека (13-99)<br>userIpAdress - IP пользователя nnn.nnn.nnn.nnn<br>srvInfo
     * - информация о конечном пользователе (например
     * Browser.UserAgent)<br>number - возвращаемый параметр номер чека<br>code
     * - возвращаемый параметр код чека<br>issueID - возвращаемый
     * параметр ID выпуска<br><br>возвращает:<br>Success - чек создан.
     * его реквизиты в параметрах number и code<br>NotAuthenticated -
     * нет доступа к методу<br>SuccessGeneratedBefore - в случае повторного
     * вызова с такими же параметрами. в number и code записаны
     * ранее созданные реквизиты<br>WMTransactionTooOld - слишком
     * старая транзакция. обратитесь к администритору<br>InvalidPurseType
     * - неверный тип кошелька<br>InvalidPurse - неверный кошелек<br>WrongAmount
     * - неверная сумма<br>NotPrivileged - внутренняя ошибка доспупа
     * к сервису получения данных о транзакции. обратитесь
     * к администритору<br>InternalError - внутренняя ошибка.
     * неверные входные параметры. обратитесь к администритору
     *
     *
     * @param  \Paymer\OneClickIssueSvc\OneClickOrderForUser         $parameters
     * @return \Paymer\OneClickIssueSvc\OneClickOrderForUserResponse
     */
    public function OneClickOrderForUser(\Paymer\OneClickIssueSvc\OneClickOrderForUser $parameters)
    {
        return $this->__soapCall(
            'OneClickOrderForUser',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * описание:<br>создает обеспеченный чек по Wmid и WM-транзакции<br>Если
     * сумма чека превышает максимальный лимит, то чек
     * делится с остатком лимит<br><br>параметры метода:<br>wmid
     * - WM-идентификатор владельца создаваемого чека<br>amount
     * - сумма чека без учета комиссии<br>wmTransID - WM-транзакция
     * на кошелек Paymer с учетом комиссии (рассчитывается
     * методом getPrice)<br>wmtype - тип валюты (например: WMR, WMZ,..)<br>NumLen
     * - длина номера чека (8-30)<br>CodeLen - длина кода чека (13-99)<br>userIpAdress
     * - IP пользователя nnn.nnn.nnn.nnn<br>srvInfo - информация о конечном
     * пользователе (например Browser.UserAgent)<br>number - возвращаемый
     * параметр номер чека<br>code - возвращаемый параметр
     * код чека<br>issueID - возвращаемый параметр ID выпуска<br><br>возвращает:<br>Success
     * - чек создан. его реквизиты в параметрах number и code<br>NotAuthenticated
     * - нет доступа к методу<br>SuccessGeneratedBefore - в случае повторного
     * вызова с такими же параметрами. в number и code записаны
     * ранее созданные реквизиты<br>WMTransactionTooOld - слишком
     * старая транзакция. обратитесь к администритору<br>InvalidPurseType
     * - неверный тип кошелька<br>InvalidPurse - неверный кошелек<br>WrongAmount
     * - неверная сумма<br>DeliveryFailed - ошибка отправки кодов
     * на почту<br>FalseCodes - ошибка при генерации кодов<br>NotPrivileged
     * - внутренняя ошибка доспупа к сервису получения
     * данных о транзакции. обратитесь к администритору<br>InternalError
     * - внутренняя ошибка. неверные входные параметры.
     * обратитесь к администритору
     *
     * @param  \Paymer\OneClickIssueSvc\OneClickOrderLimitForUser         $parameters
     * @return \Paymer\OneClickIssueSvc\OneClickOrderLimitForUserResponse
     */
    public function OneClickOrderLimitForUser(\Paymer\OneClickIssueSvc\OneClickOrderLimitForUser $parameters)
    {
        return $this->__soapCall(
            'OneClickOrderLimitForUser',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

    /**
     * описание:<br>создает обеспеченный чек по Wmid и WM-транзакции<br>Если
     * сумма чека превышает максимальный лимит, то чек
     * делится с остатком лимит<br>указыватеся число и
     * номинал чеков<br><br>параметры метода:<br>wmid - WM-идентификатор
     * владельца создаваемого чека<br>amount - сумма транзакции
     * без учета комиссии<br>wmTransID - WM-транзакция на кошелек
     * Paymer с учетом комиссии (рассчитывается методом getPrice)<br>wmtype
     * - тип валюты (например: WMR, WMZ,..)<br>NumLen - длина номера
     * чека (8-30)<br>CodeLen - длина кода чека (13-99)<br>userIpAdress - IP
     * пользователя nnn.nnn.nnn.nnn<br>srvInfo - информация о конечном
     * пользователе (например Browser.UserAgent)<br>number - возвращаемый
     * параметр номер чека<br>code - возвращаемый параметр
     * код чека<br>issueID - возвращаемый параметр ID выпуска<br><br>возвращает:<br>Success
     * - чек создан. его реквизиты в параметрах number и code<br>NotAuthenticated
     * - нет доступа к методу<br>SuccessGeneratedBefore - в случае повторного
     * вызова с такими же параметрами. в number и code записаны
     * ранее созданные реквизиты<br>WMTransactionTooOld - слишком
     * старая транзакция. обратитесь к администритору<br>InvalidPurseType
     * - неверный тип кошелька<br>InvalidPurse - неверный кошелек<br>WrongAmount
     * - неверная сумма (amount не соответствует price для wmTransID,
     * nominal меньше лимита и т.п.)<br>DeliveryFailed - ошибка отправки
     * кодов на почту<br>FalseCodes - ошибка при генерации кодов<br>NotPrivileged
     * - внутренняя ошибка доспупа к сервису получения
     * данных о транзакции. обратитесь к администритору<br>InternalError
     * - внутренняя ошибка. неверные входные параметры.
     * обратитесь к администритору
     *
     * @param  \Paymer\OneClickIssueSvc\OneClickOrderLimitMultiForUser         $parameters
     * @return \Paymer\OneClickIssueSvc\OneClickOrderLimitMultiForUserResponse
     */
    public function OneClickOrderLimitMultiForUser(\Paymer\OneClickIssueSvc\OneClickOrderLimitMultiForUser $parameters)
    {
        return $this->__soapCall(
            'OneClickOrderLimitMultiForUser',
            array($parameters),
            array(
                'uri' => 'http://tempuri.org/',
                'soapaction' => ''
            )
        );
    }

}
