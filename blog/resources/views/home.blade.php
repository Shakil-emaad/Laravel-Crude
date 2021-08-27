<h1>User Login</h1>

<!-- @if($errors)
    @foreach($errors->all() as $err)
        <li>{{$err}} </li>
    @endforeach
@endif -->
<form action="main" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter Username"><br>
    <span style="color :red">@error('username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="userpassword" placeholder="Enter password"><br>
    <span style="color :red">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit">login</button>
</form>