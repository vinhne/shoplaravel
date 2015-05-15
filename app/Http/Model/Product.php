<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id','name','price', 'decription', 'image', 'state'];

    public   function test(){

        return  DB::select('select * from tbl_product');
    }

}
