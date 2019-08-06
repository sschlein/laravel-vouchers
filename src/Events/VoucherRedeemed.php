<?php

namespace BeyondCode\Vouchers\Events;

use Illuminate\Queue\SerializesModels;

class VoucherRedeemed
{
    use SerializesModels;

    public $user;

    public $voucher;

    public function __construct($user, $voucher)
    {
        $this->user = $user;
        $this->voucher = $voucher;
    }
}
