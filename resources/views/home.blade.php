@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    You have this bookmarks:
                    <un>
                    @foreach($bookmarks2 as $book)
                    <li>{!! $book->name.'<br>'!!}</li>
                    @endforeach
                    </un>
                </div>
                <a href="{{route('bookmarks2.index')}}">Moje stranice</a>
            </div>
        </div>
    </div>
</div>
@endsection
