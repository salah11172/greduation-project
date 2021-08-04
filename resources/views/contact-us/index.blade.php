@extends('layout.layout')
@section('content')

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="text-center">
       
         <a href="{{route('comment.create')}}" class="mt-4 btn btn-success">Create Comment</a>
        </div>
        <table class="table mt-4">
            <thead>

           
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Comment</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($commentCollection as $comment)
                <tr>
                <td>{{$comment->id}}</td>
                  <td>{{$comment->name}}</td>
                  <td>{{$comment->email}}</td>
                  <td>{{$comment->phone}}</td>
                  <td>{{$comment->comment}}</td>

                 
                </tr>
        @endforeach
            </tbody>
          </table>


          <span style="margin-bottom: 300px !important;">
          {{$commentCollection->Links()}}
          </span>

          <style>
          .w-5{
            margin-bottom: 300px !important;
            display: none;
          }
          </style>



@endsection