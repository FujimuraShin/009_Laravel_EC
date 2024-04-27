<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductsDetail extends Model
{
    use HasFactory;

    protected $table = 'products_detail';

    public function getData(){
        $data = DB::table($this->table)->get();
        return $data;
    }
}
