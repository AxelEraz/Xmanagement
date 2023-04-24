<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Shipment extends Model
{
    use HasFactory, Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    protected $fillable = [
        'user_id',
        'status_id',
        'receiver',
        'address',
        'reference',
        'zipcode',
        'seller',
        'phone',
];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'receiver'
            ]
        ];
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }    
    
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    
    public function votes()
    {
        return $this->belongsTo(User::class, 'assign');
    }
}
