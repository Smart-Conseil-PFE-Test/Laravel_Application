<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Specify the table name if it's not the plural of the model name
    protected $table = 'articles';

    // Define the fillable properties
    protected $fillable = [
        'Title',
        'Image',
        'HeaderImage',
        'Introduction',
        'Description',
        'LastMod',
        'Language',
        'KeyWords',
        'State',
        'NumVisit',
        'IdTheme',
        'IdUser',
        'IdHost',
    ];

}
