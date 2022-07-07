<?php

namespace App\Http\Controllers;

use App\Http\Services\JsonInitializationService;
use App\Http\Services\PaginateService;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function page(): View
    {
        $perPage = config('app.pagination.per_page');
        $elementQuantity = config('app.pagination.element_quantity');
        $linksTo = config('app.pagination.links_to');
        $linksAfter = config('app.pagination.links_after');
        $collectionElements = JsonInitializationService::jsonCollectInit($elementQuantity);
        $resultCollections = PaginateService::paginate($collectionElements, $perPage);
        return view('page', compact('resultCollections', 'linksTo', 'linksAfter'));
    }


}

