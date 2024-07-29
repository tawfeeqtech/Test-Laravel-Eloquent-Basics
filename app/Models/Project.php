<?php

namespace App\Models;

use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;


#[ObservedBy([ProductObserver::class])]
class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
    ];
}
