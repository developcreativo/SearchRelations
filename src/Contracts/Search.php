<?php
/*
 * Copyright (c) 2023.  FaceIt
 * @author Kelly Salazar <developmentcreativo@gmail.com>
 */

namespace Developcreativo\Search\Contracts;

use Illuminate\Database\Eloquent\Builder;
interface Search
{
    public function apply(Builder $query, string $relation, string $search): Builder;
}
