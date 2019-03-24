<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagGroup extends Model
{
    use SoftDeletes;

    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var \DateTime
     */
    protected $created_at;
    /**
     * @var \DateTime
     */
    protected $updated_at;
    /**
     * @var \DateTime
     */
    protected $deleted_at;
}
