<h1>This Is Home Page</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        
        {{-- <td><img src="{{$item['avatar']}}" alt=""></td> --}}
    </tr>
    @endforeach
</table>