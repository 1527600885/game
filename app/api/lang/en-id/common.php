<?php
return array(
	'system'=> [
		'iperror' => 'Karena Anda tidak berada di daerah akses, akses Anda telah diblokir oleh sistem',
		'id' => 'Galat parameter',
		'success' => 'Memuatkan berhasil',
		'code' => 'Kode Verifikasi',
		'hi' => 'Halo?',
		'sendcode' => 'Silakan kirim kode verifikasi',
		'page' => 'halaman',
		'email_configure_error'=> 'Sistem tidak memiliki kotak surat dikonfigurasi',
		'authenticate'=>'Galat SMTP kotak surat: Login gagal. Silakan periksa bahwa akun dan sandi telah dimasukkan dengan benar.',
		'connect_host'=>'Galat SMTP kotak surat: Tidak dapat tersambung ke host SMTP. Silakan periksa apakah SMTP, port dan metode pengiriman benar.',
		'data_not_accepted'=>'Galat SMTP kotak surat: Tidak ada data diterima.',
		'empty_message'=>'isi kotak surat tidak dapat kosong',
		'encoding'=>'Kotak surat kode tidak dikenal',
		'execute'=>'Kotak surat gagal dieksekusi',
		'file_access'=>'Kotak surat tidak dapat mengakses berkas',
		'file_open'=>'Kotak surat tidak dapat mengakses berkas',
		'from_failed'=>'Galat alamat e-mail',
		'instantiate'=>'Panggilan fungsi kotak surat tidak dikenal',
		'invalid_email'=>'Email tidak dikirim, alamat email tidak valid',
		'mailer_not_supported'=>'Klien pengiriman kotak surat tidak didukung',
		'provide_address'=>'Kotak surat harus menyediakan setidaknya satu alamat penerima',
		'recipients_failed'=>'Galat SMTP email, alamat penerima',
		'signing'=>'Galat tanda tangan email',
		'smtp_connect_failed'=>'Sambungan SMTP kotak surat () gagal',
		'smtp_error'=>'Galat Server SMTP Mailbox',
		'variable_set'=>'Kotak surat tidak dapat menetapkan atau reset variabel',
		'nickname_default'=>'Tanpa Nama',
		'describe'=>'Orang ini sangat malas dan tidak meninggalkan apa-apa.',
		'operation_succeeded'=>'Operasi berhasil',
		'operation_failed'=>'Operasi gagal',
		'currency_name'=>'Pembayaran uang digital',
		'online_name'=>'Pembayaran online',
		'creditcards'=>'Kartu Kredit Diterima',
		'setting_succeeded'=>'Pengaturan berhasil'
	],
	'user'=> [
		'accountnot' => 'Akaun tidak ada',
		'wrong'=> 'Kata sandi atau akun yang salah',
		'shield'=> 'Akaunmu diblokir',
		'login'=> 'Login berhasil',
		'email'=> 'Format nomor email tidak benar',
		'mobileEmpty'=> 'Silakan isi nomor ponsel Anda',
		'accountEmpty'=> 'Silakan isi nomor rekening',
		'captchaEmpty'=> 'Silakan isi kode verifikasi',
		'captchaError'=> 'Kode verifikasi yang salah',
		'nicknameEmpty'=> 'Nama panggilan tidak dapat kosong',
		'nicknameError'=> 'Nama panggilan tidak dapat melebihi 40',
		'describeError'=> 'Jumlah tanda tangan tidak dapat melebihi 255',
		'passwordEmpty'=> 'Silakan isi kata sandi',
		'passwordconfirm'=> 'Kata sandi berbeda',
		'passwordMin'=> 'Kata sandi tidak dapat kurang dari 6',
		'passwordMax'=> 'Kata sandi tidak bisa lebih dari 12',
		'passwordAlphaNum'=>'Hanya angka dan huruf Inggris yang dapat dimasukkan',
		'tokenEmpty'=> 'TOKEN kosong!',
		'tokenExpired'=> 'TOKEN habis!',
		'tokenError'=> 'Kesalahan validasi!',
		'accountBlocked'=> 'Akaun ini diblokir!',
		'notRegister'=> 'Pengguna belum terdaftar',
		'emailoccupy'=>'Nomor e-mail telah terdaftar',
		'userregister'=>'Registrasi Pengguna',
		'codeerror'=>'Galat kode verifikasi email',
		'emailerror'=>'Nomor e-mail telah terdaftar',
		'registersuccess'=>'login berhasil',
		'unregistered'=>'Email not registered',
		'forgot'=>'Lupakan kata sandi',
		'mobileexistence'=>'Nomor ponsel ini telah terdaftar',
		'mobilesuccess'=>'Pengikatan berhasil',
		'sex'=>'Silakan pilih jenis',
		'pay_paasword_require'=>'Kata sandi pembayaran diperlukan',
		'pay_paasword_length'=>'Kata sandi pembayaran harus enam digit',
		'bindemail'=>'Bind kotak surat',
		'inviteusers'=>'Panggil Pengguna',
		'inviteregister'=>'Daftar untuk',
		'safetylow'=>'rendah',
		'safetycommonly'=>'Commonly',
		'safetyhigh'=>'Tinggi',
		'safetyperfect'=>'Sempurna',
		'addresseror' =>'Blockchain address error',
        'toyouself'   =>'Cannot transfer or gift to yoursel',
        'pay_paasword_empty'=>'Payment password is empty',
        'UNGinsufficient' => 'Your UNG coin balance is insufficient',
        'pay_paasword_error' => 'Transaction password error',
        'pay_ungnum_error' => 'Staked amount error',
        'buy_limit_error' => 'Less than the minimum purchase quantity',
        'ung_Insufficient' =>'Insufficient UNG coins',
        'banlance_none' => 'Your balance is insufficient',
        'buy_field' => 'Purchase failed',
        'ungaddressempty' =>'Blockchain address cannot be empty',
        'ungaddresserror' =>'Blockchain address error',
        'quantityempty'   =>'Quantity cannot be empty',
        'quantitynumber'  =>'Quantity must be numeric',
        'quantityerror'   =>'quantity error',
        'userverify'=>'Please verify your account first',
        "realnameverification" =>"Real-name authentication required for UNG transfer and redemption."
	],
	'game'=>[
		'money_funds'=>'Dana yang tidak cukup',
		'run_game'=>'Sukses dimulai, silakan tunggu',
		'synchronizing_funds'=>'Sinkronisasi dana selesai',
		'no_funds_synchronized'=>'Tidak ada dana dapat disenkronisasi',
	],
	'order'=>[
		'mobileEmpty'=>'Nomor telepon terikat',
		'toolittle'=>'Jumlah uang digital terlalu kecil!',
		'toofast'=>'Bayar terlalu cepat, istirahat dan kembali',
		'ordersuccess'=>'Payment succeeded, please wait for the administrator to approve...',
		'ordererror'=>'Pembayaran gagal, silakan coba lagi',
		'placedata'=>'Beli uang permainan',
		'placesuccess'=>'Tolong tunggu...',
		'placeerror'=>'Silakan tunggu administrator untuk menangani masalah pembayaran!',
		'currencyvalue'=>'Silakan pilih uang yang akan dimuat ulang',
		'currencyerror'=>'Maaf, transaksi dalam uang ini tidak didukung saat ini',
	],
	'capital'=>[
		'user'=>'pengguna',
		'content'=>'Didapatkan melalui muat ulang online',
		'money'=>'dolar',
		'gamecontento'=>'Mainkan permainan',
		'gamecontentt'=>'Tingkat dana',
		'gamecontenth'=>'Kurangkan dana',
		'gamecontentf'=>'Kapital tidak berubah',
	],
	'recharge'=>[
		'digital'=>'USDT/BTC/ETH muat ulang',
		'cash'=>'Pencarian ulang uang',
		'Credit'=>'Memuatkan ulang kartu kredit'
	]
);
?>