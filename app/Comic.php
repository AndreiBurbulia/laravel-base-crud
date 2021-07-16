<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //serve per dirgli quale colonne della tabella posso andare a modificare
    protected $fillable = ['title','description','series','price','poster','on_sale_date'];
}