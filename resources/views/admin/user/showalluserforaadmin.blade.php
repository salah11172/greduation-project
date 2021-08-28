@extends('admin.adminlayout.layout')
@section('content')
    
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">phone</th>
       
        <th scope="col">action</th>


      </tr>
      @foreach ($data as $item )
      <tr>
        <th scope="row">{{$item['id']}}</th>
        <td>{{$item['name']}}</td>
        <td>{{$item['email']}}</td>
        <td>{{$item['phone']}}</td>
        <td><a class="btn btn btn-danger" href="{{route('admindeleteuser',["userid"=>$item['id']])}}">delete</a></td>
      </tr>
      @endforeach
    </thead>
    <tbody>
      
    </tbody>
  </table>
@endsection