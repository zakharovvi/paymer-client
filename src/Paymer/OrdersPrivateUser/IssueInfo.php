<?php

namespace Paymer\OrdersPrivateUser;

class IssueInfo
{
    /**
     * @var int
     */
    public $ID;
    /**
     * @var string
     */
    public $Name;
    /**
     * @var decimal
     */
    public $Amount;
    /**
     * @var decimal
     */
    public $Balance;
    /**
     * @var decimal
     */
    public $MinAmount;
    /**
     * @var dateTime
     */
    public $LiveBeginDate;
    /**
     * @var dateTime
     */
    public $LiveEndDate;
    /**
     * @var dateTime
     */
    public $PromiseDate;
    /**
     * @var dateTime
     */
    public $Created;
    /**
     * @var dateTime
     */
    public $Provided;
    /**
     * @var int
     */
    public $ControllerID;
    /**
     * @var string
     */
    public $Description;
    /**
     * @var int
     */
    public $CurrentState;
    /**
     * @var int
     */
    public $ProvideState;
    /**
     * @var string
     */
    public $IssuerWmid;
}
