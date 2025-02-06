<?php

namespace App\View\Components\landing;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb extends Component
{
    /**
     * Create a new component instance.
     */

     /**
      * Page title
      * @var string
    */
    public $pageTitle = '';

    

    /**
     * breadcrump data
     * @var array
    */
    public $breadcrumb = [];


    /**
     * Create a new component instance.
     * @param string $pageTitle
     * @param array $breadcrumb
    */
    public function __construct($pageTitle, $breadcrumb)
    {
        $this->pageTitle = $pageTitle;
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.landing.breadcrumb');
    }
}
