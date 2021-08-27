<h1>List Data</h1>
@if ($message = Session::get('success'))
<div>
	<strong style="color:green">{{ $message }}</strong>
</div>
@endif
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    @foreach ($members as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['address']}}</td>
        <td><a href={{"delete/".$item['id']}}>Delete</a>
            <a href={{"edit/".$item['id']}}>Edit</a>
        </td>
        
        {{-- <td><img src="{{$item['avatar']}}" alt=""></td> --}}
    </tr>
    @endforeach
</table>
<span>
    {{$members->links()}}
</span>
<style>
.w-5{
    display: none;
}
</style>