<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image_path',
    ];

    /** 
     * 
     * Relationships
     * 
     */

    /** 
     * 
     * Renders
     * 
     */
    public function renderImage()
    {
        return asset('images/web/categories/' . $this->image_path);
    }
}