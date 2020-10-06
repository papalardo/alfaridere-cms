<?php

namespace App\Repositories;

use App\Models\Page;
use App\Models\Slider;
use App\Models\Treatment;
use App\Models\Pages\HomePage;
use App\Repositories\TreatmentRepository;
use A17\Twill\Repositories\ModuleRepository;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;

class PageRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Page $model)
    {
        $this->model = $model;
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields = $this->getFormFieldsForRepeater($object, $fields, 'sliders', 'Slider', 'slider_item');
        if ($object->template == 'treatment_specialized') {
            $fields = $this->getFormFieldsForRepeater($object, $fields, 'treatments', 'TreatmentSpecialized', 'treatment_item_specialized');
        } else if ($object->tempalte == 'treatment_aesthetic') {
            $fields = $this->getFormFieldsForRepeater($object, $fields, 'treatments', 'TreatmentAesthetic', 'treatment_item_aesthetic');
        }

        return $fields;
    }

    public function afterSave($object, $fields)
    {
        if ($object->template == 'treatment_specialized') {
            $this->updateRepeater($object, $fields, 'treatments', null, 'treatment_item_specialized');
        } else if ($object->tempalte == 'treatment_aesthetic') {
            $this->updateRepeater($object, $fields, 'treatments', null, 'treatment_item_aesthetic');
        }

        $this->updateRepeaterMorphMany($object, $fields, 'sliders', 'slideable', 'Slider', 'slider_item');

        parent::afterSave($object, $fields);
    }
}
