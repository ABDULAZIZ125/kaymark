

<?php $__env->startSection('title', 'Seller Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="dashboard-container">
    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="dashboard-title">Dashboard</h1>
            <div class="date-display">
                <span id="current-date"></span>
            </div>
        </div>
        <div class="header-actions">
            <button class="btn-primary">
                <span class="material-icons-round">add</span>
                New Listing
            </button>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">directions_car</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">24</h3>
                <p class="stat-label">Active Listings</p>
                <div class="stat-trend positive">
                    <span class="material-icons-round">trending_up</span>
                    <span>12%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">visibility</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">1,284</h3>
                <p class="stat-label">Total Views</p>
                <div class="stat-trend positive">
                    <span class="material-icons-round">trending_up</span>
                    <span>8%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">chat</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">42</h3>
                <p class="stat-label">New Messages</p>
                <div class="stat-trend negative">
                    <span class="material-icons-round">trending_down</span>
                    <span>5%</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">attach_money</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">$84,250</h3>
                <p class="stat-label">Monthly Revenue</p>
                <div class="stat-trend positive">
                    <span class="material-icons-round">trending_up</span>
                    <span>18%</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Main Content -->
    <div class="content-grid">
        <!-- Performance Chart -->
        <div class="chart-container">
            <div class="chart-header">
                <h2>Performance Overview</h2>
                <div class="chart-actions">
                    <button class="btn-outline active">Monthly</button>
                    <button class="btn-outline">Quarterly</button>
                    <button class="btn-outline">Yearly</button>
                </div>
            </div>
            <div class="chart-wrapper">
                <canvas id="performance-chart"></canvas>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="activity-container">
            <div class="activity-header">
                <h2>Recent Activity</h2>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">
                        <span class="material-icons-round">visibility</span>
                    </div>
                    <div class="activity-content">
                        <p><strong>Toyota Camry 2022</strong> received 24 views</p>
                        <span class="activity-time">2 hours ago</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">
                        <span class="material-icons-round">chat</span>
                    </div>
                    <div class="activity-content">
                        <p>New message from <strong>John Smith</strong></p>
                        <span class="activity-time">5 hours ago</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">
                        <span class="material-icons-round">thumb_up</span>
                    </div>
                    <div class="activity-content">
                        <p><strong>Ford Mustang 2021</strong> received an offer</p>
                        <span class="activity-time">Yesterday</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon">
                        <span class="material-icons-round">local_shipping</span>
                    </div>
                    <div class="activity-content">
                        <p><strong>Honda Civic 2020</strong> was sold</p>
                        <span class="activity-time">2 days ago</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="actions-container">
            <h2>Quick Actions</h2>
            <div class="actions-grid">
                <a href="<?php echo e(route('seller.listings.create')); ?>" class="action-card">
                    <span class="material-icons-round">add_circle</span>
                    <h3>Add New Vehicle</h3>
                    <p>Create a new listing</p>
                </a>
                <a href="<?php echo e(route('seller.listings.index')); ?>" class="action-card">
                    <span class="material-icons-round">edit</span>
                    <h3>Manage Listings</h3>
                    <p>Edit existing vehicles</p>
                </a>
                <a href="<?php echo e(route('seller.chat')); ?>" class="action-card">
                    <span class="material-icons-round">message</span>
                    <h3>Messages</h3>
                    <p>Respond to inquiries</p>
                </a>
                <a href="<?php echo e(route('seller.Auction.index')); ?>" class="action-card">
                    <span class="material-icons-round">gavel</span>
                    <h3>Auctions</h3>
                    <p>Manage your auctions</p>
                </a>
            </div>
        </div>

        <!-- Top Performing Listings -->
        <div class="listings-container">
            <div class="listings-header">
                <h2>Top Performing Listings</h2>
                <a href="<?php echo e(route('seller.listings.index')); ?>" class="view-all">View All</a>
            </div>
            <div class="listings-table">
                <div class="table-header">
                    <div class="table-cell">Vehicle</div>
                    <div class="table-cell">Price</div>
                    <div class="table-cell">Views</div>
                    <div class="table-cell">Inquiries</div>
                    <div class="table-cell">Status</div>
                </div>
                <div class="table-row">
                    <div class="table-cell">
                        <div class="vehicle-info">
                            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Toyota Camry" class="vehicle-image">
                            <div>
                                <p class="vehicle-name">Toyota Camry 2022</p>
                                <p class="vehicle-details">Sedan • 12,500 miles</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell">$24,999</div>
                    <div class="table-cell">284</div>
                    <div class="table-cell">18</div>
                    <div class="table-cell">
                        <span class="status-badge active">Active</span>
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell">
                        <div class="vehicle-info">
                            <img src="https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="BMW X5" class="vehicle-image">
                            <div>
                                <p class="vehicle-name">BMW X5 2021</p>
                                <p class="vehicle-details">SUV • 18,200 miles</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell">$52,500</div>
                    <div class="table-cell">192</div>
                    <div class="table-cell">12</div>
                    <div class="table-cell">
                        <span class="status-badge active">Active</span>
                    </div>
                </div>
                <div class="table-row">
                    <div class="table-cell">
                        <div class="vehicle-info">
                            <img src="https://images.unsplash.com/photo-1544636331-e26879cd4d9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Ford Mustang" class="vehicle-image">
                            <div>
                                <p class="vehicle-name">Ford Mustang 2021</p>
                                <p class="vehicle-details">Coupe • 9,800 miles</p>
                            </div>
                        </div>
                    </div>
                    <div class="table-cell">$31,750</div>
                    <div class="table-cell">167</div>
                    <div class="table-cell">9</div>
                    <div class="table-cell">
                        <span class="status-badge pending">Pending</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    /* Dashboard Styles */
    .dashboard-container {
        display: block;
        /*margin-left: 220px;*/
        /*padding: 2rem;*/
        /*min-height: 100vh;*/
        background-color: #f1f5f9;
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }

    .dashboard-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 0.5rem;
    }

    .date-display {
        color: var(--gray);
        font-size: 0.9rem;
    }

    .header-actions .btn-primary {
        background-color: var(--primary);
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .header-actions .btn-primary:hover {
        background-color: #3a56d4;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(67, 97, 238, 0.3);
    }

    /* Stats Grid */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .stat-card {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        background-color: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
        color: var(--primary);
    }

    .stat-icon span {
        font-size: 1.8rem;
    }

    .stat-value {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 0.25rem;
    }

    .stat-label {
        color: var(--gray);
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .stat-trend {
        display: flex;
        align-items: center;
        gap: 0.25rem;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .stat-trend.positive {
        color: #10b981;
    }

    .stat-trend.negative {
        color: var(--danger);
    }

    .stat-trend span:first-child {
        font-size: 1rem;
    }

    /* Content Grid */
    .content-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 1.5rem;
    }

    .chart-container, .activity-container, .actions-container, .listings-container {
        background: white;
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        margin-bottom: 1.5rem;
    }

    .chart-header, .activity-header, .listings-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .chart-header h2, .activity-header h2, .actions-container h2, .listings-header h2 {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--dark);
    }

    .view-all {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .chart-actions {
        display: flex;
        gap: 0.5rem;
    }

    .btn-outline {
        background: transparent;
        border: 1px solid var(--gray);
        color: var(--gray);
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-size: 0.8rem;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-outline.active, .btn-outline:hover {
        background: var(--primary);
        border-color: var(--primary);
        color: white;
    }

    .chart-wrapper {
        height: 300px;
        position: relative;
    }

    /* Activity List */
    .activity-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .activity-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid #f1f1f1;
    }

    .activity-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .activity-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background-color: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary);
        flex-shrink: 0;
    }

    .activity-content p {
        margin-bottom: 0.25rem;
        color: var(--dark);
    }

    .activity-time {
        font-size: 0.8rem;
        color: var(--gray);
    }

    /* Quick Actions */
    .actions-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .action-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 1.5rem 1rem;
        border-radius: 12px;
        background-color: var(--primary-light);
        color: var(--primary);
        text-decoration: none;
        transition: all 0.3s ease;
        text-align: center;
    }

    .action-card:hover {
        background-color: var(--primary);
        color: white;
        transform: translateY(-5px);
    }

    .action-card span {
        font-size: 2.5rem;
        margin-bottom: 0.5rem;
    }

    .action-card h3 {
        font-size: 1rem;
        margin-bottom: 0.25rem;
    }

    .action-card p {
        font-size: 0.8rem;
        opacity: 0.8;
    }

    /* Listings Table */
    .listings-table {
        display: flex;
        flex-direction: column;
    }

    .table-header, .table-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr 1fr 1fr;
        gap: 1rem;
        padding: 1rem 0;
        align-items: center;
    }

    .table-header {
        border-bottom: 1px solid #f1f1f1;
        font-weight: 600;
        color: var(--dark);
    }

    .table-row {
        border-bottom: 1px solid #f1f1f1;
    }

    .table-row:last-child {
        border-bottom: none;
    }

    .vehicle-info {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .vehicle-image {
        width: 60px;
        height: 40px;
        border-radius: 6px;
        object-fit: cover;
    }

    .vehicle-name {
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 0.25rem;
    }

    .vehicle-details {
        font-size: 0.8rem;
        color: var(--gray);
    }

    .status-badge {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .status-badge.active {
        background-color: rgba(16, 185, 129, 0.1);
        color: #10b981;
    }

    .status-badge.pending {
        background-color: rgba(245, 158, 11, 0.1);
        color: #f59e0b;
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .content-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .dashboard-container {
            margin-left: 80px;
            padding: 1rem;
        }

        .dashboard-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .actions-grid {
            grid-template-columns: 1fr;
        }

        .table-header, .table-row {
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }

        .table-cell {
            padding: 0.5rem 0;
        }
    }
</style>

<script>
    // Set current date
    document.getElementById('current-date').textContent = new Date().toLocaleDateString('en-US', { 
        weekday: 'long', 
        year: 'numeric', 
        month: 'long', 
        day: 'numeric' 
    });

    // Initialize Performance Chart
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('performance-chart').getContext('2d');
        const performanceChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Listings Views',
                    data: [1200, 1900, 1500, 2200, 1800, 2500, 2300, 2800, 2600, 3000, 3200, 3500],
                    borderColor: '#4361ee',
                    backgroundColor: 'rgba(67, 97, 238, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }, {
                    label: 'Vehicles Sold',
                    data: [8, 12, 10, 15, 13, 18, 16, 20, 19, 22, 24, 28],
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false
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

        // Chart period buttons
        const chartPeriodButtons = document.querySelectorAll('.chart-actions .btn-outline');
        chartPeriodButtons.forEach(button => {
            button.addEventListener('click', function() {
                chartPeriodButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // In a real app, you would update the chart data based on the selected period
                // For this example, we'll just log the selection
                console.log('Selected period:', this.textContent);
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Seller', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/dashboard/seller.blade.php ENDPATH**/ ?>