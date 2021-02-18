<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class frontend_pages extends Model {
	protected $fillable = [
        'id', 'page_title','page_permalink','page_content','page_status'
        ,'page_visibility','page_navbar_visible','page_password','page_publish_date','page_publish_specific_date'
        ,'page_template','page_feat_image','page_slider_images','page_order	'
    ];
}
