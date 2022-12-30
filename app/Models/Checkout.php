<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

<<<<<<< HEAD
class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'camp_id', 'payment_status', 'midtrans_url', 'midtrans_booking_code'];

    public function setExpiredAttribute($value)
=======

class Checkout extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id', 'camp_id', 'payment_status', 'midtrans_url', 'midtrans_booking_code'];
    public function setExpiredattribute($value)
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    /**
<<<<<<< HEAD
     * Get the Camp that owns the Checkout
=======
     * Get the user that owns the Checkout
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Camp(): BelongsTo
    {
<<<<<<< HEAD
        return $this->belongsTo(Camp::class, 'camp_id');
=======
        return $this->belongsTo(Camp::class);
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }

    /**
     * Get the User that owns the Checkout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
