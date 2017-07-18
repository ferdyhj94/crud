<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
    protected $table='role';

   	protected $fillable = [
   	'id_role','role','created_at','updated_at'];

   	
          public function user()
    {
        return $this->hasMany(User::class);
    }
}
