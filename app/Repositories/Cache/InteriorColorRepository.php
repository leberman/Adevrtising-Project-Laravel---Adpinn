<?php

declare(strict_types=1);

namespace App\Repositories\Cache;

use Carbon\Carbon;
use Exception;

class InteriorColorRepository
{
    public const CACHE_KEY = 'INTERIORCOLOR';

    /**
     * Get all INTERIOR COLORs
     *
     * @return mixed|string
     */
    public function all()
    {
        $key = "all";
        $cacheKey = $this->getCacheKey($key);
        try {
            return cache()->remember($cacheKey, Carbon::now()->addDay(5), function () {
                return [
                    [
                        'id' => 1,
                        'title' => 'مشکی',
                        'slug' => 'black',
                    ],
                    [
                        'id' => 2,
                        'title' => 'کرم',
                        'slug' => 'cream'
                    ],
                    [
                        'id' => 3,
                        'title' => 'طوسی',
                        'slug' => 'gray'
                    ],
                    [
                        'id' => 4,
                        'title' => 'مارون',
                        'slug' => 'maroon'
                    ],
                    [
                        'id' => 5,
                        'title' => 'موکا',
                        'slug' => 'mocha'
                    ],
                    [
                        'id' => 6,
                        'title' => 'خاکستری',
                        'slug' => 'grayy'
                    ],
                    [
                        'id' => 7,
                        'title' => 'قرمز',
                        'slug' => 'red'
                    ],
                    [
                        'id' => 8,
                        'title' => 'قهوه ای',
                        'slug' => 'brown'
                    ],
                    [
                        'id' => 9,
                        'title' => 'شتری',
                        'slug' => 'camel'
                    ],
                    [
                        'id' => 10,
                        'title' => 'سفید',
                        'slug' => 'white'
                    ],
                    [
                        'id' => 11,
                        'title' => 'سرمه ای',
                        'slug' => 'navyBlue'
                    ],
                    [
                        'id' => 12,
                        'title' => 'نارنجی',
                        'slug' => 'orange'
                    ],
                    [
                        'id' => 13,
                        'title' => 'آبی',
                        'slug' => 'blue'
                    ],
                    [
                        'id' => 14,
                        'title' => 'نوک مدادی',
                        'slug' => 'pencilTip'
                    ],
                    [
                        'id' => 15,
                        'title' => 'بژ',
                        'slug' => 'beige'
                    ],
                    [
                        'id' => 16,
                        'title' => 'نقره ای',
                        'slug' => 'silver'
                    ],
                    [
                        'id' => 17,
                        'title' => 'زرشکی',
                        'slug' => 'crismon'
                    ],
                    [
                        'id' => 18,
                        'title' => 'ذغالی',
                        'slug' => 'coal'
                    ],
                    [
                        'id' => 19,
                        'title' => 'خاکی',
                        'slug' => 'earthy'
                    ],
                    [
                        'id' => 20,
                        'title' => 'دلفینی',
                        'slug' => 'dolphin'
                    ],
                    [
                        'id' => 21,
                        'title' => 'مسی',
                        'slug' => 'messi'
                    ],
                    [
                        'id' => 22,
                        'title' => 'زیتونی',
                        'slug' => 'olive'
                    ],
                    [
                        'id' => 23,
                        'title' => 'سایر',
                        'slug' => 'other'
                    ]
                ];
            });
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * find INTERIOR COLOR title from cache
     *
     * @param $id
     * @param array $select
     * @return mixed|string
     */
    public function find($id, $select)
    {
        $key = "find.{$id}";
        $cacheKey = $this->getCacheKey($key);
        try {
            return cache()->remember($cacheKey, Carbon::now()->addDay(5), function () use ($select, $id) {
                $interiorColors = [
                    [
                        'id' => 1,
                        'title' => 'مشکی',
                        'slug' => 'black',
                    ],
                    [
                        'id' => 2,
                        'title' => 'کرم',
                        'slug' => 'cream'
                    ],
                    [
                        'id' => 3,
                        'title' => 'طوسی',
                        'slug' => 'gray'
                    ],
                    [
                        'id' => 4,
                        'title' => 'مارون',
                        'slug' => 'maroon'
                    ],
                    [
                        'id' => 5,
                        'title' => 'موکا',
                        'slug' => 'mocha'
                    ],
                    [
                        'id' => 6,
                        'title' => 'خاکستری',
                        'slug' => 'grayy'
                    ],
                    [
                        'id' => 7,
                        'title' => 'قرمز',
                        'slug' => 'red'
                    ],
                    [
                        'id' => 8,
                        'title' => 'قهوه ای',
                        'slug' => 'brown'
                    ],
                    [
                        'id' => 9,
                        'title' => 'شتری',
                        'slug' => 'camel'
                    ],
                    [
                        'id' => 10,
                        'title' => 'سفید',
                        'slug' => 'white'
                    ],
                    [
                        'id' => 11,
                        'title' => 'سرمه ای',
                        'slug' => 'navyBlue'
                    ],
                    [
                        'id' => 12,
                        'title' => 'نارنجی',
                        'slug' => 'orange'
                    ],
                    [
                        'id' => 13,
                        'title' => 'آبی',
                        'slug' => 'blue'
                    ],
                    [
                        'id' => 14,
                        'title' => 'نوک مدادی',
                        'slug' => 'pencilTip'
                    ],
                    [
                        'id' => 15,
                        'title' => 'بژ',
                        'slug' => 'beige'
                    ],
                    [
                        'id' => 16,
                        'title' => 'نقره ای',
                        'slug' => 'silver'
                    ],
                    [
                        'id' => 17,
                        'title' => 'زرشکی',
                        'slug' => 'crismon'
                    ],
                    [
                        'id' => 18,
                        'title' => 'ذغالی',
                        'slug' => 'coal'
                    ],
                    [
                        'id' => 19,
                        'title' => 'خاکی',
                        'slug' => 'earthy'
                    ],
                    [
                        'id' => 20,
                        'title' => 'دلفینی',
                        'slug' => 'dolphin'
                    ],
                    [
                        'id' => 21,
                        'title' => 'مسی',
                        'slug' => 'messi'
                    ],
                    [
                        'id' => 22,
                        'title' => 'زیتونی',
                        'slug' => 'olive'
                    ]
                ];
                foreach ($interiorColors as $icolor) {
                    if ($id == $icolor['id']) {
                        $title = $icolor[$select];
                    }
                }
                return $title;
            });
        } catch (Exception $e) {
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
