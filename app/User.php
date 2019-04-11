<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
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
    protected $email;
    /**
     * @var string
     */
    protected $password;
    /**
     * @var \DateTime
     */
    protected $email_verified_at;
    /**
     * @var string
     */
    protected $remember_token;
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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime',
        'deleted_at'        => 'datetime',
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
     * @return User
     */
    public function setId(int $id) : User
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
     * @return User
     */
    public function setName(string $name) : User
    {
        $this->setAttribute('name', $name);
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->getAttribute('email');
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email) : User
    {
        $this->setAttribute('email', $email);
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->getAttribute('password');
    }

    /**
     * @return \DateTime
     */
    public function getEmailVerifiedAt() : DateTime
    {
        return $this->getAttribute('email_verified_at');
    }

    /**
     * @return string
     */
    public function getRememberToken() : string
    {
        return $this->getAttribute('remember_token');
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function jobs() : BelongsToMany
    {
        return $this->belongsToMany(Job::class)->using(JobUser::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function statuses() : BelongsToMany
    {
        return $this->belongsToMany(Status::class)->using(JobUser::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function organisations() : BelongsToMany
    {
        return $this->belongsToMany(Organisation::class)->using(OrganisationUser::class);
    }
}
