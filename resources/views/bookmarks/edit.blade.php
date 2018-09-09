@extends('main')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h2>Create Bookmark</h2>
        <form action="{{ route('bookmarks2.update', $bookmark2->id) }}" method="POST" class="form-horizontal">
             {!! csrf_field() !!}
            <input type="hidden" name="_method" value="PUT">
            
            @include('partials.errors')
             <div class="form-group">
                <label class="col-sm-2 control-label">Name </label>
                <div class="col-sm-10">
                    
                    <input type="text" name="name" class="form-control" value="{{$bookmark2->name}}">
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">URL  </label>
                <div class="col-sm-10">
                    
                    <input type="text" name="url" class="form-control" value="{{$bookmark2->url}}">
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Desc </label>
                <div class="col-sm-10">
                    
                    <textarea rows="17" cols="80" name="description" class="form-control">{{ $bookmark2->description}}</textarea>
                    
                </div>
                
            </div>
            
           <a href="{{route('bookmarks2.index') }}" class="btn btn-primary pull-left" >Back</a>
           <button type="submit" class="btn btn-success pull-right">Save</button>
            
        </form>
        
    </div>
</div>
@endsection