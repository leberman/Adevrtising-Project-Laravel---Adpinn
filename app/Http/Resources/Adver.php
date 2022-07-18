<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Http\Controllers\Api\V1\BrandController;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class Adver extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $brand = new BrandController();
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'brand' => $this->brand_id,
            'model' => $this->model_id,
            'sale' => new Sale($this->sale),
            'expert' => new Expert($this->expert),
            'images' => AdverImage::collection($this->images),
        ];
    }
}
