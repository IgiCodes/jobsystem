<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    /**
     * @var integer
     */
    protected $id;
    /**
     * @var string
     */
    protected $md5;
    /**
     * @var string
     */
    protected $extension;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $path;
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
        'md5',
        'extension',
        'type',
        'path',
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
     * @return string
     */
    public function getMd5() : string
    {
        return $this->getAttribute('md5');
    }

    /**
     * @param string $md5
     *
     * @return File
     */
    public function setMd5(string $md5) : File
    {
        $this->setAttribute('md5', $md5);
        return $this;
    }

    /**
     * @return string
     */
    public function getExtension() : string
    {
        return $this->getAttribute('extension');
    }

    /**
     * @param string $extension
     *
     * @return File
     */
    public function setExtension(string $extension) : File
    {
        $this->setAttribute('extension', $extension);
        return $this;
    }

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->getAttribute('type');
    }

    /**
     * @param string $type
     *
     * @return File
     */
    public function setType(string $type) : File
    {
        $this->setAttribute('type', $type);
        return $this;
    }

    /**
     * @return string
     */
    public function getPath() : string
    {
        return $this->getAttribute('path');
    }

    /**
     * @param string $path
     *
     * @return File
     */
    public function setPath(string $path) : File
    {
        $this->setAttribute('path', $path);
        return $this;
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
     *
     * @return File
     */
    public function setId(int $id) : File
    {
        $this->setAttribute('id', $id);
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
     * @return File
     */
    public function setCreatedAt(DateTime $created_at) : File
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
     * @return File
     */
    public function setUpdatedAt(DateTime $updated_at) : File
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
     * @return File
     */
    public function setDeletedAt(DateTime $deleted_at) : File
    {
        $this->setAttribute('deleted_at', $deleted_at);
        return $this;
    }
}
