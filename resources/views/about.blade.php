@extends('layout')

@section('title', 'About - User Stories for E-Commerce Product Management')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">About - User Stories for E-Commerce Product Management</h1>

    <p>Di bawah ini adalah beberapa user story untuk aplikasi manajemen produk e-commerce. Setiap user story mewakili kebutuhan atau harapan pengguna untuk berbagai fitur dalam aplikasi ini:</p>

    <div class="list-group">
        <!-- User Story 1 -->
        <div class="list-group-item">
            <h5 class="mb-1">1. Menambahkan Produk Baru</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin menambahkan produk baru ke dalam sistem, sehingga produk tersebut bisa tampil di toko online dan tersedia untuk pelanggan.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat mengakses halaman form untuk menambah produk baru, mengisi detail produk, dan menyimpan produk untuk ditampilkan di daftar produk.</p>
        </div>

        <!-- User Story 2 -->
        <div class="list-group-item">
            <h5 class="mb-1">2. Mengedit Informasi Produk</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin mengedit informasi produk yang sudah ada, sehingga saya dapat memperbarui detail seperti harga, stok, atau deskripsi produk.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat membuka halaman edit untuk setiap produk dan menyimpan perubahan yang diperbarui.</p>
        </div>

        <!-- User Story 3 -->
        <div class="list-group-item">
            <h5 class="mb-1">3. Menghapus Produk</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin menghapus produk yang sudah tidak tersedia atau tidak dijual lagi, sehingga produk tersebut tidak muncul di toko online dan pelanggan tidak bisa membelinya.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat menghapus produk setelah konfirmasi, dan produk yang dihapus tidak lagi muncul di daftar produk.</p>
        </div>

        <!-- User Story 4 -->
        <div class="list-group-item">
            <h5 class="mb-1">4. Melihat Daftar Produk</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin melihat daftar semua produk yang tersedia di toko, sehingga saya dapat dengan mudah memantau stok, harga, dan informasi lainnya.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat melihat daftar produk dengan detail utama dan opsi edit/hapus.</p>
        </div>

        <!-- User Story 5 -->
        <div class="list-group-item">
            <h5 class="mb-1">5. Menyaring dan Mencari Produk</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin menyaring dan mencari produk berdasarkan nama atau kategori, sehingga saya bisa dengan cepat menemukan produk yang ingin saya kelola.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat menyaring produk berdasarkan nama/kategori dan melihat hasilnya.</p>
        </div>

        <!-- User Story 6 -->
        <div class="list-group-item">
            <h5 class="mb-1">6. Melihat Produk sebagai Pelanggan</h5>
            <p class="mb-1"><strong>Sebagai</strong> pelanggan, saya ingin melihat informasi produk yang tersedia di toko, sehingga saya dapat memilih produk yang sesuai dengan kebutuhan saya.</p>
            <p><strong>Acceptance Criteria:</strong> Pelanggan dapat melihat detail produk dengan harga, deskripsi, dan gambar.</p>
        </div>

        <!-- User Story 7 -->
        <div class="list-group-item">
            <h5 class="mb-1">7. Menambahkan Produk ke Keranjang</h5>
            <p class="mb-1"><strong>Sebagai</strong> pelanggan, saya ingin menambahkan produk ke keranjang belanja saya, sehingga saya dapat menyimpan produk yang ingin saya beli dan melanjutkan berbelanja.</p>
            <p><strong>Acceptance Criteria:</strong> Pelanggan dapat menambahkan produk ke keranjang dan melihatnya di halaman checkout.</p>
        </div>

        <!-- User Story 8 -->
        <div class="list-group-item">
            <h5 class="mb-1">8. Membayar Produk</h5>
            <p class="mb-1"><strong>Sebagai</strong> pelanggan, saya ingin membayar produk yang sudah saya tambahkan ke keranjang, sehingga saya bisa menyelesaikan transaksi dan menerima produk tersebut.</p>
            <p><strong>Acceptance Criteria:</strong> Pelanggan dapat menyelesaikan pembayaran dengan konfirmasi akhir transaksi.</p>
        </div>

        <!-- User Story 9 -->
        <div class="list-group-item">
            <h5 class="mb-1">9. Melihat Laporan Penjualan</h5>
            <p class="mb-1"><strong>Sebagai</strong> admin, saya ingin melihat laporan penjualan harian, mingguan, dan bulanan, sehingga saya dapat menganalisis performa toko dan mengambil keputusan bisnis.</p>
            <p><strong>Acceptance Criteria:</strong> Admin dapat memilih periode waktu dan melihat ringkasan total penjualan serta mengunduh laporan.</p>
        </div>
    </div>
</div>
@endsection
