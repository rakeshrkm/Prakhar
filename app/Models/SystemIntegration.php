<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemIntegration extends Model
{
    use HasFactory;
    protected $table = "system_integrations";
    // protected $fillable = [*];
    protected $guarded = [];

}
