<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organisation extends Model
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
    protected $slug;
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
        'name',
        'slug',
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
     * @return Organisation
     */
    public function setId(int $id) : Organisation
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
     * @return Organisation
     */
    public function setName(string $name) : Organisation
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug() : string
    {
        return $this->getAttribute('slug');
    }

    /**
     * @param string $slug
     *
     * @return Organisation
     */
    public function setSlug(string $slug) : Organisation
    {
        $this->setAttribute('slug', $slug);
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
     * @return \DateTime
     */
    public function getUpdatedAt() : DateTime
    {
        return $this->getAttribute('updated_at');
    }

    /**
     * @return \DateTime
     */
    public function getDeletedAt() : DateTime
    {
        return $this->getAttribute('deleted_at');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdByUser() : BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class)->using(OrganisationUser::class);
    }
}
