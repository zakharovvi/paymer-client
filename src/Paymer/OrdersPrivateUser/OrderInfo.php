<?php

namespace Paymer\OrdersPrivateUser;

class OrderInfo
{
    /**
     * @var int
     */
    public $ID;
    /**
     * @var decimal
     */
    public $Amount;
    /**
     * @var string
     */
    public $Number;
    /**
     * @var string
     */
    public $Code;
    /**
     * @var int
     */
    public $IssueID;
    /**
     * @var \Paymer\OrdersPrivateUser\ServiceStatus
     */
    public $Status;
}
