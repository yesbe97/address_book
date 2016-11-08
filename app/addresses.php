<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "street_name",
        "home_number",
        "city",
        "zipcode",
        "phone_number",
        "created_at",
        "updated_at"
    ];
}
