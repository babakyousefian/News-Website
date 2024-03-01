<?php


/**
 * Author = babak yousefian
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function news()
    {
        return $this->hasMany(News::class);
    }
    public $timestamps=false;
    protected $fillable=["name"];
    use HasFactory;
}
