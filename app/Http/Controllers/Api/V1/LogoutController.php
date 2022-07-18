<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends BaseController
{
    public function logout()
    {
        if (Auth::check()) {
            $user = Auth::user()->token();
            $user->revoke();
            return $this->sendResponse('شما با موفقیت از سایت خارج شده اید.');
        }
        return $this->sendError('شما در سایت وارد نشده اید.');
    }
}
