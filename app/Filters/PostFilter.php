<?php

namespace App\Filters;

use App\Traits\HasSearchable;
use App\Traits\HasSortable;
use Illuminate\Support\Str;

class PostFilter extends QueryFilter
{
    use HasSortable, HasSearchable;

    public function take($rows)
    {
        $this->builder->take($rows);
    }

}
