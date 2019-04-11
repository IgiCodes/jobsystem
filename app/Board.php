<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
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
     * @var integer
     */
    protected $created_by_user_id;
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
        'created_by_user_id',
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
     * @return Board
     */
    public function setId(int $id) : Board
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->getAttribute('name');
    }

    /**
     * @param string $name
     *
     * @return Board
     */
    public function setName(string $name) : Board
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return int
     */
    public function getCreatedByUserId() : int
    {
        return $this->getAttribute('created_by_user_id');
    }

    /**
     * @param int $created_by_user_id
     *
     * @return Board
     */
    public function setCreatedByUserId(int $created_by_user_id) : Board
    {
        $this->setAttribute('created_by_user_id', $created_by_user_id);
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
     * @return Board
     */
    public function setCreatedAt(DateTime $created_at) : Board
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
     * @return Board
     */
    public function setUpdatedAt(DateTime $updated_at) : Board
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
     * @return Board
     */
    public function setDeletedAt(DateTime $deleted_at) : Board
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }


    public function creator() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organisation() : BelongsTo
    {
        return $this->belongsTo(Organisation::class);
    }
}
