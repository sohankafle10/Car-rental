@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="font-extrabold text-4xl text-gray-800 mb-4">Dashboard</h2>
    <hr class="h-0.5 bg-gray-300 mb-8">

    <!-- Stats Section -->
    <div class="grid grid-cols-1 bg-blue-900 md:grid-cols-3 gap-6 mt-8">
        @php
            $stats = [
                ['title' => 'Total Users', 'value' => $totalUsers, 'color' => 'blue'],
                ['title' => 'Total Cars', 'value' => $totalCars, 'color' => 'red'],
                ['title' => 'Available Cars', 'value' => $availableCars, 'color' => 'green'],
                ['title' => 'Total Bookings', 'value' => $bookedCars, 'color' => 'orange'],
                ['title' => 'Total Visits', 'value' => $totalVisits, 'color' => 'yellow'],
            ];
        @endphp

        @foreach ($stats as $stat)
        <div class="bg-gradient-to-r from-{{ $stat['color'] }}-500 to-{{ $stat['color'] }}-600 p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow">
            <h3 class="font-semibold text-xl text-white mb-2">{{ $stat['title'] }}</h3>
            <p class="text-5xl text-white font-extrabold">{{ $stat['value'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- Chart Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
        <!-- Booking Trends (Line Chart) -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-lg text-gray-700 mb-4 underline">Booking Trends</h3>
            <canvas id="line-chart" class="chart-canvas" height="300px"></canvas>
        </div>

        <!-- Total Visits per Day (Pie Chart) -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="font-bold text-lg text-gray-700 mb-4 underline">Total Visits Per Day</h3>
            <canvas id="pie-chart" class="chart-canvas" height="300px"></canvas>
        </div>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Charts Script -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Line Chart for Booking Trends
        const ctxLine = document.getElementById('line-chart').getContext('2d');
        const monthlyUserGrowth = JSON.parse('{!! json_encode($monthlyUserGrowth) !!}');
        new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: Object.keys(monthlyUserGrowth),
                datasets: [{
                    label: 'Bookings',
                    data: Object.values(monthlyUserGrowth),
                    backgroundColor: 'rgba(93, 173, 226, 0.2)', // Light blue background
                    borderColor: 'rgba(52, 152, 219, 1)', // Deep blue border
                    borderWidth: 2,
                    tension: 0.4, // Add smooth curve
                    fill: true
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(220, 220, 220, 0.5)'
                        }
                    },
                    x: {
                        grid: {
                            color: 'rgba(220, 220, 220, 0.5)'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Pie Chart for Total Visits Per Day
        const ctxPie = document.getElementById('pie-chart').getContext('2d');
        const visitedUsersPerDay = JSON.parse('{!! json_encode($visitedUsersPerDay) !!}');
        new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: Object.keys(visitedUsersPerDay),
                datasets: [{
                    label: 'Visits',
                    data: Object.values(visitedUsersPerDay),
                    backgroundColor: [
                        'rgba(52, 152, 219, 0.7)',  // Deep blue
                        'rgba(155, 89, 182, 0.7)',  // Purple
                        'rgba(241, 196, 15, 0.7)',  // Yellow
                        'rgba(39, 174, 96, 0.7)',   // Green
                        'rgba(231, 76, 60, 0.7)',   // Red
                        'rgba(243, 156, 18, 0.7)',  // Orange
                        'rgba(127, 140, 141, 0.7)', // Gray
                    ],
                    borderColor: [
                        'rgba(52, 152, 219, 1)',
                        'rgba(155, 89, 182, 1)',
                        'rgba(241, 196, 15, 1)',
                        'rgba(39, 174, 96, 1)',
                        'rgba(231, 76, 60, 1)',
                        'rgba(243, 156, 18, 1)',
                        'rgba(127, 140, 141, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        });
    });
</script>
@endsection
