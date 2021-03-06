<?php namespace Winter\Test\Models;

use Winter\Storm\Database\Pivot;

/**
 * User-Role Pivot Model
 */
class UserRolePivot extends Pivot
{
    use \Winter\Storm\Database\Traits\Validation;

    /**
     * @var array Rules
     */
    public $rules = [
        'clearance_level' => 'required|min:3',
    ];
}
