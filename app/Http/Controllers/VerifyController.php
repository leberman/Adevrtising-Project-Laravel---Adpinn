<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Controllers\Api\V1\BaseController as BaseController;
use Illuminate\Support\Facades\Config;

class VerifyController extends BaseController
{
    /**
     * VerifyController constructor.
     */
    public function __construct()
    {
        $this->middleware('client');
    }

    /**
     * check throttle request
     * generate random number
     * save to db
     * send response
     *
     * @param $phoneNumber
     * @param $userId
     * @return \Illuminate\Http\Response
     */
    public function verifyPhone($phoneNumber, $userId)
    {
        $verifyPhone = new VerifyPhoneController();

        if ($verifyPhone->randomNumber($phoneNumber, $userId)) {
            return $this->sendResponse([
                'phone_number' => $phoneNumber,
                'expire_date' => round(microtime(true) * 1000),
                'allow_resend' => round(microtime(true) * 1000)+60000
            ], 'پیام با موفقیت ارسال شد.')->withCookie(cookie('expire_date', '1', 1));
        }

        return  $this->sendError('تعداد دفعات مجاز برای ارسال درخواست پیامک ' . config('constants.options.NUMBER_SEND_VERIFICATION') . ' عدد می باشد. لطفا با بخش پشتیبانی تماس بگیرید.');
    }
}
