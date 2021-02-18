<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class messages_list extends Model {
	protected $fillable = [
        'id', 'userId','toId','lastMessage','lastMessageDate','messageStatus'
    ];
}
