<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';

    use HasFactory;

    public function __construct(array $attributes = [])
    {
        $this->attributes['status'] = 'open';
        $this->attributes['counter_view'] = 0;
        parent::__construct($attributes);
    }

    protected $attributes = [
        'status' => 'open',
        'counter_view' => 0
    ];

    protected $fillable = ['name', 'nation', 'thumbnail', 'category_id', 'year', 'link', 'trailer', 'content', 'cast',
        'episodes', 'language', 'status'];

    protected $casts = [
        'actors' => 'array',
        'thumbnails' => 'array'
    ];
}
