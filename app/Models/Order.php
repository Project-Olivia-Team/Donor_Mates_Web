<?php namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'merchandise_id', 
        'quantity', 
        'price', 
        'total_price', 
        'status', 
        'proof_of_payment', 
        'shipping_method', 
        'payment_method'
    ];

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class, 'merchandise_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
 ?>