<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MempelaiP extends Model
{
    protected $guarded = [];

    /**
     * Get the isiUndangan associated with the MempelaiP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function isiUndangan(): HasOne
    {
        return $this->hasOne(IsiUndangan::class);
    }
}
