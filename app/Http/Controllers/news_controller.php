<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//khai bao db news
use App\news;
use App\Http\Requests\news_request ; 
use App\catalogue;
use App\type_news;
use App\Http\Requests\catalogue_request ; 


class news_controller extends Controller
{	
	public function getNews () 
     {  
          $data = news:: select('id', 'TieuDe', 'TieuDeKhongDau', 'TomTat', 'NoiDung', 'Hinh', 'NoiBat', 'SoLuotXem', 'idLoaiTin', 'created_at', 'updated_at') ->orderby('id', 'desc')-> get()->toArray();
          return view('news.list', compact('data'));
     } 
    public function addNews () 
     {  
          $data1 = news:: select('id', 'TieuDe', 'TieuDeKhongDau', 'TomTat', 'NoiDung', 'Hinh', 'NoiBat', 'SoLuotXem', 'idLoaiTin', 'created_at', 'updated_at') ->orderby('id', 'desc')-> get()->toArray();
          $parent = catalogue:: select('id','Ten', 'parent_id') -> get()->toArray();
          return view('news.add', compact('data1','parent'));
     } 

     public function ajaxType_news($idtheloai){
     echo $idtheloai;
     $kq= type_news::where('idTheLoai',$idtheloai)->get()->toArray();
     foreach($kq as $tl)
     {
     $id=$tl['id'];
     $ten =$tl['Ten'];
     echo "<option value='$id'>$ten</option>";
     }
     }


    public function postNews ( Request $request) //dùng phương thức request mới tạo
     {    
     	$tl = new news;
          
     	$tl ->idLoaiTin = $request ->type_news;
     	$tl ->TieuDe = $request ->TieuDe;
     	$tl ->TieuDeKhongDau = changeTitle($request ->TieuDe);
     	$tl ->NoiDung = $request ->NoiDung;
          $tl ->TomTat = $request ->TomTat;
     	$tl ->Hinh = $request ->hinh;
          $tl ->NoiBat = $request ->rdoStatus;
     	
          $tl -> save();
          return redirect() -> route('list_news')->with(['notification'=> 'Add successfull!','notification2'=> 'success' ]);
     } 
	
     public function editNews ($id) 
     {  	
     		
          $data2 = news::findOrFail($id)->toArray();
          $type_news = type_news::all()->toArray();
          //$parent = news:: select('id', 'TieuDe', 'TieuDeKhongDau', 'TomTat', 'NoiDung', 'Hinh', 'NoiBat', 'SoLuotXem', 'idLoaiTin', 'created_at', 'updated_at') -> get()->toArray();
          $catalogue = catalogue:: select('id','Ten', 'parent_id') -> get()->toArray();
          return view('news.edit', compact('data2','catalogue','type_news'));
     } 
     //ham delete
	public function deleteNews ($id) 

     {  
     	
         $delete = news:: find($id);
         $delete ->delete($id);
          return redirect() -> route('list_news')-> with(['notification'=> 'Delete successfull!','notification2'=> 'success' ]);
     } 


     

     public function updateNews ( Request $request,$id) //dùng phương thức request mới tạo
     {    
     	$tl1 = news::find($id);
     	
     	 $tl1 ->idLoaiTin = $request ->type_news;
          $tl1 ->TieuDe = $request ->TieuDe;
          $tl1 ->TieuDeKhongDau = changeTitle($request ->TieuDe);
          $tl1 ->NoiDung = $request ->NoiDung;
          $tl1 ->TomTat = $request ->TomTat;
         
          $tl1 ->NoiBat = $request ->rdoStatus;
          
          if($request->hasfile('Hinh')){
          $file = $request -> file('Hinh');
          $name= $file->getClientOriginalName();
          $file->move("public/image",$name);
          //unlink("public/admin/upload/images/tin-tuc/".$tintuc->Hinh);
          $tl1->Hinh =$name;
          }
          $tl1 -> save();
          return redirect() -> route('list_news')->with(['notification'=> 'Update successfull!','notification2'=> 'success' ]);
     } 
}
	
	









