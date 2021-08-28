<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<div class="container"> 
    
            <form role="form" class="form-horizontal" action="add" method="POST" enctype="multipart/form-data">
                <a class="btn btn-primary float-right" href="{{ route('login') }}">sign in</a><br>
                @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                <h3>Register Form</h3>
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">First Name : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="text" name="name" placeholder="Enter Name">
                    <span style="color :red">@error('name'){{$message}}@enderror</span>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Email : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="text" name="email" placeholder="Enter Email">
                    <span style="color :red">@error('email'){{$message}}@enderror</span>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Password : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="password" name="password" placeholder="Enter password">
                    <span style="color :red">@error('password'){{$message}}@enderror</span>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Address : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="text" name="address" placeholder="Enter Address">
                    <span style="color :red">@error('address'){{$message}}@enderror</span>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Mobile : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="number" name="mobile" placeholder="Enter mobile">
                    <span style="color :red">@error('mobile'){{$message}}@enderror</span>
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
                    <span style="color :red">@error('gender'){{$message}}@enderror</span>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Hobby : </label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="radio-inline">
                         Cricket<input class="form-control" name="hobby[]" type="checkbox" value="cricket"> 
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                Playgame <input class="form-control" name="hobby[]" type="checkbox" value="playgame"> 
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                Movies<input class="form-control" name="hobby[]" type="checkbox" value="movies"> 
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label class="radio-inline">
                                travelling<input class="form-control" type="checkbox" name="hobby[]" value="travelling"> 
                            </label>
                        </div>
                        <span style="color :red">@error('hobby'){{$message}}@enderror</span>
                  </div>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Description : </label>
                    <div class="col-sm-9">
                    <textarea class="textar" name="description"></textarea>
                    <span style="color :red">@error('description'){{$message}}@enderror</span>
                </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="">Image : </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file" name="image" placeholder="Enter image">
                    <span style="color :red">@error('image'){{$message}}@enderror</span>
                </div>
            </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <br>
                <a href="{{ route('login') }}">I already have an account, sign in</a>
            </form>
</div>

<style>
    body {
     background: url('https://static-communitytable.parade.com/wp-content/uploads/2014/03/rethink-target-heart-rate-number-ftr.jpg') fixed;
    background-size: cover;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    border-radius: 0.3em;
    background-color: #f2f2f2;
}

*[role="form"] h3 { 
    font-family: auto;
    font-size: 22px;
    font-weight: 600;
    color: #000000;
    margin-top: 0%;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4px;
}
.textar{
    margin-top: 0px;
    margin-bottom: 0px;
    height: 97px;
    width: 100%;
}
</style>
<script>
    $('div.alert').delay(5000).slideUp(300);
    </script>