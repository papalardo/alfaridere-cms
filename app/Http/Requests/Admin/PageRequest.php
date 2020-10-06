<?php

namespace App\Http\Requests\Admin;

use App\Models\Page;
use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
{
    public function rulesForCreate()
    {
        return [
            'slug' => 'required',
            'template' => 'required',
            'title' => 'required',
        ];
    }

    public function rulesForUpdate()
    {
        $page = Page::firstOrFail(request()->input('page'));

        if($page->template == 'treatment_specialized') {
            return [
                'repeaters.treatment_item_specialized.*.title' => 'required',
                'repeaters.treatment_item_specialized.*.description' => 'required',
                'repeaters.treatment_item_specialized.*.subtitle' => 'required',
                'repeaters.treatment_item_specialized.*.btn_title' => 'required',
                'repeaters.treatment_item_specialized.*.medias' => 'required',
            ];
        } else if ($page->template == 'treatment_aesthetic') {
            return [
                'repeaters.treatment_item_aesthetic.*.title' => 'required',
                'repeaters.treatment_item_aesthetic.*.description' => 'required',
                'repeaters.treatment_item_aesthetic.*.subtitle' => 'required',
                'repeaters.treatment_item_aesthetic.*.btn_title' => 'required',
                'repeaters.treatment_item_aesthetic.*.medias' => 'required',
            ];
        }
        

        return [];
    }
}
