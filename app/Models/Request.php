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
        'product_interest',
        'status'
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

    // Get status display name
    public function getStatusDisplayAttribute()
    {
        return match($this->status) {
            'pending' => 'Pending',
            'in_progress' => 'In Progress',
            'completed' => 'Completed',
            'cancelled' => 'Cancelled',
            default => ucfirst($this->status)
        };
    }

    // Get status badge class
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending' => 'bg-warning',
            'in_progress' => 'bg-info',
            'completed' => 'bg-success',
            'cancelled' => 'bg-danger',
            default => 'bg-secondary'
        };
    }
}