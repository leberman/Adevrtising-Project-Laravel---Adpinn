<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\V1;
use App\Location;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends V1\BaseController
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function getLocations()
    {
        $locations = Location::select('place', 'slug', 'id')->get();
        return $this->sendResponse($locations);
    }

    public function getLocationById($id)
    {
        $location = Location::find($id);
        return ($location ? $location : $this->sendError('لوکیشن مورد نظر یافت نشد.'));
    }
}
