<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use App\Brand;
use Facades\App\Repositories\Cache\BrandRepository;
use Facades\App\Repositories\Cache\ModelRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;
use function App\Http\Controllers\Api\response;

class BrandController extends BaseController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBrands()
    {
        $brands = BrandRepository::all();
        return response()->json($brands, 200);
    }

    /**
     * get color title By id
     *
     * @return Response
     */
    public function getTitleBrandById($id)
    {
        $brand = BrandRepository::find($id, ['title']);
        return $brand->title;
    }


    /**
     * @param $id
     * @return Response
     */
    public function getModelById($id)
    {
        $brand  = Brand::find($id);

        if ($brand) {
            $modelRepository = BrandRepository::findModels($id);
            return response()->json($modelRepository, 200);
        }

        return $this->sendError('هیچ برندی برای این مدل یافت نشد.');
    }
}
