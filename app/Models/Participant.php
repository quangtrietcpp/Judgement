<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use SoftDeletes;
    protected $table = 'participants';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'judgement_id',
        'name',
        'details',
        'role',
    ];

    public static function getList()
    {
        return Participant::all();
    }
    public function get($participantId)
    {
        return Judge::select(
            'judgement_id',
            'name',
            'details',
            'role',
            'created_at', 
            'updated_at'
        );
        where ('id', $participantId);
    }

    public function createParticipant($data)
    {
        return Participant::create($data);
        return Participant::insert($data);
    }

    public function updateParticipant($participantId, $data)
    {
        return Participant::where('id', $participantId)
              ->update($data);
    }

    public function deleteParticipant($participantId)
    {
        return Participant::destroy($participantId);
    }

    /**
     * belongsTo judgement
     */
    public function judgement()
    {
        return $this->belongsTo('App\Models\Judgement', 'judgement_id', 'judgement_id');
    }
}
