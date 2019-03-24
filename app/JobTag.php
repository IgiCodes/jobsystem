<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobTag extends Pivot
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
    protected $tag_id;
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job() : BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag() : BelongsTo
    {
        return $this->belongsTo(Tag::class);
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
     */
    public function setId(int $id) : void
    {
        $this->setAttribute('id', $id);
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
     */
    public function setJobId(int $job_id) : void
    {
        $this->setAttribute('job_id', $job_id);
    }

    /**
     * @return int
     */
    public function getTagId() : int
    {
        return $this->getAttribute('tag_id');
    }

    /**
     * @param int $tag_id
     */
    public function setTagId(int $tag_id) : void
    {
        $this->setAttribute('tag_id', $tag_id);
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
}
