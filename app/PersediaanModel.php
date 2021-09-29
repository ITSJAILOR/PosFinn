<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersediaanModel extends Model
{
    protected $table = 'barang';
    protected $fillbale = ['nm_barang'];
    protected $hidden;
}
