<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Judgement extends Model
{
    use SoftDeletes;
    protected $table = 'judgements';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'judgement_no',
        'type',
        'date_created',
        'court',
        'judicial_council',
        'secretary',
        'prosecutor',
        'opening',
        'happenings',
        'identification',
        'decision',
        'recipient',
        'signature',
    ];

    public static function getList()
    {
        return Judgement::orderBy('date_created', 'desc');
    }
    public function get($judgementId)
    {
        return Judgement::select(
            'judgement_no',
            'type',
            'date_created',
            'court',
            'judicial_council',
            'secretary',
            'prosecutor',
            'opening',
            'happenings',
            'identification',
            'decision',
            'recipient',
            'signature', 
            'created_at', 
            'updated_at'
        );
        where ('judgement_id', $judgementId);
    }

    public function createJudgement($data)
    {
        return Judgement::create($data);
        return Judgement::insert($data);
    }

    public function updateJudgement($judgementId, $data)
    {
        return Judgement::where('judgement_id', $judgementId)
              ->update($data);
    }

    public function deleteJudgement($judgementId)
    {
        return Judgement::destroy($judgementId);
    }

    /**
     * belongsToMany defendant
     */
    public function defendant()
    {
        return $this->belongsToMany('App\Models\Defendant', 'defendant_judgement', 'defendant_id', 'judgement_id');
    }

    /**
     * belongsTo judge
     */
    public function judge()
    {
        return $this->belongsTo('App\Models\Judge', 'judge_id', 'signature');
    }

    /**
     * hasMany participant
     */
    public function participant()
    {
        return $this->hasMany('App\Models\Participant', 'judgement_id', 'judgement_id');
    }
}
