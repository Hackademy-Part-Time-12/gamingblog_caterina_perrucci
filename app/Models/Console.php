<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'brand', 'logo', 'description', 'user_id'
    ];

    //! una console appartiene solo ad un utente, per questo il metodo sarà al singolare (quindi user)
    public function user(){
        return $this->belongsTo(User::class);
    }

    //! una console appartiene a più giochi, per questo il metodo sarà al plurale (quindi games)
    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
