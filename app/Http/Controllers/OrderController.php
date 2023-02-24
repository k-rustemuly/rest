<?php

namespace App\Http\Controllers;

use App\Modules\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends BaseController
{
    public function settings(Request $request, OrderService $orderService)
    {
        $settings = $orderService->settings((int) $request->restaurant_id);
        return $this->success($settings);
    }
}
