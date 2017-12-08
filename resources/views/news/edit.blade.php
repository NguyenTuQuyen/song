@extends('news.master')
    @section('content')         
                    <div class="col-lg-12" style="padding-bottom:120px">
                       
                        <form action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{!! Csrf_Token() !!}"  />
                            <?php
                            $idLoaiTin = $data2['idLoaiTin'];
                            $kq=App\type_news::where('id',$idLoaiTin)->first();
                            $idTheLoai=$kq->idTheLoai;
                            ?>
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="form-control" name="catalogue" id="catalogue" >
                                @foreach($catalogue as $catalogue)
                                <option value="{!! $catalogue['id'] !!} " 
                                 @if($catalogue['id'] == $idTheLoai) 
                                 {!! "selected" !!} 
                                 @endif
                                 >
                                 {!!$catalogue ['Ten']!!}

                                </option>

                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Choose Type of News</label>
                                <select class="form-control"  name="type_news" id="type_news" >

                                @foreach($type_news as $type_news)
                                <option  value="{!! $type_news['id'] !!} "
                                 @if($type_news['id'] == $idLoaiTin) 
                                 {!! "selected" !!} 
                                 @endif
                                 >
                                 {!!$type_news ['Ten']!!}

                                </option>

                                @endforeach
                            
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>TieuDe</label>
                                <input class="form-control" name="TieuDe" placeholder="Please Enter TieuDe" value="{!! $data2['TieuDe'] !!}" />
                            </div>
                            <div class="form-group">
                                <label>NoiDung</label>
                                <textarea class="form-control ckeditor" name="NoiDung" value="" rows="2">{!! $data2['NoiDung'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>TomTat</label>
                                <textarea class="form-control ckeditor" name="TomTat" value="" rows="3">{!! $data2['TomTat'] !!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Hinh</label>
                                <image src="{{url("public/image")}}/{!! $data2['Hinh']!!}" height="50px" width="50px" />
                                <input type="file" class="form-control" name="Hinh" placeholder="Please Enter TomTat" /> 
                            </div>
                            <div class="form-group">
                                <label>NoiBat</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" @if( $data2['NoiBat']==1)  {!! "checked"!!} @endif type="radio">Yes
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="0" @if( $data2['NoiBat']==0)  {!! "checked"!!} @endif type="radio">None
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Add News</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>

@section('ajax_type_news')
<script>
    $(document).ready(function() {
        $("#catalogue").change(function(){
            var idtheloai = $(this).val();
            //alert(idtheloai);
            $.get("http://localhost/song/ajax_type_news/"+idtheloai,function(data){
            $("#type_news").html(data);
            });
 
        
        });

});
</script>
@stop
@stop