<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\BaseController;
use App\Http\Requests\StoreUploadRequest;
use App\Modules\Services\Portal\UploadService;

class UploadController extends BaseController
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUploadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadRequest $request, UploadService $service)
    {
        return $service->saveFile($request->file("file"), true);
    }
}
