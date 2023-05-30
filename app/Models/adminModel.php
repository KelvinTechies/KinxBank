<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminModel extends Model
{
    use HasFactory;


    protected $fillable=[
        'FullName',
        'Email',
        'UserName',
        'Password',
        'Account_Number',
        'otp',
        'UserType',
        'zipcode',
        'Country',
        'HomeAddress',
        'PhoneNumber'
    ];

    public function DepositModels()
    {
       return $this->hasMany(DepositModel::class);
    }

    public function userDepositModels()
    {
       return $this->hasMany(userDepositModel::class);
    }
}
