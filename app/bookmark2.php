<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class bookmark2 extends Model
{
    protected $table = 'bookmarks';
    
    use SoftDeletes;
    
    protected $fillable = ['name','url','description', 'user_id'];
    
    public function user()
            {
        return $this->belongsTo(User::class);
            }
}
