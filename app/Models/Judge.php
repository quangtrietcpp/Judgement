<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Judge extends Model
{
    use SoftDeletes;
    protected $table = 'judges';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'password',
        'name',
        'date_of_birth',
        'place_of_birth',
        'address',
        'phone',
        'email',
        'gender',
        'position',
    ];

    public static function getList()
    {
        return Judge::all();
    }
    public function get($judgeId)
    {
        return Judge::select(
            'name',
            'date_of_birth',
            'place_of_birth',
            'address',
            'phone',
            'email',
            'gender',
            'position',
            'created_at', 
            'updated_at'
        );
        where ('judge_id', $judgeId);
    }

    public function createJudge($data)
    {
        return Judge::create($data);
        return Judge::insert($data);
    }

    public function updateJudge($judgeId, $data)
    {
        return Judge::where('judge_id', $judgeId)
              ->update($data);
    }

    public function deleteJudge($judgeId)
    {
        return Judge::destroy($judgeId);
    }

    /**
     * hasMany judgement
     */
    public function judgement()
    {
        return $this->hasMany('App\Models\Judgement', 'signature', 'judge_id');
    }

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_OTHER = 2;

    public static $genders = [
        self::GENDER_MALE => 'Nam',
        self::GENDER_FEMALE => 'Nữ',
        self::GENDER_OTHER => 'Khác',
    ];


}
