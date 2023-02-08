<?php namespace Shohrux\Yangiliklar\Models;

use Model;

/**
 * Model
 */
class Yangilik extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohrux_yangiliklar_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
