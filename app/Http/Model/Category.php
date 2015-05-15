<?php namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use DB;
class Category extends Model {

    protected $table = 'category';
    protected $tabled = 'category_description';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['category_id','user_id','category_parent', 'category_order', 'status', 'created_at','updated_at'];

    public function list_category(){
       $category =  DB::table($this->table)
            ->join($this->tabled, $this->tabled.'.category_id', '=', $this->tabled.'.category_id')
            ->select("*")
            ->get();
        return $category;
    }
}
