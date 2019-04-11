<?php

namespace App;

use DateTime;
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
     * @var integer
     */
    protected $team_id;
    /**
     * @var integer
     */
    protected $user_id;
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
    /**
     * @var array
     */
    protected $fillable = [
        'team_id',
        'user_id',
    ];
    /**
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    /**
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->getAttribute('team_id');
    }

    /**
     * @param int $team_id
     *
     * @return TeamUser
     */
    public function setTeamId(int $team_id) : TeamUser
    {
        $this->setAttribute('team_id', $team_id);
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->getAttribute('user_id');
    }

    /**
     * @param int $user_id
     *
     * @return TeamUser
     */
    public function setUserId(int $user_id) : TeamUser
    {
        $this->setAttribute('user_id', $user_id);
        return $this;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     *
     * @return TeamUser
     */
    public function setId(int $id) : TeamUser
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt() : DateTime
    {
        return $this->getAttribute('created_at');
    }

    /**
     * @param \DateTime $created_at
     *
     * @return TeamUser
     */
    public function setCreatedAt(DateTime $created_at) : TeamUser
    {
        $this->setAttribute('created_at', $created_at);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt() : DateTime
    {
        return $this->getAttribute('updated_at');
    }

    /**
     * @param \DateTime $updated_at
     *
     * @return TeamUser
     */
    public function setUpdatedAt(DateTime $updated_at) : TeamUser
    {
        $this->setAttribute('updated_at', $updated_at);
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt() : DateTime
    {
        return $this->getAttribute('deleted_at');
    }

    /**
     * @param \DateTime $deleted_at
     *
     * @return TeamUser
     */
    public function setDeletedAt(DateTime $deleted_at) : TeamUser
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }
}
