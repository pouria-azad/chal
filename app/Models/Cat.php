<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cat extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function Chal(): BelongsToMany
    {
        return $this->belongsToMany(Chal::class);
    }
}
