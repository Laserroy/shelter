<?php

namespace App\Http\Filters;

class UserFilters extends QueryFilter
{
    public function name($keyword = null)
    {
        return $this->builder->where('name', 'like', '%'.$keyword.'%');
    }

    public function surname($keyword = null)
    {
        return $this->builder->where('surname', 'like', '%'.$keyword.'%');
    }

    public function location($keyword = null)
    {
        return $this->builder->where('location', 'like', '%'.$keyword.'%');
    }

    public function is_infected($condition = '')
    {
        if (!empty($condition)) {
            return $this->builder->where('is_infected', $condition);
        }
    }
}
