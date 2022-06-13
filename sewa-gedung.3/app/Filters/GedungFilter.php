<?php

// TypeFilter.php

namespace App\Filters;

use App\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class TypeFilter
{
    protected $filters = [
        'type' => TypeFilter::class,
    ];
}
