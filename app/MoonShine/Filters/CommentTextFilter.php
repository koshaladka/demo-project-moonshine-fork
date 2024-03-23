<?php

namespace App\MoonShine\Filters;

use Illuminate\Contracts\Database\Query\Builder;
use MoonShine\Filters\TextFilter;

class CommentTextFilter extends TextFilter
{
    public function getQuery(Builder $query): Builder
    {
        $value = $this->requestValue();

        if($value === false) {
            return $query;
        }

        return $query->whereHas('comments', function (Builder $q) use($value) {
            $q->where('text', 'LIKE', "%$value%");
        });
    }

}
