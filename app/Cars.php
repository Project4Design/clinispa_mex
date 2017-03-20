<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = "cart";

    public $primaryKey = "id_carts"

    public $fillable = [
    'user_id',
    'products_id',
    'status'];
}
