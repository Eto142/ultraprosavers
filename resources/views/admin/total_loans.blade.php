@include('admin.header')
@include('admin.navbar')

<!-- Page Header -->
<div class="page-header">
    <div>
        <nav class="breadcrumb">
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="separator">/</span>
            <span class="current">Total Loans</span>
        </nav>
        <h1 class="page-title">Total Loans</h1>
        <p class="page-subtitle">Overview of all user loan applications</p>
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
            <div style="font-size: 13px; color: var(--admin-text-muted); margin-bottom: 6px;">All Loans</div>
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

<!-- Loans Table -->
<div class="admin-card">
    <div class="admin-card-header">
        <h3 class="admin-card-title">
            <i class="bi bi-cash-stack"></i>
            Loan History
        </h3>
        <span style="color: var(--admin-text-muted); font-size: 14px;">
            {{ count($loans) }} loans found
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
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Documents</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($loans as $loan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($loan->user)
                                <a href="{{ route('admin.profile', $loan->user->id) }}" style="color: var(--admin-primary);">
                                    {{ $loan->user->name }}
                                </a>
                                <div><small style="color: var(--admin-text-muted);">{{ $loan->user->email }}</small></div>
                            @else
                                <span style="color: var(--admin-text-muted);">N/A</span>
                            @endif
                        </td>
                        <td>
                            <strong style="color: var(--admin-success);">${{ number_format($loan->amount, 2) }}</strong>
                        </td>
                        <td style="max-width: 180px;">{{ $loan->reason }}</td>
                        <td>
                            @if($loan->status == '1')
                                <span class="status-badge active">Approved</span>
                            @elseif($loan->status == '0')
                                <span class="status-badge pending">Pending</span>
                            @elseif($loan->status == '2')
                                <span class="status-badge inactive">Declined</span>
                            @endif
                        </td>
                        <td>
                            <div>{{ \Carbon\Carbon::parse($loan->created_at)->format('M j, Y') }}</div>
                            <small style="color: var(--admin-text-muted);">{{ \Carbon\Carbon::parse($loan->created_at)->format('g:i A') }}</small>
                        </td>
                        <td>
                            <div class="action-buttons">
                                @if($loan->license)
                                    <a href="{{ asset('uploads/loan/'.$loan->license) }}" target="_blank" class="action-btn view" title="View License">
                                        <i class="bi bi-file-earmark-image"></i>
                                    </a>
                                @endif
                                @if($loan->photoID)
                                    <a href="{{ asset('uploads/loan/'.$loan->photoID) }}" target="_blank" class="action-btn view" title="View Photo ID">
                                        <i class="bi bi-person-badge"></i>
                                    </a>
                                @endif
                                @if($loan->selfie)
                                    <a href="{{ asset('uploads/loan/'.$loan->selfie) }}" target="_blank" class="action-btn view" title="View Selfie">
                                        <i class="bi bi-camera"></i>
                                    </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7">
                            <div class="empty-state">
                                <div class="empty-state-icon">
                                    <i class="bi bi-cash-stack"></i>
                                </div>
                                <div class="empty-state-title">No loans found</div>
                                <div class="empty-state-text">There are no loan applications yet.</div>
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
