<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const ID = 'id';

    public const NAME = 'name';

    public const CREATED_AT = 'created_at';

    public const UPDATED_AT = 'updated_at';

    protected $perPage = 20;

    public const USER_TYPE_EMPLOYEE = 1;

    public const USER_TYPE_CUSTOMER = 2;

    public const USER_TYPE_PART_SUPPLIER = 3;

    public const USER_TYPE_OUTSOURCE_VENDOR = 4;

    protected $casts = [
        self::CREATED_AT => 'datetime', self::UPDATED_AT => 'datetime', self::ID => 'int',
    ];

    protected $fillable = [
        self::NAME,
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}

