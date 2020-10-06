<?php

namespace App\Repositories;

use App\Models\Treatment;
use App\Models\TreatmentType;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;

class TreatmentAestheticRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions;

    public function __construct(Treatment $model)
    {
        $this->model = $model->whereType(TreatmentType::AESTHETIC);
    }
}
