<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes to assign tabble name
     */
    protected $table = 'patient';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'type',
        'symptoms',
    ];
    
    public $timestamps = false;

    public function Users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
