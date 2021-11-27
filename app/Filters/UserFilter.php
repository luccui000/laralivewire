<?php

namespace App\Filters;

use App\Traits\HasSearchable;
use App\Traits\HasSortable;

class UserFilter extends QueryFilter
{
    use HasSortable, HasSearchable;

    public function verified()
    {
        return $this->builder->whereNotNull('email_verified_at');
    }
    public function unverified()
    {
        return $this->builder->whereNull('email_verified_at');
    }
    public function take($rows = 10)
    {
        return $this->builder->take($rows);
    }
    public function posts()
    {
        return $this->builder->with('posts')->withCount('posts');
    }
}
