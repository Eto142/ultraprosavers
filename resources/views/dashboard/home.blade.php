@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')

{{-- Account alerts --}}
@if (Auth::user()->user_block == 1)
    <div class="account-alert blocked">
        <i class="bi bi-lock-fill"></i>
        <div><strong>Account Blocked:</strong> Please clear your outstanding tax obligations to restore access.</div>
    </div>
@elseif (Auth::user()->user_activity == 1)
    <div class="account-alert flagged">
        <i class="bi bi-exclamation-triangle-fill"></i>
        <div><strong>Suspicious Activity Detected:</strong> Your account has been flagged. Please contact support.</div>
    </div>
@endif

{{-- Page header --}}
<div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
    <div>
        <h5 class="fw-700 mb-0">Welcome back, {{ Auth::user()->first_name }}!</h5>
        <p class="text-muted mb-0 small">{{ now()->format('l, F d Y') }}</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('deposit') }}" class="btn btn-primary btn-sm px-3"><i class="bi bi-plus-circle me-1"></i>Deposit</a>
        <a href="{{ route('bank') }}" class="btn btn-outline-secondary btn-sm px-3"><i class="bi bi-send me-1"></i>Transfer</a>
    </div>
</div>

{{-- Balance card --}}
<div class="bk-balance-panel mb-4">
    <div class="bk-balance-left">
        <div class="bk-balance-label">
            Available Balance
            <button type="button" class="btn-toggle-balance ms-2" id="toggleBalance" title="Toggle visibility">
                <i class="bi bi-eye-fill" id="balanceEyeIcon"></i>
            </button>
        </div>
        <div class="bk-balance-amount">
            <span class="balance-visible">{{ Auth::user()->currency }}{{ number_format($balance, 2) }}</span>
            <span class="balance-hidden d-none">{{ Auth::user()->currency }} •••••</span>
        </div>
        <div class="bk-balance-meta">
            <span><i class="bi bi-hash me-1"></i>{{ Auth::user()->a_number }}</span>
            <span class="mx-2">·</span>
            <span>{{ Auth::user()->account_type }}</span>
        </div>
    </div>
    <div class="bk-balance-right">
        @if(Auth::user()->kyc_status == '1')
            <span class="bk-badge verified"><i class="bi bi-patch-check-fill me-1"></i>KYC Verified</span>
        @else
            <span class="bk-badge unverified"><i class="bi bi-exclamation-circle me-1"></i>KYC Unverified</span>
        @endif
    </div>
</div>

{{-- Stat row — 2 cards, equal halves --}}
<div class="row g-3 mb-4">
    <div class="col-6">
        <div class="bk-stat">
            <div class="bk-stat-icon deposits"><i class="bi bi-arrow-down-left"></i></div>
            <div>
                <div class="bk-stat-label">Total Deposits</div>
                <div class="bk-stat-value balance-sensitive">{{ Auth::user()->currency }}{{ number_format($totalDeposit ?? 0, 2) }}</div>
                <div class="bk-stat-value balance-sensitive-hidden d-none">••••</div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="bk-stat">
            <div class="bk-stat-icon spent"><i class="bi bi-arrow-up-right"></i></div>
            <div>
                <div class="bk-stat-label">Total Spent</div>
                <div class="bk-stat-value balance-sensitive">{{ Auth::user()->currency }}{{ number_format($totalSpent ?? 0, 2) }}</div>
                <div class="bk-stat-value balance-sensitive-hidden d-none">••••</div>
            </div>
        </div>
    </div>
</div>

{{-- Commented stat cards (kept for reference) --}}
{{-- <div class="col-6 col-lg-3">
    <div class="stat-card">
        <div class="stat-icon green"><i class="bi bi-credit-card"></i></div>
        <div>
            <div class="stat-label">Active Cards</div>
            <div class="stat-value">{{ $activeCards ?? 0 }}</div>
        </div>
    </div>
</div> --}}
{{-- <div class="col-6 col-lg-3">
    <div class="stat-card">
        <div class="stat-icon yellow"><i class="bi bi-graph-up-arrow"></i></div>
        <div>
            <div class="stat-label">Loans</div>
            <div class="stat-value">{{ $trades->count() }}</div>
        </div>
    </div>
</div> --}}

