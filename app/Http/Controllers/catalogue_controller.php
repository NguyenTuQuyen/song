<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//khai bao db catalogue
use App\catalogue;
use App\Http\Requests\catalogue_request ; 


class catalogue_controller extends Controller
{	
	public function getList () 
     {  
          $data = catalogue:: select('id','Ten', 'TenKhongDau','catalogue_order','catalogue_keywords','Destination', 'parent_id', 'created_at','updated_at') ->orderby('id', 'desc')-> get()->toArray();
          return view('catalogue.list', compact('data'));
     } 
    public function addList () 
     {  
          $data1 = catalogue:: select('id','Ten', 'TenKhongDau','Catalogue_order','catalogue_keywords','Destination', 'parent_id', 'created_at','updated_at') ->orderby('id', 'desc')-> get()->toArray();
          
      
          $parent = catalogue:: select('id','Ten', 'parent_id') -> get()->toArray();
          return view('catalogue.add', compact('data1','parent'));
     } 



    public function postList ( catalogue_request $request) //dùng phương thức request mới tạo
     {    
     	$tl = new catalogue;
     	
     	 $tl ->Ten = $request ->txtCateName;
     	  $tl ->parent_id = $request ->option; 
     	 $tl ->TenKhongDau = changeTitle($request ->txtCateName);
     	 $tl ->catalogue_order = $request ->txtOrder;
     	 $tl ->catalogue_keywords = $request ->txtKeywords;
     	 $tl ->Destination = $request ->txtdes;
          $tl -> save();
          return redirect() -> route('list_catalogue')->with(['notification'=> 'Add successfull!','notification2'=> 'success' ]);
     } 
	
     public function editList ($id) 
     {  	
     		
          $data2 = catalogue::findOrFail($id)->toArray();
          $parent = catalogue:: select('id','Ten', 'parent_id') -> get()->toArray();
          return view('catalogue.edit', compact('data2','parent'));
     } 
     //ham delete
	public function deleteList ($id) 

     {  
     	
         $delete = catalogue:: find($id);
         $delete ->delete($id);
          return redirect() -> route('list_catalogue')-> with(['notification'=> 'Delete successfull!','notification2'=> 'success' ]);
     } 


     

     public function updateList ( catalogue_request $request,$id) //dùng phương thức request mới tạo
     {    
     	$tl1 = catalogue::find($id);
     	
     	 $tl1 ->Ten = $request ->txtCateName;
     	  $tl1 ->parent_id = $request ->option; 
     	 $tl1 ->TenKhongDau = changeTitle($request ->txtCateName);
     	 $tl1 ->catalogue_order = $request ->txtOrder;
     	 $tl1 ->catalogue_keywords = $request ->txtKeywords;
     	 $tl1 ->Destination = $request ->txtdes;
          $tl1 -> save();
          return redirect() -> route('list_catalogue')->with(['notification'=> 'Update successfull!','notification2'=> 'success' ]);
     } 
}
	
	









