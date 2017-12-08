@extends('news.master')
    @section('content')
                                <ul style="list-style: none; ">
                                 <li>
                                    <a href="news_add" ;">Add</a>
                                </li>
                                </ul>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>TieuDe</th>
                                <th>TomTat</th>
                                <th>NoiBat</th>
                                <th>Delete</th>
                                <th><a href="news_edit" ;">Edit</a></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $stt =1; ?>
                            @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                                
                                <td>{!! $item['id']!!}</td>
                                <td>{!! $item['TieuDe']!!} 
                                    <br>
                                    <image src="public/image/{!! $item['Hinh']!!}" height="50px" width="50px" />

                                </td>
                                <td>{!! $item['TomTat']!!}</td>
                                <td>
                                    <?php
                                    if($item['NoiBat'] == 0)
                                    {
                                        echo "None";
                                    }
                                    else
                                    {
                                      echo "Yes"; 
                                    }
                                    ?>
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick=" return verify_delete('Try to delete news?') " href="{!!URL::route('news_delete', $item['id'])!!}" > Delete</a></td>


                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!!URL::route('news_edit', $item['id'])!!}">Edit</a></td>
                                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
@stop