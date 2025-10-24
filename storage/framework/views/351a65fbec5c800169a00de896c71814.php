

<?php $__env->startSection('title', 'Buyer Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="dashboard-container">
    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <div class="header-content">
            <h1 class="dashboard-title">Buyer Dashboard</h1>
            <p class="dashboard-subtitle">Welcome back, <?php echo e(Str::ucfirst(Auth::user()->name)); ?>! Here's your buying activity at a glance.</p>
            <div class="date-display">
                <span id="current-date"></span>
            </div>
        </div>
        <div class="header-actions">
            <button class="btn-primary">
                <span class="material-icons-round">search</span>
                Browse Vehicles
            </button>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">how_to_vote</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">7</h3>
                <p class="stat-label">Active Bids</p>
                <div class="stat-trend positive">
                    <span class="material-icons-round">trending_up</span>
                    <span>2 new</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">favorite</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">12</h3>
                <p class="stat-label">Watchlist Items</p>
                <div class="stat-trend positive">
                    <span class="material-icons-round">trending_up</span>
                    <span>3 new</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">chat</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">5</h3>
                <p class="stat-label">Unread Messages</p>
                <div class="stat-trend negative">
                    <span class="material-icons-round">priority_high</span>
                    <span>Requires attention</span>
                </div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <span class="material-icons-round">shopping_cart</span>
            </div>
            <div class="stat-content">
                <h3 class="stat-value">3</h3>
                <p class="stat-label">Past Purchases</p>
                <div class="stat-trend neutral">
                    <span class="material-icons-round">check_circle</span>
                    <span>All completed</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts and Main Content -->
    <div class="content-grid">
        <!-- Bidding Activity Chart -->
        <div class="chart-container">
            <div class="chart-header">
                <h2>Bidding Activity</h2>
                <div class="chart-actions">
                    <button class="btn-outline active">Weekly</button>
                    <button class="btn-outline">Monthly</button>
                    <button class="btn-outline">Yearly</button>
                </div>
            </div>
            <div class="chart-wrapper">
                <canvas id="bidding-chart"></canvas>
            </div>
        </div>

        <!-- Recent Notifications -->
        <div class="activity-container">
            <div class="activity-header">
                <h2>Recent Notifications</h2>
                <a href="<?php echo e(route('buyer.notifications')); ?>" class="view-all">View All</a>
            </div>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon notification">
                        <span class="material-icons-round">gavel</span>
                    </div>
                    <div class="activity-content">
                        <p>You've been outbid on <strong>Ford Mustang 2021</strong></p>
                        <span class="activity-time">1 hour ago</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon message">
                        <span class="material-icons-round">mail</span>
                    </div>
                    <div class="activity-content">
                        <p>New message from <strong>AutoMax Dealership</strong></p>
                        <span class="activity-time">3 hours ago</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon success">
                        <span class="material-icons-round">check_circle</span>
                    </div>
                    <div class="activity-content">
                        <p>Your bid on <strong>Toyota Camry 2022</strong> is currently winning</p>
                        <span class="activity-time">Yesterday</span>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-icon warning">
                        <span class="material-icons-round">schedule</span>
                    </div>
                    <div class="activity-content">
                        <p>Auction ending soon for <strong>Honda Civic 2020</strong></p>
                        <span class="activity-time">2 days ago</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="actions-container">
            <h2>Quick Actions</h2>
            <div class="actions-grid">
                <a href="<?php echo e(route('buyer.bids')); ?>" class="action-card">
                    <span class="material-icons-round">how_to_vote</span>
                    <h3>My Bids</h3>
                    <p>Manage active bids</p>
                </a>
                <a href="<?php echo e(route('buyer.watchlist')); ?>" class="action-card">
                    <span class="material-icons-round">favorite</span>
                    <h3>Watchlist</h3>
                    <p>View saved vehicles</p>
                </a>
                <a href="<?php echo e(route('buyer.messages')); ?>" class="action-card">
                    <span class="material-icons-round">chat</span>
                    <h3>Messages</h3>
                    <p>Contact sellers</p>
                </a>
                <a href="<?php echo e(route('buyer.escrow')); ?>" class="action-card">
                    <span class="material-icons-round">payments</span>
                    <h3>Payments</h3>
                    <p>Manage escrow</p>
                </a>
            </div>
        </div>

        <!-- Active Bids -->
        <div class="listings-container">
            <div class="listings-header">
                <h2>Active Bids</h2>
                <a href="<?php echo e(route('buyer.bids')); ?>" class="view-all">View All</a>
            </div>
            <div class="listings-table">
                <div class="table-header">
                    <div class="table-cell">Vehicle</div>
                    <div class="table-cell">Your Bid</div>
                    <div class="table-cell">Current Bid</div>
                    <div class="table-cell">Time Left</div>
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
                    <div class="table-cell">$24,500</div>
                    <div class="table-cell">$24,999</div>
                    <div class="table-cell">2 days</div>
                    <div class="table-cell">
                        <span class="status-badge outbid">Outbid</span>
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
                    <div class="table-cell">$52,000</div>
                    <div class="table-cell">$52,000</div>
                    <div class="table-cell">1 day</div>
                    <div class="table-cell">
                        <span class="status-badge winning">Winning</span>
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
                    <div class="table-cell">$31,500</div>
                    <div class="table-cell">$31,750</div>
                    <div class="table-cell">5 hours</div>
                    <div class="table-cell">
                        <span class="status-badge outbid">Outbid</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recommended Vehicles -->
        <div class="recommendations-container">
            <div class="listings-header">
                <h2>Recommended For You</h2>
                <a href="#" class="view-all">View All</a>
            </div>
            <div class="recommendations-grid">
                <div class="vehicle-card">
                    <div class="vehicle-image-container">
                        <img src="https://images.unsplash.com/photo-1621007947382-bb3c3994e3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Audi A4" class="vehicle-card-image">
                        <button class="watchlist-btn">
                            <span class="material-icons-round">favorite_border</span>
                        </button>
                    </div>
                    <div class="vehicle-card-content">
                        <h3>Audi A4 2021</h3>
                        <p class="vehicle-price">$35,200</p>
                        <div class="vehicle-details">
                            <span><span class="material-icons-round">speed</span> 15,300 miles</span>
                            <span><span class="material-icons-round">local_gas_station</span> Hybrid</span>
                        </div>
                        <div class="vehicle-card-actions">
                            <button class="btn-outline">View Details</button>
                            <button class="btn-primary">Place Bid</button>
                        </div>
                    </div>
                </div>
                <div class="vehicle-card">
                    <div class="vehicle-image-container">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Chevrolet Tahoe" class="vehicle-card-image">
                        <button class="watchlist-btn">
                            <span class="material-icons-round">favorite_border</span>
                        </button>
                    </div>
                    <div class="vehicle-card-content">
                        <h3>Chevrolet Tahoe 2020</h3>
                        <p class="vehicle-price">$42,500</p>
                        <div class="vehicle-details">
                            <span><span class="material-icons-round">speed</span> 22,100 miles</span>
                            <span><span class="material-icons-round">local_gas_station</span> Gasoline</span>
                        </div>
                        <div class="vehicle-card-actions">
                            <button class="btn-outline">View Details</button>
                            <button class="btn-primary">Place Bid</button>
                        </div>
                    </div>
                </div>
                <div class="vehicle-card">
                    <div class="vehicle-image-container">
                        <img src="https://images.unsplash.com/photo-1603587074812-5ae5c2dbef2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Tesla Model 3" class="vehicle-card-image">
                        <button class="watchlist-btn">
                            <span class="material-icons-round">favorite_border</span>
                        </button>
                    </div>
                    <div class="vehicle-card-content">
                        <h3>Tesla Model 3 2022</h3>
                        <p class="vehicle-price">$38,750</p>
                        <div class="vehicle-details">
                            <span><span class="material-icons-round">speed</span> 8,500 miles</span>
                            <span><span class="material-icons-round">ev_station</span> Electric</span>
                        </div>
                        <div class="vehicle-card-actions">
                            <button class="btn-outline">View Details</button>
                            <button class="btn-primary">Place Bid</button>
                        </div>
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
        /*margin-left: 220px;*/
        padding: 2rem;
        min-height: 100vh;
        background-color: #f1f5f9;
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 2rem;
    }

    .dashboard-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--dark);
        margin-bottom: 0.5rem;
    }

    .dashboard-subtitle {
        color: var(--gray);
        margin-bottom: 0.5rem;
        max-width: 500px;
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

    .stat-trend.neutral {
        color: #6b7280;
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

    .chart-container, .activity-container, .actions-container, .listings-container, .recommendations-container {
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
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .activity-icon.notification {
        background-color: rgba(239, 68, 68, 0.1);
        color: var(--danger);
    }

    .activity-icon.message {
        background-color: rgba(67, 97, 238, 0.1);
        color: var(--primary);
    }

    .activity-icon.success {
        background-color: rgba(16, 185, 129, 0.1);
        color: #10b981;
    }

    .activity-icon.warning {
        background-color: rgba(245, 158, 11, 0.1);
        color: #f59e0b;
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

    .status-badge.winning {
        background-color: rgba(16, 185, 129, 0.1);
        color: #10b981;
    }

    .status-badge.outbid {
        background-color: rgba(239, 68, 68, 0.1);
        color: var(--danger);
    }

    /* Recommendations */
    .recommendations-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .vehicle-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .vehicle-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .vehicle-image-container {
        position: relative;
        height: 160px;
        overflow: hidden;
    }

    .vehicle-card-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .watchlist-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        color: var(--gray);
        transition: all 0.3s ease;
    }

    .watchlist-btn:hover {
        color: var(--danger);
        transform: scale(1.1);
    }

    .vehicle-card-content {
        padding: 1.25rem;
    }

    .vehicle-card-content h3 {
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: var(--dark);
    }

    .vehicle-price {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 0.75rem;
    }

    .vehicle-details {
        display: flex;
        justify-content: space-between;
        margin-bottom: 1rem;
        font-size: 0.85rem;
        color: var(--gray);
    }

    .vehicle-details span {
        display: flex;
        align-items: center;
        gap: 0.25rem;
    }

    .vehicle-card-actions {
        display: flex;
        gap: 0.5rem;
    }

    .vehicle-card-actions .btn-outline,
    .vehicle-card-actions .btn-primary {
        flex: 1;
        padding: 0.5rem;
        font-size: 0.8rem;
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

        .recommendations-grid {
            grid-template-columns: 1fr;
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

    // Initialize Bidding Activity Chart
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('bidding-chart').getContext('2d');
        const biddingChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                datasets: [{
                    label: 'Bids Placed',
                    data: [3, 5, 2, 4, 6, 3, 2],
                    backgroundColor: '#4361ee',
                    borderRadius: 4,
                }, {
                    label: 'Vehicles Viewed',
                    data: [12, 15, 10, 14, 18, 12, 8],
                    backgroundColor: '#10b981',
                    borderRadius: 4,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
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
                console.log('Selected period:', this.textContent);
            });
        });

        // Watchlist button functionality
        document.querySelectorAll('.watchlist-btn').forEach(button => {
            button.addEventListener('click', function() {
                const icon = this.querySelector('span');
                if (icon.textContent === 'favorite_border') {
                    icon.textContent = 'favorite';
                    icon.style.color = '#ef4444';
                } else {
                    icon.textContent = 'favorite_border';
                    icon.style.color = '';
                }
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Buyer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/u898351377/domains/360webcoders.com/public_html/kaymark/resources/views/dashboard/buyer.blade.php ENDPATH**/ ?>