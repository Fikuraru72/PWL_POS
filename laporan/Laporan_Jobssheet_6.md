# A. Template Form (AdminLTE)
1. Lakukan extract All dan ubah nama folder AdminLTE-3.2.0 menjadi template, folder template pindahkan ke laragon/www/PWL_2024/public. Buka folder public pada VSCode maka akan tampil folder baru bernama template  
2. Copy isi public/template/index2.html pada welcome.blade.php lalukan edit agar dapat diload, edit href =”{{ asset (‘template/…..’) }}” dan src= ” {{ asset (‘template/…..’) }}” sesuai gambar berikut : 
3. Jalankan pada browser  
4. Buka file pada form> general cari keyword dengan ‘general elements’ dan coba modifikasi pada welcome.blade.php  
5. Eksplorasi jenis form pada adminLTE dan coba terapkan yang sesuai untuk studi kasus POS PWL, buatlah form untuk tabel m_user dan m_level  


# B. Validasi Pada Server
1. Buka kembali file tugas di jobsheet 05, klik dan baca documentation ini Validation - Laravel 10.x - The PHP Framework For Web Artisans   
2. Pastikan sudah terdefinisikan route pada web.php :  
-      Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
       Route::get('/kategori/create', [KategoriController::class, 'create'])->name('/kategori/create');
3. Edit pada KategoriKontroller dengan kode:  
4. Tulis perbedaan penggunaan validate dengan validateWithBag!  
5. tetapkan bail aturan ke atribut: coba sesuaikan dengan field pada m_kategori, apa yang terjadi ?  
-        $validate = $request->validate ([
            'kategori_kode' => 'bail|required|string|max:10',
            'kategori_nama' => 'required',
        ]);   
- Success :  
    ![alt text](<../screenshoot/jobsheet 6/1.png>)

- Failed  :  
    ![alt text](<../screenshoot/jobsheet 6/1.png>)
6. Pada view/create.blade.php tambahkan code berikut agar ketika validasi gagal, kita dapat menampilkan pesan kesalahan dalam tampilan:  
7. Screenshot hasilnya  
8. Pada view/create.blade.php tambahkan dan coba running code berikut :


# C. Form Request Validation
# D. CRUD(create, read, update, delete)
# Tugas
