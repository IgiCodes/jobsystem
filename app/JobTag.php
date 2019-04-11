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
     * @var array
     */
    protected $fillable = [
        'job_id',
        'tag_id',
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
     * @return JobTag
     */
    public function setId(int $id) : JobTag
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
     * @return JobTag
     */
    public function setJobId(int $job_id) : JobTag
    {
        $this->setAttribute('job_id', $job_id);
        return $this;
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
     *
     * @return JobTag
     */
    public function setTagId(int $tag_id) : JobTag
    {
        $this->setAttribute('tag_id', $tag_id);
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
     * @return JobTag
     */
    public function setCreatedAt(DateTime $created_at) : JobTag
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
     * @return JobTag
     */
    public function setUpdatedAt(DateTime $updated_at) : JobTag
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
     * @return JobTag
     */
    public function setDeletedAt(DateTime $deleted_at) : JobTag
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
    public function tag() : BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
