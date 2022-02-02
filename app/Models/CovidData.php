<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CovidData extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'deaths',
        'cases',
        'recovered',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_user_ID');
    }

}
