<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrackingController extends BaseController
{
    public function trackingExpert(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'chassisـnumber' => 'required|string',
        ]);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $experts = Expert::where('chassisـnumber', $request->chassisـnumber)->with('user')->get();

        if (count($experts) > 0) {
            foreach ($experts as $expert) {
                if ($expert->status == 1) {
                    $request->merge(['id' => $expert->id]);
                    $arr[] = [
                        'name' => $expert->user->name . ' ' . $expert->user->family,
                        'phonenumber' => $expert->user->phone_number,
                        'properties' => new \App\Http\Resources\User\Expert($expert),
                        'message' => null
                    ];
                } else {
                    $arr[] = [
                        'id' => $expert->id,
                        'name' => $expert->user->name . ' ' . $expert->user->family,
                        'phonenumber' => $expert->user->phone_number,
                        'properties' => null,
                        'message' => 'گزارش کارشناسی برای این شناسه در دست تهیه است.'
                    ];
                }
            }
            return $this->sendResponse($arr);
        } else {
            return $this->sendError('گزارش کارشناسی یافت نشد.');
        }
    }
}
