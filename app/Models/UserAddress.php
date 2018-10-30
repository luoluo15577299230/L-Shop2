<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
    	'province',
    	'city',
    	'district',
    	'address',
    	'zip',
    	'contact_name',
    	'contact_phone',
    	'last_used_at',
    ];

    protected $dates = ['last_used_at'];

    public function user() {
    	return $this->belongsTo(User::class);
    }
    // 创建一个访问器，直接通过 $address->full_address 获取完整的地址
    public function getFullAddressAttribute() {
    	return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
