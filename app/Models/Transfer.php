<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function sender()
    {
        $this->belongsTo(User::class, 'sender_id');
    }

    public function senderAccount()
    {
        $this->belongsTo(Account::class, 'sender_account_id');
    }

    public function receiver()
    {
        $this->belongsTo(User::class, 'recipient_id');
    }

    public function recipientAccount()
    {
        $this->belongsTo(Account::class, 'recipient_account_id');
    }
}
