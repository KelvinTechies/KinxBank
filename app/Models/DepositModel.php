<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositModel extends Model
{
    use HasFactory;


    public function bankinfoModel()
    {
       return $this->belongsTo(bankinfoModel::class);
    }

    public function adminModel()
    {
       return $this->belongsTo(adminModel::class);
    }


    protected $fillable=[
        'User_id',
        'Amount',
        'Email',
        'UserName',
        'UserAccount',
        'SentTo',
        'Status',
        'Method',
       'TrasactionId',
        'Time',
        'Date'
    ];
}
