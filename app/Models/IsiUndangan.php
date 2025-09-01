<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class IsiUndangan extends Model
{
    protected $guarded = [];


    /**
     * Get the Undangan associated with the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function undangan(): HasOne
    {
        return $this->hasOne(Undangan::class);
    }

    /**
     * Get the cerita that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cerita(): BelongsTo
    {
        return $this->belongsTo(Cerita::class);
    }

    /**
     * Get the galeri that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function galeri(): BelongsTo
    {
        return $this->belongsTo(Galeri::class);
    }

    /**
     * Get the hadiah that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hadiah(): BelongsTo
    {
        return $this->belongsTo(Hadiah::class);
    }

    /**
     * Get the mempelaiL that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mempelaiL(): BelongsTo
    {
        return $this->belongsTo(MempelaiL::class);
    }

    /**
     * Get the MempelaiP that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function MempelaiP(): BelongsTo
    {
        return $this->belongsTo(MempelaiP::class);
    }

    /**
     * Get the waktuDanTempat that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function waktuDanTempat(): BelongsTo
    {
        return $this->belongsTo(WaktuDanTempat::class);
    }
}
