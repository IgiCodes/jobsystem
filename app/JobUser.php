<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobUser extends Pivot
{
    use SoftDeletes;

    /**
     * @var integer
     */
    protected $id;
    /**
     * @var integer
     */
    protected $job_id;
    /**
     * @var integer
     */
    protected $user_id;
    /**
     * @var integer
     */
    protected $status_id;
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
        'job_id',
        'user_id',
        'status_id',
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
     * @return JobUser
     */
    public function setId(int $id) : JobUser
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    /**
     * @return int
     */
    public function getJobId() : int
    {
        return $this->getAttribute('job_id');
    }

    /**
     * @param int $job_id
     *
     * @return JobUser
     */
    public function setJobId(int $job_id) : JobUser
    {
        $this->setAttribute('job_id', $job_id);
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
     * @return JobUser
     */
    public function setUserId(int $user_id) : JobUser
    {
        $this->setAttribute('user_id', $user_id);
        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId() : int
    {
        return $this->getAttribute('status_id');
    }

    /**
     * @param int $status_id
     *
     * @return JobUser
     */
    public function setStatusId(int $status_id) : JobUser
    {
        $this->setAttribute('status_id', $status_id);
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
     * @return JobUser
     */
    public function setCreatedAt(DateTime $created_at) : JobUser
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
     * @return JobUser
     */
    public function setUpdatedAt(DateTime $updated_at) : JobUser
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
     * @return JobUser
     */
    public function setDeletedAt(DateTime $deleted_at) : JobUser
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job() : BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
