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
     * @var array
     */
    protected $fillable = [
        'board_id',
        'team_id',
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
    public function getId() : int
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     *
     * @return BoardTeam
     */
    public function setId(int $id) : BoardTeam
    {
        $this->setAttribute('id', $id);
        return $this;
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
     *
     * @return BoardTeam
     */
    public function setBoardId(int $board_id) : BoardTeam
    {
        $this->setAttribute('board_id', $board_id);
        return $this;
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
     *
     * @return BoardTeam
     */
    public function setTeamId(int $team_id) : BoardTeam
    {
        $this->setAttribute('team_id', $team_id);
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
     * @return BoardTeam
     */
    public function setCreatedAt(DateTime $created_at) : BoardTeam
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
     * @return BoardTeam
     */
    public function setUpdatedAt(DateTime $updated_at) : BoardTeam
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
     * @return BoardTeam
     */
    public function setDeletedAt(DateTime $deleted_at) : BoardTeam
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
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
