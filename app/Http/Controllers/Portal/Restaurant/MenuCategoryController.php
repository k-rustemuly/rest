<?php

namespace App\Http\Controllers\Portal\Restaurant;

use App\Http\Controllers\BaseController;
use App\Models\MenuCategory;
use App\Http\Requests\StoreMenuCategoryRequest;
use App\Http\Requests\UpdateMenuCategoryRequest;
use App\Modules\Services\Portal\Restaurant\MenuCategoryService;

class MenuCategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @param string $locale
     * @param string $restaurant_id
     * @param \App\Modules\Services\Portal\Restaurant\MenuCategoryService $service
     * @return \Illuminate\Http\Response
     */
    public function index(string $locale, string $restaurant_id, MenuCategoryService $service)
    {
        return $this->success($service->list($restaurant_id));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param string $locale
     * @param string $restaurant_id
     * @param  \App\Http\Requests\StoreMenuCategoryRequest  $request
     * @param \App\Modules\Services\Portal\Restaurant\MenuCategoryService $service
     * @return \Illuminate\Http\Response
     */
    public function store(string $locale, string $restaurant_id, StoreMenuCategoryRequest $request, MenuCategoryService $service)
    {
        return $this->success($service->add($restaurant_id, $request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMenuCategoryRequest  $request
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMenuCategoryRequest $request, MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuCategory $menuCategory)
    {
        //
    }
}
