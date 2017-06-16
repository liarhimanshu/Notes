@extends('layouts.base')
@section('title')
Notes
@endsection
@section('content')

 <div class="container">
                <h1 class="pull-xs-left">
                    Notes{{$notebook->id}}
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('notes.createNote',$notebook->id)}}" role="button">
                        New Note +
                    </a>
                </div>
                <div class="clearfix">
                </div>

                @foreach($notes as $note)
                <div class="list-group notes-group">
                     
                    <!--note1 -->
                    <div class="card card-block">
                        <a href="{{route('notes.show',$note->id)}}">
                            <h4 class="card-title">
                               {{$note->title}}
                            </h4>
                        </a>
                        <p class="card-text">
                            {{$note->body}}
                        </p>
                        <a class="btn btn-sm btn-info pull-xs-left" href="{{route('notes.edit',$note->id)}}">
                            Edit
                        </a>
                        <form action="{{route('notes.destroy',$note->id)}}" class="pull-xs-right" method="POST">
                        {{csrf_field() }}
                        {{method_field('DELETE')}}

                        <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            
                        </form>
                       
                    </div>
                     @endforeach
              </div>
@endsection