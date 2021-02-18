<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class vacation extends Model {
	protected $fillable = [
        'id', 'userid','vacDate',
        'acYear','role','acceptedVacation'

    ];
}
