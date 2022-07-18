<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models;
use Illuminate\Support\Facades\DB;
use Facades\App\Repositories\Cache\ModelRepository;
use Illuminate\Http\Response;

class ModelController extends Controller
{
    /**
     * get color title By id
     *
     * @return Response
     */
    public function getTitleModelById($id)
    {
        $model = ModelRepository::find($id, ['title']);
        return $model->title;
    }

    public function getPackageById($modelid)
    {
        $brand  = Models::findOrFail($modelid);
        $packages = DB::table('packages')->where('model_id', '=', $brand->id)->select('id', 'title', 'slug')->get();
        return $packages;
    }
}
