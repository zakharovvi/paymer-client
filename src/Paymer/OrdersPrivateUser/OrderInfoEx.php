<?php

namespace Paymer\OrdersPrivateUser;

class OrderInfoEx
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
     * @var \Paymer\OrdersPrivateUser\IssueInfo
     */
    public $Issue;
    /**
     * @var \Paymer\OrdersPrivateUser\ServiceStatus
     */
    public $Status;
}
