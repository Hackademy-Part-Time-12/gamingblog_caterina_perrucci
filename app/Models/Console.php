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
}
