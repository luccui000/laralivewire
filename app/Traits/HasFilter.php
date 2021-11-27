<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, \App\Filters\QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
