<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
class Work extends Model
{
    use HasFactory;
    protected $table = 'works';
    protected $primaryKey = 'id';
    protected $fillable = ['title','company','description'];

    public function images(){
        return $this->hasMany(Image::class,'work_id');
    }
}
