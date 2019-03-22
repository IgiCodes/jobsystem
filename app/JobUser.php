<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class JobUser extends Pivot
{
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
     * @return int
     */
    public function getId(): int
    {
        return $this->getAttribute('id');
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->setAttribute('id', $id);
    }

    /**
     * @return int
     */
    public function getJobId(): int
    {
        return $this->getAttribute('job_id');
    }

    /**
     * @param int $job_id
     */
    public function setJobId(int $job_id): void
    {
        $this->setAttribute('job_id', $job_id);
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->getAttribute('user_id');
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->setAttribute('user_id', $user_id);
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->getAttribute('status_id');
    }

    /**
     * @param int $status_id
     */
    public function setStatusId(int $status_id): void
    {
        $this->setAttribute('status_id', $status_id);
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
