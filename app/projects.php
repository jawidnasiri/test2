<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
  protected $table = 'projects';
  protected $primaryKey = 'id';
  protected $fillable = ['title','description'];

  public function get($id)
  {
    $title = DB::table('projects')->where('title', $id);
    return ($title->title);
  }
}
