<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Treatment;

class TreatmentRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions;

    public function __construct(Treatment $model)
    {
        $this->model = $model;
    }
}
