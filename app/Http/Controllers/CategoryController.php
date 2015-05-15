<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model;

use Illuminate\Html\HtmlFacade;
use Illuminate\Html\FormFacade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;
use App\Http\Requests\Requestcategory;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getListCategory()
	{
        //$results = Model\Category::select('*')->orderBy('category_order','ASC')->get();
        $new = new Model\Category;
        $results = $new->list_category();
        //print_r($results);
        //die();
        $categorys =  $this->listsubparent($results,'edit-category/','delete-category');
        $selectcategory =  $this->selectcategory($results);

        return view('admin.category.list', array('categorys'=>$categorys, 'selectcategory'=>$selectcategory ));
	}

    public function getDanhnuc()
    {

        $posts =  Model\Category::select('*')->paginate(5);
        echo $posts->link();
        return view('admin.category.danhmuc', array('posts'=>$posts));

    }


    function  listsubparent($arr,$linkedit, $linkdelete){
        $html = '';
        if($arr){
            $html .= '<ol  class="level1 sortable  ui-sortable"  >';
            foreach($arr as $result){
                if($result->category_parent==0){
                     $html .= '<li  id="list_'.$result->category_id.'" ><div><span class="disclose parents"><span></span></span>'.$result->name.'<a href="'.$linkedit.$result->category_id.'"></a></div>';

                    $html .=  $this->dequycategory($arr,$result->category_id,$linkedit, $linkdelete);
                    $html .= '</li>';

                }
            }
            $html .= '</ol>';
        }
        return $html;

    }
    function dequycategory($arr, $category_parent,$linkedit, $linkdelete){

        $temp = true;
        $html = '';
        foreach($arr as $result){
            if($result->category_parent==$category_parent){
                if($temp)
                {
                    $temp = false;
                    $html .= "<ol class='level".$result->category_id."'>";
                }
                $html .= '<li id="list_'.$result->category_id.'" ><div><span class="disclose"><span></span></span>'.$result->category_name.'<a href="'.$linkedit.$result->category_id.'"></a></div>';
                $html .=  $this->dequycategory($arr,$result->category_id,$linkedit, $linkdelete);
                $html .= '</li>';
            }
        }
        if(!$temp)
            $html .= "</ol>";


        return  $html;
    }

    // Select -- Category
    function  selectcategory($arr){
        $html = '';
        if($arr){
            $html .= '<select name="category_parent" class="form-control" >';
            foreach($arr as $result){
                if($result->category_parent==0){
                    $html .= '<option  value="'.$result->category_id.'" >'.$result->name.'</option>';

                    $html .=  $this->dequyselectcategory($arr,$result->category_id);


                }
            }
            $html .= '</select>';
        }
        return $html;

    }
    function    dequyselectcategory($arr, $category_parent){
            $html = '';
            foreach($arr as $result){
            if($result->category_parent==$category_parent){
                $html .= '<option  value="'.$result->category_id.'" >--'.$result->category_name.'</option>';
                $html .=  $this->dequyselectcategory($arr,$result->category_id);

            }
        }


        return  $html;
    }

    /*
    function  listsubparent($arr,$linkedit, $linkdelete){
        $html = '';
        if($arr){
            $html .= '<ol  class="serialization vertical"  >';
            foreach($arr as $result){
                if($result->category_parent==0){
                    $html .= '<li data-id="'.$result->category_id.'" >'.$result->category_name.'<a href="'.$linkedit.$result->category_id.'"></a>';

                    $html .=  $this->dequycategory($arr,$result->category_id,$linkedit, $linkdelete);
                    $html .= '</li>';

                }
            }
            $html .= '</ol>';
        }
        return $html;

    }
    function dequycategory($arr, $category_parent,$linkedit, $linkdelete){

        $temp = true;
        $html = '';
        foreach($arr as $result){
            if($result->category_parent==$category_parent){
                if($temp)
                {
                    $temp = false;
                    $html .= "<ol>";
                }
                $html .= '<li data-id="'.$result->category_id.'" >'.$result->category_name.'<a href="'.$linkedit.$result->category_id.'"></a></li>';
                $html .=  $this->dequycategory($arr,$result->category_id,$linkedit, $linkdelete);
                $html .= '</li>';
            }
        }
        if(!$temp)
            $html .= "</ol>";


        return  $html;
    }

      function  postUpdateorder(){

        $arr = Input::get('jsonString');
        //echo count($arr);

        for($i=0;$i<count($arr[0]);$i++){

            $asd = Model\Category::where('category_id', $arr[0][$i]['id'])->update(
                array(
                    'category_parent' => 0,
                    'category_order' => $i+1
                )
            );

            if(isset($arr[0][$i]['children'])){
               // print_r($arr[0][$i]['children']);
                $this->update_arr_order($arr[0][$i]['children'],$arr[0][$i]['id'] );
            }

        }
        //print_r($arr[0]);
        die();
        return 0;
    }


    */

    function  postUpdateorder(){

        $data = Input::get('list');
        $root = 0;
        $child = array();
        foreach( $data as $id => $parentId ){
            if( $parentId <=0 ){
                $parentId = $root;
            }
            $child[$parentId][] = $id;
        }

        foreach( $child as $parentId => $menus ){
            $i = 1;
            foreach( $menus as $menuId ){
                $asd = Model\Category::where('category_id', (int)$menuId)->update(
                    array(
                        'category_parent' => (int)$parentId,
                        'category_order' => $i+1
                    ));
            }
        }
        die();
      //  return json_encode(null);
    }

    function update_arr_order($arr, $category_parent){
        for($i=0;$i<count($arr[0]);$i++){
            $asd = Model\Category::where('category_id', $arr[0][$i]['id'])->update(
                array(
                    'category_parent' => $category_parent,
                    'category_order' => $i+1
                )
            );
           // $this->update_arr_order($arr, $category_parent);
        }
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getAdd()
	{
        $new = new Model\Category;
        $results = $new->list_category();
        $selectcategory =  $this->selectcategory($results);
		return view('admin.category.add', array('selectcategory'=>$selectcategory));
	}
    public function postAdd(Request $request){
        $rq = new Requestcategory();

        $validator = Validator::make($request->all(),$rq->rules());
        if ($validator->fails())
        {
            // The given data did not pass validation
        }


        print_r($request->All());
        die();
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
