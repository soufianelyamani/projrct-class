<?php

namespace App\Scope;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TestScope implements Scope {

    public function apply(Builder $builder, Model $model)
    {
        $builder->orderBy('updated_at', 'desc');
    }

};
