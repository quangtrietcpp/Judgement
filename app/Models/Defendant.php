<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Defendant extends Model
{
    use SoftDeletes;
    protected $table = 'defendants';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'judgement_id',
        'crime',
        'date_of_birth',
        'occupation',
        'address',
        'study_level',
        'ethnics',
        'religion',
        'previous_conviction',
        'antecedent',
        'captured_on',
        'present',
    ];

    public static function getList()
    {
        return Defendant::all();
    }
    public function get($defendantId)
    {
        return Defendant::select(
            'judgement_id',
            'crime',
            'date_of_birth',
            'occupation',
            'address',
            'study_level',
            'ethnics',
            'religion',
            'previous_conviction',
            'antecedent',
            'captured_on',
            'present',
            'created_at', 
            'updated_at'
        );
        where ('defendant_id', $defendantId);
    }

    public function createDefendant($data)
    {
        return Defendant::create($data);
        return Defendant::insert($data);
    }

    public function updateDefendant($defendantId, $data)
    {
        return Judge::where('defendant_id', $defendantId)
              ->update($data);
    }

    public function deleteDefendant($defendantId)
    {
        return Judge::destroy($defendantId);
    }

    /**
     * belongsToMany judgement
     */
    public function judgement()
    {
        return $this->belongsToMany('App\Models\Judgement', 'defendant_judgement', 'judgement_id', 'defendant_id');
    }
}
