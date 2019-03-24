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
     * @return string
     */
    public function getName() : string
    {
        return $this->getAttribute('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name) : void
    {
        $this->setAttribute('name', $name);
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
     */
    public function setCreatedByUserId(int $created_by_user_id) : void
    {
        $this->setAttribute('created_by_user_id', $created_by_user_id);
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
