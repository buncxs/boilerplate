<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    
    public $html_tag_data;
    public $title;
    public $description;
    public $breadcrumbs;
    
    public function __construct($html_tag_data = [], $title = '', $description = '', $breadcrumbs = '')
    {
        $this->html_tag_data = $html_tag_data;
        $this->title = $title;
        $this->description = $description;
        $this->breadcrumbs = $breadcrumbs;

    }


    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
