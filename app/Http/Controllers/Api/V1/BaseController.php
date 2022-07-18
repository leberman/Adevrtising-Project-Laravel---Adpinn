<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use function App\Http\Controllers\Api\response;

class BaseController extends Controller
{
    /**

     * success response method.

     *

     * @return \Illuminate\Http\Response

     */

    public function sendResponse($result, $message = null, $json = true)
    {
        $response = [
            'success' => 1,

            'data'    => $result,

            'message' => $message

        ];
        if ($json == true) {
            return response()->json($response, 200);
        }

        return $response;
    }


    /**

     * return error response.

     *

     * @return \Illuminate\Http\Response

     */

    public function sendError($error, $json = true, $errorMessages = [], $code = 200)
    {
        $response = [

            'success' => 0,

            'message' => $error,

        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }

        if ($json == true) {
            return response()->json($response, $code);
        }

        return $response;
    }
}
