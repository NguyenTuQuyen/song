@extends('user.master')
    @section('content')
                                <ul style="list-style: none; ">
                                 <li>
                                    <a href="user_add" ;">Add</a>
                                </li>
                                </ul>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>name</th>
                                <th>password</th>
                                <th>email</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                               
                                <td>{!! $item['id'] !!}</td>
                                <td>{!! $item['name'] !!}</td>
                                <td>{!! $item['password'] !!}</td>
                                <td>{!! $item['email'] !!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="user_edit"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="user_edit">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
</body>

</html>
@stop