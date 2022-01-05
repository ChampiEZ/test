<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
    ];

    public function job() {
        return $this->hasMany(Job::class);
    }
}
