<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public $primaryKey = "id_products";

    public $fillable = [
    'name',
    'description',
    'image',
    'stock',
    'category'];
}
