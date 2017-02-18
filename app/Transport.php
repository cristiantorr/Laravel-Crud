<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'transport';

    protected $fillable	= ['vehicle', 'choiceDay', 'price'];
}