{{-- Row 3 — Quick Actions (all commented) --}}
{{-- <div class="quick-actions mb-4">
    <a href="{{ route('deposit') }}" class="qa-btn"><i class="bi bi-plus-circle"></i> Deposit</a>
    <a href="{{ route('bank') }}" class="qa-btn"><i class="bi bi-send"></i> Transfer</a>
    <a href="{{ route('cfx') }}" class="qa-btn"><i class="bi bi-currency-exchange"></i> Forex</a>
    <a href="{{ route('cryptopage') }}" class="qa-btn"><i class="bi bi-currency-bitcoin"></i> Crypto</a>
    <a href="{{ route('paybills') }}" class="qa-btn"><i class="bi bi-receipt"></i> Pay Bills</a>
    <a href="{{ route('card') }}" class="qa-btn"><i class="bi bi-credit-card-2-front"></i> Cards</a>
    <a href="{{ route('loan') }}" class="qa-btn"><i class="bi bi-cash-stack"></i> Loans</a>
</div> --}}

{{-- Row 4 — Card + Transactions side by side --}}
<div class="row g-4 mb-4">

    {{-- My Card --}}
    {{-- <div class="col-lg-5">
        <div class="db-card h-100">
            <div class="db-card-header d-flex justify-content-between align-items-center">
                <span><i class="bi bi-credit-card-2-front me-2"></i>My Card</span>
                <a href="{{ route('card') }}" class="text-accent fw-500 link-sm">Manage <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-card-body">
                @forelse($cards as $card)
                    @if($card->status == 0)
                        <!-- Card under review -->
                        <div class="text-center py-4">
                            <div class="mb-3 empty-icon-circle sm warning-bg">
                                <i class="bi bi-hourglass-split circle-icon-sm"></i>
                            </div>
                            <h6 class="fw-600">Card Under Review</h6>
                            <p class="text-muted small mb-0">Your card application is being processed. We'll notify you when it's ready.</p>
                        </div>
                    @else
                        <!-- Virtual card display -->
                        <div class="home-virtual-card">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-success bg-opacity-25 text-white label-xs">ACTIVE</span>
                                <img src="{{ asset('mastercard.png') }}" alt="Mastercard" class="icon-sm" onerror="this.style.display='none'">
                            </div>
                            <div class="card-num balance-sensitive">{{ implode(' ', str_split($card->card_number, 4)) }}</div>
                            <div class="card-num balance-sensitive-hidden d-none">&bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull;</div>
                            <div class="d-flex justify-content-between card-meta">
                                <div>
                                    <div class="card-label">HOLDER</div>
                                    <div class="fw-500">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                                </div>
                                <div class="text-center">
                                    <div class="card-label">CVV</div>
                                    <div class="fw-500">&bull;&bull;&bull;</div>
                                </div>
                                <div class="text-end">
                                    <div class="card-label">EXPIRY</div>
                                    <div class="fw-500">{{ \Carbon\Carbon::parse($card->card_expiry)->format('m/y') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ route('card') }}" class="btn btn-sm btn-outline-primary flex-fill"><i class="bi bi-eye me-1"></i>View Details</a>
                            <button class="btn btn-sm btn-primary flex-fill" data-bs-toggle="modal" data-bs-target="#homeDeliveryModal"><i class="bi bi-truck me-1"></i>Request Delivery</button>
                        </div>
                    @endif
                @empty
                    <!-- No card - request one -->
                    <div class="text-center py-4">
                        <div class="mb-3 empty-icon-circle md accent-bg">
                            <i class="bi bi-credit-card circle-icon-md"></i>
                        </div>
                        <h6 class="fw-600 mb-1">No Card Yet</h6>
                        <p class="text-muted small mb-3">Get a virtual debit card for online purchases and ATM withdrawals</p>
                        <a href="{{ route('request.card', Auth::user()->id) }}" class="btn btn-primary btn-sm">
                            <i class="bi bi-plus-circle me-1"></i> Request Card
                        </a>
                    </div>
                @endforelse
            </div>
        </div>
    </div> --}}

    {{-- Recent Transactions --}}
    <div class="col-12">
        <div class="bk-panel">
            <div class="bk-panel-header">
                <span><i class="bi bi-clock-history me-2"></i>Recent Transactions</span>
                <a href="{{ route('transactions') }}" class="bk-panel-link">View All <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="bk-panel-body">
                @if($transaction->isEmpty())
                    <div class="bk-empty">
                        <i class="bi bi-inbox bk-empty-icon"></i>
                        <p class="bk-empty-text">No transactions yet</p>
                    </div>
                @else
                    @foreach($transaction as $details)
                        <div class="bk-txn">
                            <div class="bk-txn-icon
                                @if($details->transaction == 'Bank Transfer') bk-txn-out
                                @elseif($details->transaction == 'Loan') bk-txn-in
                                @else bk-txn-neutral
                                @endif">
                                @if($details->transaction == 'Bank Transfer')
                                    <i class="bi bi-arrow-up-right"></i>
                                @elseif($details->transaction == 'Loan')
                                    <i class="bi bi-arrow-down-left"></i>
                                @elseif($details->transaction == 'Crypto Withdrawal')
                                    <i class="bi bi-currency-bitcoin"></i>
                                @elseif($details->transaction == 'Paypal Withdrawal')
                                    <i class="bi bi-paypal"></i>
                                @else
                                    <i class="bi bi-arrow-left-right"></i>
                                @endif
                            </div>
                            <div class="bk-txn-details">
                                <div class="bk-txn-title">{{ Str::limit($details->transaction_description, 35) }}</div>
                                <div class="bk-txn-sub">{{ $details->transaction }} · {{ $details->created_at->format('M d, Y') }}</div>
                            </div>
                            <div class="bk-txn-right">
                                <div class="bk-txn-amount balance-sensitive
                                    @if(in_array($details->transaction, ['Bank Transfer','Paypal Withdrawal','Skrill Withdrawal','Crypto Withdrawal'])) text-danger
                                    @elseif($details->transaction == 'Loan') text-success
                                    @endif">
                                    @if(in_array($details->transaction, ['Bank Transfer','Paypal Withdrawal','Skrill Withdrawal','Crypto Withdrawal']))
                                        −{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
                                    @elseif($details->transaction == 'Loan')
                                        +{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
                                    @else
                                        {{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
                                    @endif
                                </div>
                                <div class="bk-txn-amount balance-sensitive-hidden d-none">••••</div>
                                <div class="mt-1">
                                    @if($details->transaction_status == '1')
                                        <span class="bk-status success">Successful</span>
                                    @elseif($details->transaction_status == '0')
                                        <span class="bk-status pending">Pending</span>
                                    @else
                                        <span class="bk-status failed">Failed</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Row 5 — Investments + Services --}}
{{-- <div class="row g-4 mb-4">
    <!-- Investments -->
    <div class="col-lg-7">
        <div class="db-card h-100">
            <div class="db-card-header d-flex justify-content-between align-items-center">
                <span><i class="bi bi-graph-up me-2"></i>Investments</span>
                <a href="{{ route('cryptopage') }}" class="text-accent fw-500 link-sm">Trade <i class="bi bi-arrow-right"></i></a>
            </div>
            <div class="db-card-body">
                @forelse($trades as $trade)
                    <div class="trade-card mb-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <span class="asset-badge">{{ strtoupper($trade->asset_symbol) }}</span>
                                <span class="fw-600 ms-2">{{ $trade->asset_name }}</span>
                            </div>
                            <span class="fw-600 balance-sensitive">${{ number_format($trade->amount_usd, 2) }}</span>
                            <span class="fw-600 balance-sensitive-hidden d-none">****</span>
                        </div>
                        <div class="d-flex gap-4 small text-muted">
                            <span><strong>Type:</strong> {{ ucfirst($trade->type) }}</span>
                            <span><strong>Qty:</strong> {{ $trade->quantity }}</span>
                            <span><strong>Order:</strong> {{ ucfirst($trade->order_type) }}</span>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-5">
                        <i class="bi bi-graph-up text-muted icon-muted-lg"></i>
                        <p class="text-muted mt-2 mb-0">No investments yet</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Quick Services -->
    <div class="col-lg-5">
        <div class="db-card h-100">
            <div class="db-card-header"><i class="bi bi-grid me-2"></i>Quick Services</div>
            <div class="db-card-body">
                <a href="{{ route('bank') }}" class="service-link-item">
                    <div class="service-link-icon blue"><i class="bi bi-send-fill"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-600">Bank Transfer</h6>
                        <span class="text-muted small">Send to any bank account</span>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
                <a href="{{ route('paypal') }}" class="service-link-item">
                    <div class="service-link-icon yellow"><i class="bi bi-paypal"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-600">PayPal</h6>
                        <span class="text-muted small">Withdraw to PayPal</span>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
                <a href="{{ route('skrill') }}" class="service-link-item">
                    <div class="service-link-icon green"><i class="bi bi-wallet2"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-600">Skrill</h6>
                        <span class="text-muted small">Withdraw to Skrill</span>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
                <a href="{{ route('crypto') }}" class="service-link-item">
                    <div class="service-link-icon red"><i class="bi bi-currency-bitcoin"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-600">Crypto</h6>
                        <span class="text-muted small">Withdraw cryptocurrency</span>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
                <a href="{{ route('loan') }}" class="service-link-item border-0">
                    <div class="service-link-icon accent"><i class="bi bi-cash-stack"></i></div>
                    <div class="flex-grow-1">
                        <h6 class="mb-0 fw-600">Loans</h6>
                        <span class="text-muted small">Apply for a loan</span>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                </a>
            </div>
        </div>
    </div>
</div> --}}

{{-- Card Delivery Modal --}}
<div class="modal fade" id="homeDeliveryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content modal-clean">
            <div class="modal-header">
                <h5 class="modal-title fw-600"><i class="bi bi-truck me-2"></i>Card Delivery Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="homeDeliveryForm" action="{{ route('requestcard.delivery') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-500">Full Name</label>
                        <input type="text" class="form-control" name="fname" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-500">Delivery Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter your full address" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-500">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" placeholder="Enter phone number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-500">Email Address</label>
                        <input type="email" class="form-control" name="emailAddress" value="{{ Auth::user()->email }}" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" form="homeDeliveryForm" class="btn btn-primary"><i class="bi bi-send me-1"></i>Submit Request</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('toggleBalance');
    const eyeIcon = document.getElementById('balanceEyeIcon');
    let hidden = false;

    toggleBtn.addEventListener('click', function () {
        hidden = !hidden;

        // Toggle main balance
        document.querySelectorAll('.balance-visible').forEach(el => el.classList.toggle('d-none', hidden));
        document.querySelectorAll('.balance-hidden').forEach(el => el.classList.toggle('d-none', !hidden));

        // Toggle all sensitive values (stat cards, transactions, card number, investments)
        document.querySelectorAll('.balance-sensitive').forEach(el => el.classList.toggle('d-none', hidden));
        document.querySelectorAll('.balance-sensitive-hidden').forEach(el => el.classList.toggle('d-none', !hidden));

        // Toggle eye icon
        eyeIcon.classList.toggle('bi-eye-fill', !hidden);
        eyeIcon.classList.toggle('bi-eye-slash-fill', hidden);
        toggleBtn.title = hidden ? 'Show balance' : 'Hide balance';
    });
});
</script>
@endpush
