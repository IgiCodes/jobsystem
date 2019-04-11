<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagGroup extends Model
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
     * @return TagGroup
     */
    public function setId(int $id) : TagGroup
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
     * @return TagGroup
     */
    public function setName(string $name) : TagGroup
    {
        $this->setAttribute('name', $name);
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
     * @return TagGroup
     */
    public function setCreatedAt(DateTime $created_at) : TagGroup
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
     * @return TagGroup
     */
    public function setUpdatedAt(DateTime $updated_at) : TagGroup
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
     * @return TagGroup
     */
    public function setDeletedAt(DateTime $deleted_at) : TagGroup
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags() : HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
