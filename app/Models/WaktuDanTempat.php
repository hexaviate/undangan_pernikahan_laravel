<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class WaktuDanTempat extends Model
{

    protected $casts = [
        'tanggal_akad' => 'datetime',
        'tanggal_resepsi' => 'datetime',
    ];
    protected $guarded = [];

    /**
     * Get the isiUndangan associated with the WaktuDanTempat
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function isiUndangan(): belongsTo
    {
        return $this->belongsTo(IsiUndangan::class);
    }
}
