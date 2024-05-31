<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commentaire extends Model
{
    protected $fillable = [
       
            'auteur',
            'contenu',
            'article_id'
      
    ];
    use HasFactory;
    public function article():BelongsTo{
      return $this->belongsTo(Article::class);
    }
}
