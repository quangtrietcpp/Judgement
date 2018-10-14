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

    const GENDER_MALE = 0;
    const GENDER_FEMALE = 1;
    const GENDER_OTHERS = 2;

    public static $genders = [
        self::GENDER_MALE => 'Nam',
        self::GENDER_FEMALE => 'Nữ',
        self::GENDER_OTHERS => 'Khác',
    ];

    const ROLE_REPRESENTOR_DEFENDANT = 0;
    const ROLE_LAWYER_DEFENDANT = 1;
    const ROLE_VICTIM = 2;
    const ROLE_REPRESENTOR_VICTIM = 3;
    const ROLE_LAWYER_VICTIM = 4;
    const ROLE_CIVIL_PLAINTIFF = 5;
    const ROLE_REPRESENTATOR_CIVIL_PLAINTIFF = 6;
    const ROLE_LAWYER_CIVIL_PLAINTIFF = 7;
    const ROLE_CIVIL_DEFENDANT = 8;
    const ROLE_REPRESENTATOR_CIVIL_DEFENDANT = 9;
    const ROLE_LAWYER_CIVIL_DEFENDANT = 10;
    const ROLE_SUBORNER = 11;
    const ROLE_RELATED_PERSON = 12;
    const ROLE_OTHERS = 13;

    public static $roles = [
        self::ROLE_REPRESENTOR_DEFENDANT => 'Đại diện hợp pháp của bị cáo',
        self::ROLE_LAWYER_DEFENDANT => 'Người bào chữa cho bị cáo',
        self::ROLE_VICTIM => 'Bị hại',
        self::ROLE_REPRESENTOR_VICTIM => 'Đại diện hợp pháp của bị hại',
        self::ROLE_LAWYER_VICTIM => 'Người bào chữa cho bị hại',
        self::ROLE_CIVIL_PLAINTIFF => 'Nguyên đơn dân sự',
        self::ROLE_REPRESENTATOR_CIVIL_PLAINTIFF => 'Đại diện hợp pháp của nguyên đơn dân sự',
        self::ROLE_LAWYER_CIVIL_PLAINTIFF => 'Người bào chữa cho nguyên đơn dân sự',
        self::ROLE_CIVIL_DEFENDANT => 'Bị đơn dân sự',
        self::ROLE_REPRESENTATOR_CIVIL_DEFENDANT => 'Đại diện hợp pháp của bị đơn dân sự',
        self::ROLE_LAWYER_CIVIL_DEFENDANT => 'Người bào chữa cho bị đơn dân sự',
        self::ROLE_SUBORNER => 'Người làm chứng',
        self::ROLE_RELATED_PERSON => 'Người có quyền lợi, nghĩa vụ liên quan',
        self::GENDER_OTHERS => 'Người tham gia tố tụng khác',
    ];
}
