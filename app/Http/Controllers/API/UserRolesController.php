<?php

namespace App\Http\Controllers\API;

use App\User;
use Laralord\Orion\Http\Controllers\RelationController;

class UserRolesController extends RelationController
{
    /**
     * @var string|null $model
     */
    protected static $model = User::class;

    /**
     * @var string $relation
     */
    protected static $relation = 'roles';

    /**
     * The list of pivot fields that can be set upon relation resource creation or update.
     *
     * @var bool
     */
    protected $pivotFillable = ['meta'];
}