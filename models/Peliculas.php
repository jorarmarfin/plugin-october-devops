<?php namespace LuisMayta\Devops\Models;

use Model;

/**
 * Model
 */
class Peliculas extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'luismayta_devops_peliculas';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
