<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
    'url_image',
    'a_la_une'];


    public function commentaire():HasMany{
        return $this->hasMany(Commentaire::class);
    }
    
}
