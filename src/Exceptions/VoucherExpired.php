<?php

namespace BeyondCode\Vouchers\Exceptions;

class VoucherExpired extends \Exception
{
    protected $message = 'The voucher is already expired.';

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
