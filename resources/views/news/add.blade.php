@extends('news.master')
    @section('content')         
                    <div class="col-lg-12" style="padding-bottom:120px">
                       
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{!! Csrf_Token() !!}"  />
                            <div class="form-group">
                                <label>Choose Category</label>
                                <select class="form-control" name="catalogue" id="catalogue" >
                            

                                <?php

                                    cate_parent($parent);

                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Choose Type of News</label>
                                <select class="form-control"  name="type_news" id="type_news" >
                            
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>TieuDe</label>
                                <input class="form-control" name="TieuDe" placeholder="Please Enter TieuDe" />
                            </div>
                            <div class="form-group">
                                <label>NoiDung</label>
                                <textarea class="form-control ckeditor" name="NoiDung" rows="2"></textarea>
                            </div>
                            <div class="form-group">
                                <label>TomTat</label>
                                <textarea class="form-control ckeditor" name="TomTat" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Hinh</label>
                                <input type="file" class="form-control" name="hinh" placeholder="Please Enter TomTat" />
                            </div>
                            <div class="form-group">
                                <label>NoiBat</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Yes
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">None
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