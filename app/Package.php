<?php

declare(strict_types=1);

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'packages';

    public function location()
    {
        return $this->belongsTo('App\Location');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function reserves()
    {
        return $this->belongsToMany('App\Reserve');
    }

    /**
     *
     */

    public function getPriceAttribute($value): string
    {
        return ($value) - ((30 * $value) / 100);
    }

    public function getTitleAttribute($value): string
    {
        if ($value != 'احیای رنگ') {
            return $value . ' + ۳۰٪ تخفیف';
        } else {
            return $value;
        }
    }
}
