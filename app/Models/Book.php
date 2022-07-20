<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    //use SoftDeletes;//軟刪除

    //允許批量輸入
    protected $fillable = [
        'title',
        'description',
        'price',
        'available'
    ];

    public function store(){
        return $this->belongsTo('App\Models\Store');
    }

    public function authors(){
        return $this->belongsToMany('App\Models\Author');
    }
}
