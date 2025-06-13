<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_logs';
    
    protected $fillable = [
        'device',
        'platform',
        'browser',
        'ip_address',
        'location',
        'user_id',
        'user_email',
        'user_activity'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
