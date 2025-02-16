<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function questions()
    {
        return Question::where("category", $this->title)->where("school_id", school()->id)->get();
        // return $this->hasMany(Question::class, "category", "title");
    }
}
