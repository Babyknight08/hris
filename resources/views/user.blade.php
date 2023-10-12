<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        @include('includes.sidebar')

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
      
        @include('includes.navbar')

        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Users</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Users</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>User Table</h5>
                        <div class="ibox-tools">
                            <button class="btn btn-primary btn-sm userAdd">+User</button>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Address</th>
                        <th>Email Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
               
  
                    </tbody>
        
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>

        {{-- insert modal --}}
        <div id="modalAdd" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Add User</h3>

                                <form role="form" method="post" id="formAdd">
                                    @csrf
                                    <div class="form-group"><label>Username</label> <input type="text" placeholder="Username" class="form-control" id="username" name="username"></div>
                                    <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control" id="password" name="password"></div>
                                    <div class="form-group"><label>First Name</label> <input type="text" placeholder="First Name" class="form-control" id="first_name" name="first_name"></div>
                                    <div class="form-group"><label>Last Name</label> <input type="text" placeholder="Last Name" class="form-control" id="last_name" name="last_name"></div>
                                    <div class="form-group"><label>Address</label> <input type="text" placeholder="Address" class="form-control" id="address" name="address"></div>
                                    <div class="form-group"><label>Email</label> <input type="text" placeholder="Email" class="form-control" id="email_address" name="email_address"></div>
                                    <div>
                                        <button class="btn btn-sm btn-secondary float-right m-t-n-xs" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                        <button class="btn btn-sm btn-primary mr-2 float-right m-t-n-xs btnSave" type="submit"><strong>Submit</strong></button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        {{-- insert modal --}}
        <div id="modalView" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md"><h3 class="m-t-none m-b">Add User</h3>

                                <form role="form" method="post" id="formView">
                                    @csrf
                                    <div class="form-group"><label>Username</label> <input type="text" placeholder="Username" class="form-control" id="viewusername" name="viewusername" readonly></div>
                                    <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control" id="viewpassword" name="viewpassword" readonly></div>
                                    <div class="form-group"><label>First Name</label> <input type="text" placeholder="First Name" class="form-control" id="viewfirst_name" name="viewfirst_name" readonly></div>
                                    <div class="form-group"><label>Last Name</label> <input type="text" placeholder="Last Name" class="form-control" id="viewlast_name" name="viewlast_name" readonly></div>
                                    <div class="form-group"><label>Address</label> <input type="text" placeholder="Address" class="form-control" id="viewaddress" name="viewaddress" readonly></div>
                                    <div class="form-group"><label>Email</label> <input type="text" placeholder="Email" class="form-control" id="viewemail_address" name="viewemail_address" readonly></div>
                                    <div>
                                        <button class="btn btn-sm btn-secondary float-right m-t-n-xs" type="button" data-dismiss="modal"><strong>Close</strong></button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
   
        @include('includes.footer')

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
           var table = $('.dataTables-example').DataTable({
                ajax:{
                    type: "get",
                    url: "{{ route('user.table') }}",
                    data: "data",
                    dataType: "json",
                    dataSrc: 'data', 
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
               },
                },
                order: [[0, 'desc']],
                columns: 
                [
                    { data: "id"},
                    { data: "username" },
                    { data: "password" },
                    { data: "first_name" },
                    { data: "last_name" },
                    { data: "address" },
                    { data: "email_address" },
                    {
                        data: "id",
                        render: function (data, type, row, meta) {
                        
                            return `
                                <button class="btn btn-success btn-sm viewUser" id="${data}">
                                    View
                                </button>
                                <button class="btn btn-primary btn-sm updateUser" id="${data}">
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm deleteUser" id="${data}">
                                    Delete
                                </button>`;
                        
                        }
                    }],
                    pageLength: 25,
                    responsive: true,
                    dom: '<"html5buttons"B>lTfgitp',
                    buttons: [
                        { extend: 'copy'},
                        {extend: 'csv'},
                        {extend: 'excel', title: 'ExampleFile'},
                        {extend: 'pdf', title: 'ExampleFile'},

                        {extend: 'print',
                        customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

                                $(win.document.body).find('table')
                                        .addClass('compact')
                                        .css('font-size', 'inherit');
                        }
                        }
                    ],
        


            });

            $('.userAdd').click(function (e) { 
                e.preventDefault();
                $('#modalAdd').modal('show')
            });

            $('#formAdd').submit(function (e) { 
                e.preventDefault();
                $('#modalAdd').modal('hide')
                $.ajax({
                    type: "post",
                    url: "{{ route('user.store') }}",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function (response) {
                        
                    }
                });
            });

            $(document).on('click', '.viewUser', function (e) { 
                e.preventDefault();
                id = $(this).attr('id');
                $('#modalView').modal('show')
                $.ajax({
                    type: "get",
                    url: "{{ route('user.view') }}",
                    data: {id},
                    dataType: "json",
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    success: function (response) {
                        $('#viewusername').val(response.username)
                        $('#viewpassword').val(response.password)
                        $('#viewfirst_name').val(response.first_name)
                        $('#viewlast_name').val(response.last_name)
                        $('#viewaddress').val(response.address)
                        $('#viewemail_address').val(response.email_address)
                        
                    }
                });

            });
            
            
            $(document).on('click', '.updateUser', function (e) { 
                e.preventDefault();
                alert(id);
            });
            
            $(document).on('click', '.deleteUser', function (e) { 
                e.preventDefault();
                id = $(this).attr('id');
                alert(id);
            });

        });

    </script>

</body>

</html>
