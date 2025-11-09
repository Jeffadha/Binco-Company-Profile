<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. STATISTIK KARTU

        // Asumsi status 'paid', 'processing', 'shipped', 'completed' adalah penjualan
        $salesStatuses = ['paid', 'processing', 'shipped', 'completed'];

        // Card 1: Total Sales
        $totalSales = Order::whereIn('status', $salesStatuses)
            ->sum('total_amount');

        // Card 2: Total Orders
        $processingOrders = Order::where('status', 'processing')->count();
        $shippedOrders = Order::where('status', 'shipped')->count();
        $completedOrders = Order::where('status', 'completed')->count();
        $totalOrders = $processingOrders + $shippedOrders + $completedOrders;

        // Card 3: Products
        $totalProducts = Product::count();
        $inStockProducts = Product::where('stock', '>', 0)->count();
        // Asumsi stok rendah adalah < 10
        $lowStockProducts = Product::where('stock', '<', 10)->where('stock', '>', 0)->count();

        // Card 4: Customers
        // Asumsi 'user' adalah customer
        $totalCustomers = User::where('role', 'user')->count();
        $activeCustomers = Order::where('created_at', '>=', Carbon::now()->subMonth())
            ->distinct('user_id')
            ->count();

        // 2. DATA GRAFIK (SALES OVERVIEW)
        $salesData = Order::whereIn('status', $salesStatuses)
            ->whereBetween('created_at', [Carbon::now()->subDays(6), Carbon::now()])
            ->select(DB::raw('DATE(created_at) as date'), DB::raw('sum(total_amount) as total'))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get()
            ->pluck('total', 'date');

        $salesChartLabels = [];
        $salesChartData = [];
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $salesChartLabels[] = Carbon::now()->subDays($i)->format('D'); // 'Mon', 'Tue', etc.
            $salesChartData[] = $salesData->get($date, 0); // Get data for the date, or 0
        }

        // 3. TABEL (TOP PRODUCTS & RECENT ORDERS)

        // Asumsi Product punya relasi 'orderItems'
        $topProducts = Product::withCount('orderItems')
            ->orderBy('order_items_count', 'desc')
            ->take(3)
            ->get();

        $recentOrders = Order::with('user')
            ->latest()
            ->take(5)
            ->get();

        // 4. Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalSales',
            'totalOrders',
            'processingOrders',
            'shippedOrders',
            'completedOrders',
            'totalProducts',
            'inStockProducts',
            'lowStockProducts',
            'totalCustomers',
            'activeCustomers',
            'salesChartLabels',
            'salesChartData',
            'topProducts',
            'recentOrders'
        ));
    }
}
