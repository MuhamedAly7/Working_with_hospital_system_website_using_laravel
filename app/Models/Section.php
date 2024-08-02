<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    
    // To add translation methods
    use Translatable;

    // To define which attributes needs to be translated
    public $translatedAttributes = ['name'];

    
}
