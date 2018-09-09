@extends('main')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h2>Create Bookmark</h2>
         <form action="{{ route('bookmarks2.store') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}
            
            @include('partials.errors')
             <div class="form-group">
                <label class="col-sm-2 control-label">Name </label>
                <div class="col-sm-10">
                    
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">URL  </label>
                <div class="col-sm-10">
                    
                 <input type="text" name="url" class="form-control" value="{{old('url')}}">
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Desc </label>
                <div class="col-sm-10">
                    
                    <textarea name="description" class="form-control" rows="16" cols="80">{{ old('description')}}</textarea>
                    
                </div>
                
            </div>
            
           <a href="{{route('bookmarks2.index') }}" class="btn btn-primary pull-left" >back</a>
           <button type="submit" class="btn btn-success pull-right">Save</button>
            
        </form>
        
    </div>
</div>
@endsection