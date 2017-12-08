@extends('catalogue.master')
    @section('content')
                                <ul style="list-style: none; ">
                                 <li>
                                    <a href="catalogue_add" ;">Add Product</a>
                                </li>
                                </ul>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Delete</th>
                                <th><a href="catalogue_edit" ;">Edit</a></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $item['id']!!}</td>
                                <td>{!! $item['Ten']!!}</td>
                                <td>
                                <?php
                                if($item['parent_id'] == 0)
                                {
                                    echo 'Root catalogue';
                                }
                                else
                                {
                                    $data1 = App\catalogue::where('id',$item['parent_id']) -> first();
                                    echo $data1['Ten'];
                                }
                                ?>

                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return verify_delete('Try to delete?') " href="{!!URL::route('list_delete', $item['id'])!!}" > Delete</a></td>


                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('list_edit', $item['id'])!!}">Edit</a></td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
@stop