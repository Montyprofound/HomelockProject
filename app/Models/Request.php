<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'name',
        'email', 
        'phone',
        'company_name',
        'service_type',
        'message',
        'product_interest'
    ];
    
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Get service type display name
    public function getServiceDisplayAttribute()
    {
        return match($this->service_type) {
            'security' => 'Security Guards',
            'cleaning' => 'Cleaning Services', 
            'fire_extinguisher' => 'Fire Extinguisher',
            'contact' => 'General Contact',
            default => ucfirst($this->service_type)
        };
    }
}