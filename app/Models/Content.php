<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_area_id',
        'column_type', 'block_margin_top','block_margin_bottom',
        'title', 'title_color', 'title_size', 'title_position',
        'title_margin_top', 'title_margin_bottom', 'content',
        'content_color', 'content_size', 'content_position',
        'content_margin_top', 'content_margin_bottom', 
        'block_2_margin_top','block_2_margin_bottom',
        'title_2', 'title_color_2', 'title_size_2', 'title_position_2',
        'title_margin_top_2', 'title_margin_bottom_2', 'content_2',
        'content_color_2', 'content_size_2', 'content_position_2',
        'content_margin_top_2', 'content_margin_bottom_2' 

    ];

    public function area()
    {
        return $this->belongsTo(ContentArea::class, 'content_area_id');
    }  
}
