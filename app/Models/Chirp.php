<?php

namespace App\Models;

use App\Events\CreatedChirp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    use HasFactory;


    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => CreatedChirp::class,
    ];

    public function user() : BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

}
