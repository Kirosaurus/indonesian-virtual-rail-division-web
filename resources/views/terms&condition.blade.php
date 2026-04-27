@extends('layouts.app')

@section('title', 'Terms & Condition')

@section('content')
    <div class="main-terms-condition">
        {{-- Top bar --}}
        <div style="display: flex; align-items: center; gap: 10px;">
            <button class="sidebar-button">
                <img src="{{ asset('menu.svg') }}" height="30" width="30" alt="Menu" />
            </button>
            <h1 class="title-terms">Terms & Condition</h1>
            <div style="width: 100%; display: flex; flex-direction: column; align-items: flex-end;">
                <button class="login-button">Login</button>
            </div>
        </div>

        {{-- Terms & Condition Content --}}
        <div class="terms-condition-content">
            
        </div>
    </div>


@endsection