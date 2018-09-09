@extends('main')

@section('content')

<div class="div-create">
<a href="{{route('bookmarks2.create')}}" class="btn btn-success pull-righ" style="width: 200px;">Create</a>
</div> 
<!--
    @foreach($bookmarks2 as $bookmark2)
    <span class="well well-lg kocka">
     <h2 class="style-thin">{{$bookmark2->name}}</h2>
        <a class="style-thin">{{$bookmark2->url}}</a>
    <a href="{{route('bookmarks2.show', $bookmark2->id)}}" class="btn btn-sm btn-info">Open</a>
            <a href="{{route('bookmarks2.edit', $bookmark2->id)}}" class="btn btn-sm btn-warning">Edit</a>
            
            <form action="{{route('bookmarks2.destroy', $bookmark2->id)}}" method="POST" style="display: inline-block">
                            {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
    </span>
     @endforeach
-->

<table class="table table-striped table-hover table-background" style="color: darkslategrey">
    <tr>
    <th>ID</th>
        <th>Name</th>  
        <th>URL</th>
        <th>Created</th>
        <th>Updated</th>
        <th style="width: 180px">Actions</th>
    </tr>
    
    @foreach($bookmarks2 as $bookmark2)
    <tr>
        <th class="style-thin">{{$bookmark2->id}}</th>
        <th class="style-thin">{{$bookmark2->name}}</th>
        <th class="style-thin"><a href="{{$bookmark2->url}}" style="color: darkslategrey">{{$bookmark2->url}}</a></th>
        <th class="style-thin">{{$bookmark2->created_at}}</th>
        <th class="style-thin">{{$bookmark2->updated_at}}</th>
        
        <th>
            <a href="{{route('bookmarks2.show', $bookmark2->id)}}" class="btn btn-sm btn-info">Open</a>
            <a href="{{route('bookmarks2.edit', $bookmark2->id)}}" class="btn btn-sm btn-warning">Edit</a>
            
            <form action="{{route('bookmarks2.destroy', $bookmark2->id)}}" method="POST" style="display: inline-block">
                            {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>
            
            


        </th>
        
        
    </tr>
    @endforeach
    
</table> 
<a href="{{route('cool')}}" class="pull-left btn btn-sm btn-info back" style="margin-top: 50px">Back</a> 

    <div class="pull-right ">
    {!!$bookmarks2->links()!!}
    </div>
    
@endsection