<?php
namespace App\Filters;

class LessonFilter extends QueryFilter
{
    public function popular($orderBy = 'desc')
    {
        return $this->builder->orderBy('views', $orderBy);
    }

    public function level($query)
    {
        return $this->builder->where('level', $query);
    }

    public function take($query = 1)
    {
        return $this->builder->take($query);
    }
}
