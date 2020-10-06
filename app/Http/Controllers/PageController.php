<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    public function homepage()
    {
        // find the page by type or anything you've decided to use to differentiate them
        abort_unless($page = Page::whereTemplate('homepage')->first(), 500, 'Homepage missing');
        
        // this is so that Twill always goes back to that form's route directly, not pages listing
        Session::put("pages_back_link", route('admin.homepage'));
        
        // with this approach you can provide your own view for each page
        return view('site.pages.homepage',  $this->form($page->id));
    }

    public function treatmentAesthetic()
    {
        // find the page by type or anything you've decided to use to differentiate them
        abort_unless($page = Page::whereTemplate('homepage')->first(), 500, 'Homepage missing');
        
        // this is so that Twill always goes back to that form's route directly, not pages listing
        Session::put("pages_back_link", route('admin.homepage'));
        
        // with this approach you can provide your own view for each page
        return view('site.pages.homepage',  $this->form($page->id));
    }

    public function treatmentSpecialized()
    {
        // find the page by type or anything you've decided to use to differentiate them
        abort_unless($page = Page::whereTemplate('homepage')->first(), 500, 'Homepage missing');
        
        // this is so that Twill always goes back to that form's route directly, not pages listing
        Session::put("pages_back_link", route('admin.homepage'));
        
        // with this approach you can provide your own view for each page
        return view('site.pages.homepage',  $this->form($page->id));
    }
}
