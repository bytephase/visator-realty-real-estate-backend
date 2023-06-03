<?php

namespace Database\Factories\providers;

use App\Enums\LeadStatus;
use Faker\Provider\Base;

class LeadStatusProvider extends Base
{
    public function leadStatus(): string
    {
        return self::randomElement(LeadStatus::cases())->value;
    }

}
