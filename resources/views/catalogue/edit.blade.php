@extends('catalogue.master')
    @section('content')
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <input type="hidden" name="_token" value="{!! Csrf_Token() !!}"  />
                            <div class="form-group">
                                
                                <label>Category Parent</label>
                                <select class="form-control" name="option">
                                <?php
                                $parent_id = $data2['parent_id'];
                                if($parent_id == 0)
                                {

                                 echo '<option value="0">Root catalogue</option>,';  
                                }
                               else 
                               {
                                  
                                    cate_parent($parent, 0,"--",$data2['parent_id']);
                                }

                                    ?>
                                     
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" value="{!!$data2['Ten']!!}" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" value="{!!$data2['catalogue_order']!!}" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtKeywords" value="{!!$data2['catalogue_keywords']!!}" placeholder="Please Enter Category Keywords" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" name="txtdes"   rows="3">{!!$data2['Destination']!!}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Category Status</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="2" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            
                        <form>
                    </div>
@stop                