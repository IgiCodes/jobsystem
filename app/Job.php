<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
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

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->getAttribute('created_at');
    }

    /**
     * @param \DateTime $created_at
     */
    public function setCreatedAt(DateTime $created_at): void
    {
        $this->setAttribute('created_at', $created_at);
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->getAttribute('updated_at');
    }

    /**
     * @param \DateTime $updated_at
     */
    public function setUpdatedAt(DateTime $updated_at): void
    {
        $this->setAttribute('updated_at', $updated_at);
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt(): DateTime
    {
        return $this->getAttribute('deleted_at');
    }

    /**
     * @param \DateTime $deleted_at
     */
    public function setDeletedAt(DateTime $deleted_at): void
    {
        $this->setAttribute('deleted_at', $deleted_at);
    }

    /**
     * @return int
     */
    public function getCreatedByUserId(): int
    {
        return $this->getAttribute('created_by_user_id');
    }

    /**
     * @param int $created_by_user_id
     */
    public function setCreatedByUserId(int $created_by_user_id): void
    {
        $this->setAttribute('created_by_user_id', $created_by_user_id);
    }

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
     * @return string
     */
    public function getName(): string
    {
        return $this->getAttribute('name');
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->setAttribute('name', $name);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getAttribute('description');
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->setAttribute('description', $description);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(JobUser::class)->withPivot('status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function statuses(): BelongsToMany
    {
        return $this->belongsToMany(Status::class)->using(JobUser::class)->withPivot('user');
    }

}
