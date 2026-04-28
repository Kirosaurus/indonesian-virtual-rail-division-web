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
        <div class="terms-condition-wrapper">
            <div class="terms-condition-content">
                <h4>Dengan melakukan pembelian konten mod game dari Indonesia Virtual Railway Division (IVRD), pembeli
                    dianggap telah membaca, memahami, dan menyetujui seluruh ketentuan berikut: <br>

                    • Pembeli wajib memberikan data yang benar, jujur, dan dapat dipertanggungjawabkan dalam proses transaksi.
                    • Setiap pembelian bersifat final dan tidak dapat dikembalikan atau ditukar, kecuali terdapat kesalahan
                    dari pihak IVRD.
                    • Konten mod yang telah dibeli hanya diperuntukkan bagi penggunaan pribadi dan tidak diperbolehkan untuk
                    diperjualbelikan kembali, dibagikan, atau didistribusikan tanpa izin resmi dari pihak IVRD.
                    • Pembeli bertanggung jawab penuh atas penggunaan konten mod, termasuk risiko yang mungkin timbul pada
                    perangkat atau sistem yang digunakan.
                    Tidak terdapat batasan usia dalam melakukan pembelian, namun pembeli dianggap telah memiliki kemampuan
                    untuk memahami dan menyetujui ketentuan ini secara sadar.
                    Pembeli diharapkan bersikap amanah serta menjaga kepercayaan dengan tidak menyalahgunakan konten yang
                    telah dibeli.
                    Pihak IVRD berhak melakukan pembaruan, perubahan, atau penyesuaian terhadap konten maupun ketentuan ini
                    sewaktu-waktu tanpa pemberitahuan terlebih dahulu.
                    Segala bentuk pelanggaran terhadap ketentuan ini dapat mengakibatkan pembatasan atau penghentian akses
                    terhadap layanan IVRD.

                    Dengan melanjutkan transaksi, pembeli dianggap menyetujui seluruh syarat dan ketentuan yang berlaku.</h4>
            </div>
        </div>
    </div>


@endsection