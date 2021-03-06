<?php

namespace App;

use App\Scopes\ScopePerson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }

    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'mail' => 'email',
        'age' => 'integer|min:0|max:150'
    );

    public function boards()
    {
        return $this->hasMany('App\Board');
    }
}
