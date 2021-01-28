<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use App\Order;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $ordersCount = Order::all()->count();

        $delevered              = Order::where('status', 'Deliveried')->count();
        $notDeleveredYet        = Order::where('status', '!=', 'Deliveried')->count();
        $successfullyDelevered  = $delevered / $ordersCount * 100;

        $usersCountr            = User::aLL()->count();

        return view('dashboard.dashboard', compact('ordersCount','successfullyDelevered','notDeleveredYet','usersCountr'));
    }
}
