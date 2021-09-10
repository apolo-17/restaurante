<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['reservation_time', 'folio', 'user_id', 'room_id', 'business_center_id', 'table_id'];

    public function business_center()
    {
        return $this->belongsTo(BusinessCenter::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
