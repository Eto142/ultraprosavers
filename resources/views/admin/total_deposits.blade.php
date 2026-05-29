@include('admin.header')
@include('admin.navbar')

<!-- Page Header -->
<div class="page-header">
    <div>
        <nav class="breadcrumb">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="separator">/</span>
            <span class="current">Total Deposits</span>
        </nav>
        <h1 class="page-title">Total Deposits</h1>
        <p class="page-subtitle">Overview of all user deposits</p>
    </div>
    <div class="page-header-actions">
        <a href="{{ route('admin.dashboard') }}" class="btn-admin btn-admin-secondary">
            <i class="bi bi-arrow-left"></i>
            Back to Dashboard
        </a>
    </div>
</div>

<!-- Summary Cards -->
<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 16px; margin-bottom: 24px;">
    <div class="admin-card" style="margin-bottom: 0;">
        <div class="admin-card-body" style="text-align: center; padding: 20px;">
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">Total Amount</div>
            <div style="font-size: 22px; font-weight: 700; color: var(--admin-success);">${{ number_format($totalAmount, 2) }}</div>
        </div>
    </div>
    <div class="admin-card" style="margin-bottom: 0;">
        <div class="admin-card-body" style="text-align: center; padding: 20px;">
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">All Deposits</div>
            <div style="font-size: 22px; font-weight: 700;">{{ $totalCount }}</div>
        </div>
    </div>
    <div class="admin-card" style="margin-bottom: 0;">
        <div class="admin-card-body" style="text-align: center; padding: 20px;">
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">Pending</div>
            <div style="font-size: 22px; font-weight: 700; color: var(--admin-warning);">{{ $pendingCount }}</div>
        </div>
    </div>
    <div class="admin-card" style="margin-bottom: 0;">
        <div class="admin-card-body" style="text-align: center; padding: 20px;">
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">Approved</div>
            <div style="font-size: 22px; font-weight: 700; color: var(--admin-success);">{{ $approvedCount }}</div>
        </div>
    </div>
    <div class="admin-card" style="margin-bottom: 0;">
        <div class="admin-card-body" style="text-align: center; padding: 20px;">
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">Declined</div>
            <div style="font-size: 22px; font-weight: 700; color: var(--admin-danger);">{{ $declinedCount }}</div>
        </div>
    </div>
</div>

<!-- Deposits Table -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="admin-card-title">
            <i class="bi bi-bank2"></i>
            Deposit History
        </h3>
        <span style="color: var(--admin-text-muted); font-size: 14px;">
            {{ count($deposits) }} deposits found
        </span>
    </div>

    <div class="admin-card-body" style="padding: 0;">
        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Amount</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($deposits as $deposit)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($deposit->user)
                                <a href="{{ route('admin.profile', $deposit->user->id) }}" style="color: var(--admin-primary);">
                                    {{ $deposit->user->name }}
                                </a>
                                <div><small style="color: var(--admin-text-muted);">{{ $deposit->user->email }}</small></div>
                            @else
                                <span style="color: var(--admin-text-muted);">N/A</span>
                            @endif
                        </td>
                        <td>
                            <strong style="color: var(--admin-success);">${{ number_format($deposit->amount, 2) }}</strong>
                        </td>
                        <td>{{ $deposit->method ?? '—' }}</td>
                        <td>
                            @if($deposit->status == '1')
                                <span class="status-badge active">Approved</span>
                            @elseif($deposit->status == '0')
                                <span class="status-badge pending">Pending</span>
                            @elseif($deposit->status == '2')
                                <span class="status-badge inactive">Declined</span>
                            @endif
                        </td>
                        <td>
                            <div>{{ \Carbon\Carbon::parse($deposit->created_at)->format('M j, Y') }}</div>
                            <small style="color: var(--admin-text-muted);">{{ \Carbon\Carbon::parse($deposit->created_at)->format('g:i A') }}</small>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-bank2"></i>
                                </div>
                                <div class="empty-state-title">No deposits found</div>
                                <div class="empty-state-text">There are no deposit records yet.</div>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.footer')
