@extends('layouts.layout-admin')

@section('title', 'Dashboard')

@section('header_title', 'Dashboard Overview')
@section('header_subtitle', 'Monitor your store performance')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="p-2 bg-success-subtle rounded-3">
                            <i class="bi bi-cash-stack fs-4 text-success"></i>
                        </div>
                        <h3 class="text-body-secondary fs-6 mb-0">Total Sales</h3>
                    </div>
                    {{-- <span class="badge bg-success-subtle text-success-emphasis rounded-pill">+12.5%</span> --}}
                </div>
                <div class="d-flex align-items-baseline">
                    <p class="h3 fw-bold text-body-emphasis mb-0">Rp {{ number_format($totalSales, 0, ',', '.') }}</p>
                    {{-- <span class="ms-2 small text-body-secondary">this month</span> --}}
                </div>
                {{-- <div class="mt-4">
                    <div class="progress" style="height: 8px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mt-2 small text-body-secondary">75% of monthly target</p>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="p-2 bg-primary-subtle rounded-3">
                            <i class="bi bi-box-seam fs-4 text-primary"></i>
                        </div>
                        <h3 class="text-body-secondary fs-6 mb-0">Total Orders</h3>
                    </div>
                    {{-- <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill">+8.2%</span> --}}
                </div>
                <div class="d-flex align-items-baseline">
                    <p class="h3 fw-bold text-body-emphasis mb-0">{{ number_format($totalOrders, 0, ',', '.') }}</p>
                    <span class="ms-2 small text-body-secondary">orders</span>
                </div>
                <div class="mt-3 row g-2">
                    <div class="col-4">
                        <div class="text-center p-2 bg-light rounded-3">
                            <p class="small text-body-secondary mb-0">Processing</p>
                            <p class="fw-semibold text-body-emphasis mb-0">{{ $processingOrders }}</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center p-2 bg-light rounded-3">
                            <p class="small text-body-secondary mb-0">Shipped</p>
                            <p class="fw-semibold text-body-emphasis mb-0">{{ $shippedOrders }}</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center p-2 bg-light rounded-3">
                            <p class="small text-body-secondary mb-0">Completed</p>
                            <p class="fw-semibold text-body-emphasis mb-0">{{ $completedOrders }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="p-2 bg-info-subtle rounded-3">
                            <i class="bi bi-box fs-4 text-info"></i>
                        </div>
                        <h3 class="text-body-secondary fs-6 mb-0">Products</h3>
                    </div>
                    {{-- <span class="badge bg-info-subtle text-info-emphasis rounded-pill">+5</span> --}}
                </div>
                <div class="d-flex align-items-baseline">
                    <p class="h3 fw-bold text-body-emphasis mb-0">{{ $totalProducts }}</p>
                    <span class="ms-2 small text-body-secondary">total items</span>
                </div>
                <div class="mt-3 row g-2">
                    <div class="col-6">
                        <div class="text-center p-2 bg-light rounded-3">
                            <p class="small text-body-secondary mb-0">In Stock</p>
                            <p class="fw-semibold text-body-emphasis mb-0">{{ $inStockProducts }}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-center p-2 bg-light rounded-3">
                            <p class="small text-body-secondary mb-0">Low Stock</p>
                            <p class="fw-semibold text-danger mb-0">{{ $lowStockProducts }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="p-2 bg-warning-subtle rounded-3">
                            <i class="bi bi-people fs-4 text-warning"></i>
                        </div>
                        <h3 class="text-body-secondary fs-6 mb-0">Customers</h3>
                    </div>
                    {{-- <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">+4.8%</span> --}}
                </div>
                <div class="d-flex align-items-baseline">
                    <p class="h3 fw-bold text-body-emphasis mb-0">{{ $totalCustomers }}</p>
                    <span class="ms-2 small text-body-secondary">registered</span>
                </div>
                <div class="mt-3">
                    <div class="p-3 bg-light rounded-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="small text-body-secondary">Active this month</span>
                            <span class="small fw-semibold text-body-emphasis">{{ $activeCustomers }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-12 col-xl-7">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="fs-5 fw-semibold text-body-emphasis mb-0">Sales Overview</h3>
                    <select class="form-select form-select-sm w-auto" style="max-width: 150px;">
                        <option>Last 7 Days</option>
                        {{-- <option>Last 30 Days</option>
                        <option>This Year</option> --}}
                    </select>
                </div>
                <div style="height: 350px;">
                    <canvas id="salesChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-5">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h3 class="fs-5 fw-semibold text-body-emphasis mb-0">Top Products</h3>
                    <a href="{{ route('admin.products') }}" class="btn btn-sm btn-outline-secondary">
                        View All
                    </a>
                </div>
                <ul class="list-group list-group-flush">
                    @forelse ($topProducts as $product)
                    <li class="list-group-item d-flex align-items-center p-3">
                        <img src="{{ $product->getPrimaryImage() }}" alt="{{ $product->name }}" class="rounded-2"
                            width="50" height="50" style="object-fit: cover;">
                        <div class="ms-3 flex-grow-1">
                            <h4 class="fs-6 fw-medium text-body-emphasis mb-0">{{ $product->name }}</h4>
                            <p class="small text-body-secondary mb-0">{{ $product->order_items_count }} sold</p>
                        </div>
                        <p class="fw-semibold text-body-emphasis mb-0">Rp {{ number_format($product->price, 0, ',', '.')
                            }}</p>
                    </li>
                    @empty
                    <li class="list-group-item p-3 text-center text-body-secondary">
                        No product sales yet.
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="card shadow-sm border-0">
    <div class="card-header bg-white p-4 border-bottom-0">
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="fs-5 fw-semibold text-body-emphasis mb-0">Recent Orders</h2>
            <a href="{{ route('admin.orders.index') }}" class="btn btn-sm btn-outline-secondary">
                View All Orders
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-start px-4 py-3 small text-body-secondary">Order Code</th>
                        <th class="text-start px-4 py-3 small text-body-secondary">Customer</th>
                        <th class="text-start px-4 py-3 small text-body-secondary">Total</th>
                        <th class="text-start px-4 py-3 small text-body-secondary">Status</th>
                        <th class="text-start px-4 py-3 small text-body-secondary">Date</th>
                        <th class="text-end px-4 py-3 small text-body-secondary">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($recentOrders as $order)
                    <tr class="border-top">
                        <td class="px-4 py-3 small text-body-emphasis fw-medium">#{{ $order->order_code }}</td>
                        <td class="px-4 py-3 small text-body-emphasis">
                            {{ $order->user->name ?? 'N/A' }}
                        </td>
                        <td class="px-4 py-3 small fw-medium text-body-emphasis">Rp {{
                            number_format($order->total_amount, 0, ',', '.') }}</td>
                        <td class="px-4 py-3 small">
                            <span class="badge rounded-pill bg-{{ $order->status_color }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="px-4 py-3 small text-body-secondary">{{ $order->created_at->format('d M Y') }}</td>
                        <td class="px-4 py-3 text-end">
                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                                data-bs-target="#orderDetailModal{{ $order->id }}">
                                View Details
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center p-4 text-body-secondary">
                            No recent orders found.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($recentOrders as $order)
{{-- Anda bisa @include modal detail order di sini jika Anda ingin membukanya dari dashboard --}}
{{-- @include('partials.order-detail-modal', ['order' => $order]) --}}
@endforeach
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('salesChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($salesChartLabels), // Data dari Controller
                datasets: [{
                    label: 'Sales',
                    data: @json($salesChartData), // Data dari Controller
                    borderColor: '#10B981', // Emerald-500
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 2,
                    tension: 0.4,
                    fill: true,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#10B981',
                    pointBorderWidth: 2,
                    pointRadius: 4,
                    pointHoverRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    // Format sebagai mata uang Rupiah
                                    label += new Intl.NumberFormat('id-ID', {
                                        style: 'currency',
                                        currency: 'IDR',
                                        minimumFractionDigits: 0
                                    }).format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            borderDash: [5, 5],
                            drawBorder: false
                        },
                        ticks: {
                            callback: function (value) {
                                // Format tick Y-axis
                                if (value >= 1000000) {
                                    return 'Rp ' + (value / 1000000) + 'M';
                                }
                                if (value >= 1000) {
                                    return 'Rp ' + (value / 1000) + 'K';
                                }
                                return 'Rp ' + value;
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    });
</script>
@endpush
