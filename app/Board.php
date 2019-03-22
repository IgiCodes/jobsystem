<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Board extends Model
{
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
    protected $organisation_id;
    /**
     * @var integer
     */
    protected $created_by_user_id;

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
     * @return int
     */
    public function getOrganisationId(): int
    {
        return $this->getAttribute('organisation_id');
    }

    /**
     * @param int $organisation_id
     */
    public function setOrganisationId(int $organisation_id): void
    {
        $this->setAttribute('organisation_id', $organisation_id);
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class);
    }
}
