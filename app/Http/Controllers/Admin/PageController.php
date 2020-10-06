<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Support\Facades\Session;
use A17\Twill\Http\Controllers\Admin\ModuleController;

class PageController extends ModuleController
{
    protected $moduleName = 'pages';

    protected $permalinkBase = '';
}
