<?php

namespace App\Http\Controllers;

use App\Modules\Services\ItemService;
use Illuminate\Http\Request;

class ItemController extends BaseController
{
    public function list(Request $request, ItemService $itemService)
    {
        $items = $itemService->list((int) $request->id);
        return $this->success($items);
    }
}
