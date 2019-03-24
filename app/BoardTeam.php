<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardTeam extends Pivot
{
    use SoftDeletes;

    /**
     * @var integer
     */
    protected $id;
    /**
     * @var integer
     */
    protected $board_id;
    /**
     * @var integer
     */
    protected $team_id;
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
     * @return int
     */
    public function getId() : int
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : void
    {
        $this->setAttribute('id', $id);
    }

    /**
     * @return int
     */
    public function getBoardId() : int
    {
        return $this->getAttribute('board_id');
    }

    /**
     * @param int $board_id
     */
    public function setBoardId(int $board_id) : void
    {
        $this->setAttribute('board_id', $board_id);
    }

    /**
     * @return int
     */
    public function getTeamId() : int
    {
        return $this->getAttribute('team_id');
    }

    /**
     * @param int $team_id
     */
    public function setTeamId(int $team_id) : void
    {
        $this->setAttribute('team_id', $team_id);
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
     */
    public function setCreatedAt(DateTime $created_at) : void
    {
        $this->setAttribute('created_at', $created_at);
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
     */
    public function setUpdatedAt(DateTime $updated_at) : void
    {
        $this->setAttribute('updated_at', $updated_at);
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
     */
    public function setDeletedAt(DateTime $deleted_at) : void
    {
        $this->setAttribute('deleted_at', $deleted_at);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function board() : BelongsTo
    {
        return $this->belongsTo(Board::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team() : BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
