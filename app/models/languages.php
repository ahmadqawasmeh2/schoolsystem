<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class languages extends Model {
    protected $fillable = [
        'id', 'languageTitle','languageUniversal','languagePhrases','isRTL'
    ];
}
