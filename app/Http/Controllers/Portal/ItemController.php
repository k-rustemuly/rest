<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreItemRequest;
use App\Models\Category;
use App\Models\Item;
use App\Modules\Services\Portal\ItemService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ItemController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param  string  $locale
     * @param  string  $category_id
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Services\Portal\ItemService $service
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale, string $category_id, Request $request, ItemService $service)
    {
        return $this->success($service->listByCategoryId($category_id, $request->all()));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  string  $locale
     * @param  string  $category_id
     * @param  \App\Http\Requests\StoreItemRequest  $request
     * @param  \App\Modules\Services\Portal\ItemService $service
     * @return \Illuminate\Http\Response
     */
    public function store(string $locale, string $category_id, StoreItemRequest $request, ItemService $service)
    {
        $dataFromRequest = $request->validated();
        $dataFromRequest["category_id"] = $category_id;
        return $this->success($service->create($dataFromRequest));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, Item $item)
    {
        //
    }
}
