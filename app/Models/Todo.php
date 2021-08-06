<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'updated_at'];

    public static $rules = array(
        'content' => 'required|max:20'
    );

    public function getDetail()
    {
        $txt='ID:'.$this->id.'作成日:'.$this->created_at.'更新日:'.$this->updated_at;
    }
}
