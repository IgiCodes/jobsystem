<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
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
     * @var string
     */
    protected $description;
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
    protected $fillable = [
        'name',
        'description',
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
     * @return Job
     */
    public function setId(int $id) : Job
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
     * @return Job
     */
    public function setName(string $name) : Job
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->getAttribute('description');
    }

    /**
     * @param string $description
     *
     * @return Job
     */
    public function setDescription(string $description) : Job
    {
        $this->setAttribute('description', $description);
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
     * @return Job
     */
    public function setCreatedByUserId(int $created_by_user_id) : Job
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
     * @return Job
     */
    public function setCreatedAt(DateTime $created_at) : Job
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
     * @return Job
     */
    public function setUpdatedAt(DateTime $updated_at) : Job
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
     * @return Job
     */
    public function setDeletedAt(DateTime $deleted_at) : Job
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(JobUser::class)->withPivot('status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function statuses() : BelongsToMany
    {
        return $this->belongsToMany(Status::class)->using(JobUser::class)->withPivot('user');
    }

    public function createdByUser() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

}
