<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberImage extends Model
{
    use HasFactory;

    protected $fillable = ['member_id', 'path'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
