<?php

namespace Database\Factories\providers;

use App\Enums\LeadSource;
use Faker\Provider\Base;

class LeadSourceProvider extends Base
{
    public function leadSource(): string
    {
        return self::randomElement(LeadSource::cases())->value;
    }

}
