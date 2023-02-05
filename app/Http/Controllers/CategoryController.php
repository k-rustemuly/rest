<?php

namespace App\Http\Controllers;

use App\Modules\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{

    public function list(Request $request, CategoryService $categoryService)
    {
        $categories = $categoryService->list((int) $request->id);
        return $this->success($categories);
    }

}
