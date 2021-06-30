<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
     
   // protected $table ='transactions'
    protected $fillable =['order_id','paid_amount','ballance',
    'transac_date','transac_amount','user_id','payment_method'];
}
