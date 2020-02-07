<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // Extra elements to add to collection object

    public $formatted_description = null;
    public $formatted_blogTitle = null;
    public $formatted_created_at = null;
    public $formatted_updated_at = null;
}
