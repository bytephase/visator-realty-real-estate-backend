<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Lead extends Model
{
    use HasFactory;

    public const ID = 'id';

    public const NAME = 'name';

    public const CONTACT_PERSON_NAME = 'contact_person_name';

    public const EMAIL = 'email';

    public const ASSIGNED_USER_ID = 'assigned_user_id';

    public const REFERRED_BY_USER_ID = 'referred_by_user_id';

    public const ROLE_ID = 'role_id';

    public const LEAD_SOURCE = 'lead_source';

    public const STATUS_ID = 'status_id';

    public const CREATED_USER_ID = 'created_user_id';

    public const MOBILE_NUMBER = 'mobile_number';

    public const PHONE_NUMBER = 'phone_number';

    public const NEXT_FOLLOW_UP = 'next_follow_up';

    public const COMMENT = 'comment';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $casts = [
        self::NEXT_FOLLOW_UP => 'datetime',
        self::CREATED_AT => 'datetime',
        self::UPDATED_AT => 'datetime',
        self::ID => 'int',
        self::ASSIGNED_USER_ID => 'int',
        self::REFERRED_BY_USER_ID => 'int',
        self::ROLE_ID => 'int',
        self::CREATED_USER_ID => 'int',
        self::LEAD_SOURCE => 'string',
        self::STATUS_ID => 'int',
    ];

    protected $fillable = [
        self::NAME,
        self::EMAIL,
        self::ASSIGNED_USER_ID,
        self::ROLE_ID,
        self::LEAD_SOURCE,
        self::STATUS_ID,
        self::MOBILE_NUMBER,
        self::PHONE_NUMBER,
        self::CREATED_USER_ID,
        self::NEXT_FOLLOW_UP,
        self::COMMENT,
    ];


//    public function address(): MorphOne
//    {
//        return $this->morphOne(Address::class, 'addressable');
//    }

}
