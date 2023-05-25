<?php

namespace App\Repositories;

use App\Models\Posts;
use App\Repositories\BaseRepository;

/**
 * Class PostsRepository
 * @package App\Repositories
 * @version May 24, 2023, 9:54 am UTC
*/

class PostsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'featuredImage'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Posts::class;
    }
}
