<?php

declare(strict_types=1);

namespace App\Repositories\Cache;

use App\Models;
use Carbon\Carbon;

class ModelRepository
{
    public const CACHE_KEY = 'MODEL';

    /**
     * Get all colors
     *
     * @return mixed|string
     */
    public function all()
    {
        $key = "all";
        $cacheKey = $this->getCacheKey($key);
        try {
            return cache()->remember($cacheKey, Carbon::now()->addDay(5), function () {
                return Models::select('id', 'title', 'slug')->oldest('title')->get();
            });
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * find Color title from cache
     *
     * @param $id
     * @param array $select
     * @return mixed|string
     */
    public function find($id, array $select)
    {
        $key = "find.{$id}";
        $cacheKey = $this->getCacheKey($key);
        try {
            return cache()->remember($cacheKey, Carbon::now()->addDay(5), function () use ($select, $id) {
                return Models::where('id', $id)->select('title')->first();
            });
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    /**
     * Create cache key
     *
     * @param $key
     * @return string
     */
    public function getCacheKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY . ".$key";
    }
}
