<?php

namespace Confee\Units\Authentication\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Confee\Units\Authentication\Contracts\Repositories\TypeFileRepository;
use Confee\Domains\TypeFiles\Entitie\TypeFile;

/**
 * Class TypeFileRepositoryEloquent
 * @package namespace Confee\Units\Authentication\Repositories;
 */
class TypeFileRepositoryEloquent extends BaseRepository implements TypeFileRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TypeFile::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
