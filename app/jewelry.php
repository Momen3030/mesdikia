<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jewelry extends Model
{
    protected $fillable = ['type','material','gender','weight','price','ownerID','new','Auction_type','location','Guarant','image','status'];
}
