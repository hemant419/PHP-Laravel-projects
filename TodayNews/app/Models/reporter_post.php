<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporter_post extends Model
{
    use HasFactory;
    protected $table="reporter_posts";
    protected $primaryKey="post_id";
}
