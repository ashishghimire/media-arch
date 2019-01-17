<?php

namespace App\Models\Film;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
 protected $primaryKey = 'film_id';

    protected $table = 'film';

    protected $casts = [
        "rental_rate"       => 'float'
    ];
}
