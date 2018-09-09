@extends('main')

@section('content')

<div class="contanier" style="margin-bottom: 35px">
<h2>{{$bookmark2->name}}</h2>
</div>
<div class="row" style="color: black;">
    <div class="col-md-4 col-md-offset-4">
       <!-- <h2>ID: {{ $bookmark2->id }}</h2> -->
        
        <form action="" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Ime </label>
                <div class="col-sm-10">
                    
                    <p class="form-control-static">{{ $bookmark2->name }}</p>
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">URL  </label>
                <div class="col-sm-10">
                    
                    <a href="{{$bookmark2->url }}" class="form-control-static" style="color: black;">{{$bookmark2->url }}</a>
                    
                </div>
                
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Opis </label>
                <div class="col-sm-10">
                    
                    <div class="form-control-static" style="color: black;"><textarea rows="17" cols="80">{{ $bookmark2->description }}</textarea></div>
                    
                </div>
                
            </div>
            
            <span>
            
            <a href="{{route('bookmarks2.index') }}" class="btn btn-primary pomeren">back</a>
            </span>
        </form>
        
        
    </div>
    
</div>
@endsection

