<?php

namespace Paymer\RedeemPrivateUser;

class CheckRedemptionOrderExResponse
{
    /**
     * @var \Paymer\RedeemPrivateUser\Result
     */
    public $CheckRedemptionOrderExResult;
    /**
     * @var int
     */
    public $stateId;
    /**
     * @var string
     */
    public $wmpurse;
    /**
     * @var int
     */
    public $issueId;
    /**
     * @var decimal
     */
    public $amount;
    /**
     * @var int
     */
    public $wmTransId;
}

