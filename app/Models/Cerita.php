<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Cerita extends Model
{
    protected $guarded = [];

    /**
     * Get the isiUndangan associated with the Cerita
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function isiUndangan(): HasOne
    {
        return $this->hasOne(IsiUndangan::class);
    }
}
