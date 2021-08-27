<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<style>
    .btn-xs, .btn-group-xs>.btn {  
    padding: 8px 10px;
    }
</style>
<div class="container">
    <div class="row">

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="col-md-12">
            <h4 class="text-center">Student Data</h4>
           <div >
            <a class="btn btn-primary float-left" href="{{ 'add' }}">Add Data</a>
           </div>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Hobby</th>
                        <th>Description </th>
                        <th>Image </th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['email'] }}</td>
                                <td>{{ $item['address'] }}</td>
                                <td>{{ $item['mobile'] }}</td>
                                <td>{{ $item['gender'] }}</td>
                                <td>{{ $item['hobby'] }}</td>
                                <td>{{ $item['description'] }}</td>
                                <td><img src="{{ url('profile_photo') . '/' . $item['image'] }}" height="60px"
                                        width="60px" alt=""></td>
                                <td>
                                    {{-- <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button> --}}
                                    <a class="btn btn-primary btn-xs" href={{ 'edit/' . $item['id'] }}><span class="glyphicon glyphicon-pencil"></span></a>
                                </td>
                                <td>
                                    {{-- <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                                    </p> --}}
                                    <a class="btn btn-danger btn-xs" href={{ 'delete/' . $item['id'] }}><span class="glyphicon glyphicon-trash"></span></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

                <div class="clearfix"></div>
                {{-- <ul class="pagination pull-right">
                    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                   <li> {{$students->links()}} </li>
                    
                </ul> --}}

            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
            </div>
            <div class="modal-body">
                <form role="form" class="form-horizontal" action="add" method="POST" enctype="multipart/form-data">
                    @csrf
<div class="form-group">
    <label class="col-sm-3 control-label" for="">First Name : </label>
    <div class="col-sm-9">
        <input class="form-control" type="text" name="name" placeholder="Enter Name">
        <span style="color :red">@error('name'){{ $message }}@enderror</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="">Email : </label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="email" placeholder="Enter Email">
            <span style="color :red">@error('email'){{ $message }}@enderror</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="">Password : </label>
            <div class="col-sm-9">
                <input class="form-control" type="password" name="password" placeholder="Enter password">
                <span style="color :red">@error('password'){{ $message }}@enderror</span>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label" for="">Address : </label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="address" placeholder="Enter Address">
                    <span style="color :red">@error('address'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Mobile : </label>
                    <div class="col-sm-9">
                        <input class="form-control" type="number" name="mobile" placeholder="Enter mobile">
                        <span style="color :red">@error('mobile'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Gender</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                    </label>
                                </div>
                            </div>
                            <span style="color :red">@error('gender'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="">Hobby : </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            Cricket<input class="form-control" name="hobby[]" type="checkbox"
                                                value="cricket">
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            Playgame <input class="form-control" name="hobby[]" type="checkbox"
                                                value="playgame">
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            Movies<input class="form-control" name="hobby[]" type="checkbox" value="movies">
                                        </label>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="radio-inline">
                                            travelling<input class="form-control" type="checkbox" name="hobby[]"
                                                value="travelling">
                                        </label>
                                    </div>
                                    <span style="color :red">@error('hobby'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="">Description : </label>
                                <div class="col-sm-9">
                                    <textarea class="textar" name="description"></textarea>
                                    <span style="color :red">@error('description'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="">Image : </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="file" name="image" placeholder="Enter image">
                                        <span style="color :red">@error('image'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </form>
                            </div>
                            <div class="modal-footer ">
                                {{-- <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span
    class="glyphicon glyphicon-ok-sign"></span> Update</button> --}}
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
                        class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
            </div>
            <div class="modal-body">

                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you
                    want to delete this Record?</div>

            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success"><span
                        class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> No</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<script>
$('div.alert').delay(5000).slideUp(300);
</script>
