<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChalUser extends Model
{
    use HasFactory;
    protected $table='chal_user';
    protected $guarded = ['id'];

    public function Chal(): BelongsTo
    {
        return $this->belongsTo(Chal::class, 'chal_id');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
