<?php

namespace BeyondCode\Vouchers\Exceptions;

class VoucherAlreadyRedeemed extends \Exception
{
    protected $message = 'The voucher was already redeemed.';

    protected $voucher;

    public static function create($voucher)
    {
        return new static($voucher);
    }

    public function __construct($voucher)
    {
        $this->voucher = $voucher;
    }
}
