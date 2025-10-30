<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable=[
        'hotel_id','room_id',
        'customer_name','customer_email',
        'customer_phone','check_in','check_out',
        'number_of_guest','total_price','status'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
