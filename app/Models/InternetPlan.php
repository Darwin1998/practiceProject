<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternetPlan extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'internet_plan_id';

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
