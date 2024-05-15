@extends('layouts.app')

@section('title', 'Pembayaran')

@section('content')
    <h1><i class="fas fa-credit-card"></i> Pembayaran</h1>

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="payment_method">Metode Pembayaran</label>
            <select class="form-control" id="payment_method" name="payment_method" required>
                <option value="credit_card">Kartu Kredit</option>
                <option value="paypal">PayPal</option>
                <option value="bank_transfer">Transfer Bank</option>
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" class="form-control" id="amount" name="amount" min="0" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="fas fa-money-check-alt"></i> Bayar
        </button>
    </form>
@endsection
