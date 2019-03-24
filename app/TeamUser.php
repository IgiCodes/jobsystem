<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamUser extends Pivot
{
    use SoftDeletes;

    /**
     * @var integer
     */
    protected $id;
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
