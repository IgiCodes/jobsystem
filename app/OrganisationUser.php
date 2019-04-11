<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OrganisationUser extends Pivot
{
    /**
     * @var integer
     */
    protected $id;
    /**
     * @var integer
     */
    protected $organisation_id;
    /**
     * @var integer
     */
    protected $user_id;
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
        'organisation_id',
        'user_id',
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
     * @return OrganisationUser
     */
    public function setId(int $id) : OrganisationUser
    {
        $this->setAttribute('id', $id);
        return $this;
    }

    /**
     * @return int
     */
    public function getOrganisationId() : int
    {
        return $this->getAttribute('organisation_id');
    }

    /**
     * @param int $organisation_id
     *
     * @return OrganisationUser
     */
    public function setOrganisationId(int $organisation_id) : OrganisationUser
    {
        $this->setAttribute('organisation_id', $organisation_id);
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
     * @return OrganisationUser
     */
    public function setUserId(int $user_id) : OrganisationUser
    {
        $this->setAttribute('user_id', $user_id);
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
    public function organisation() : BelongsTo
    {
        return $this->belongsTo(Organisation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
