<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Chal extends Model
{
    use HasFactory;
    protected $table='challenges';
    protected $guarded = ['id'];
    public $timestamps = false;

    public function Cat(): BelongsTo
    {
        return $this->belongsTo(Cat::class);
    }

    public function User(): BelongsToMany
    {
        return $this->belongsToMany(User::class, ChalUser::class, 'chal_id', 'user_id');
    }
}
