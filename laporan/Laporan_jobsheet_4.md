# A. PROPERTI $fillable DAN $guarded
1. Buka file model dengan nama UserModel.php dan tambahkan $fillable 
![Alt text](../screenshoot/1.png)
2. Buka file controller dengan nama UserController.php dan ubah script untuk menambahkan data baru   
![Alt text](../screenshoot/2.png)  
3. Simpan kode program Langkah 1 dan 2, dan jalankan perintah web server. Kemudian jalankan link localhostPWL_POS/public/user pada browser  
![Alt text](../screenshoot/3.png)  
4. Ubah file model UserModel.php seperti pada gambar di bawah ini pada bagian $fillabl  
![Alt text](../screenshoot/4.png)
5. Ubah kembali file controller UserController.php seperti pada gambar di bawah hanya bagian array pada $data  
![Alt text](../screenshoot/5.png)   
6. Simpan kode program Langkah 4 dan 5. Kemudian jalankan pada browser dan amati apa yang terjadi   
![Alt text](../screenshoot/6.png)  
7. Kebalikan dari $fillable adalah $guarded. Semua kolom yang kita tambahkan ke $guarded akan diabaikan oleh Eloquent ketika kita melakukan insert/update. Secara default $guarded isinya array("*"), yang berarti semua atribut tidak bisa diset melalui mass assignment (jabarkan istilah ini)   


# B. RETRIEVING SINGLE MODELS
## 2.1 etrieving Single Models
1. Buka file controller dengan nama UserController.php dan ubah script   
![Alt text](../screenshoot/7.png)  
2. Buka file view dengan nama user.blade.php dan ubah script  
![Alt text](../screenshoot/8.png)   
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan link http://localhost:8000/user pada browser   
![Alt text](../screenshoot/9.png)  
4. Ubah file controller dengan nama UserController.php dan ubah script   
![Alt text](../screenshoot/10.png)  
5. Simpan kode program Langkah 4. Kemudian jalankan link http://localhost:8000/user pada browser
![Alt text](../screenshoot/9.png)  
6. Ubah file controller dengan nama UserController.php dan ubah script
![Alt text](../screenshoot/11.png)  
7. Simpan kode program Langkah 6. Kemudian jalankan link http://localhost:8000/user pada browser dan amati  
![Alt text](../screenshoot/9.png)  
8. Ubah file controller dengan nama UserController.php dan ubah script  
![Alt text](../screenshoot/12.png)  
9. Simpan kode program Langkah 8. Kemudian jalankan link http://localhost:8000/user pada browser dan amati   
![Alt text](../screenshoot/13.png)   
10. Ubah file controller dengan nama UserController.php dan ubah script 
![Alt text](../screenshoot/14.png)   
11. Simpan kode program Langkah 10. Kemudian jalankan link http://localhost:8000/user pada browser dan amati
![Alt text](../screenshoot/15.png)   

## 2.2 Not Found Exceptions
1. Ubah file controller dengan nama UserController.php dan ubah script   
![alt text](../screenshoot/16.png)  
2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi  
![alt text](../screenshoot/17.png)  
3. Ubah file controller dengan nama UserController.php dan ubah script  
![alt text](../screenshoot/18.png)  
4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi  
![alt text](../screenshoot/19.png)   


## 2.3 Retreiving Aggregrates
1. Ubah file controller dengan nama UserController.php dan ubah script   
![alt text](../screenshoot/20.png)   
2. Simpan kode program Langkah 1. Kemudian jalankan pada browser   
![alt text](../screenshoot/21.png)   
3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya
![alt text](../screenshoot/22.png)   
![alt text](../screenshoot/23.png)   

## 2.4 Retreiving or Creating Models
1. Ubah file controller dengan nama UserController.php dan ubah script 
![alt text](../screenshoot/24.png)   
2. Ubah kembali file view dengan nama user.blade.php dan ubah script  
![alt text](../screenshoot/25.png)   
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi 
![alt text](../screenshoot/26.png)   
4. Ubah file controller dengan nama UserController.php dan ubah script  
![alt text](../screenshoot/27.png)   
5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user   
![alt text](../screenshoot/28.png)   
![alt text](../screenshoot/29.png)   
6. Ubah file controller dengan nama UserController.php dan ubah script  
![alt text](../screenshoot/30.png)   
7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati  
![alt text](../screenshoot/31.png)   
8. Ubah file controller dengan nama UserController.php dan ubah script  
![alt text](../screenshoot/32.png)   
9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user  
![alt text](../screenshoot/33.png)   
10. Ubah file controller dengan nama UserController.php dan ubah script  
![alt text](../screenshoot/34.png)   
11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user  
![alt text](../screenshoot/35.png)   

## 2.5 Attribute Changes
1. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini  
![alt text](../screenshoot/36.png)   
2. Simpan kode program Langkah 1. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/37.png)   
3. Ubah file controller dengan nama UserController.php dan ubah script seperti gambar di bawah ini  
![alt text](../screenshoot/38.png)   
4. Simpan kode program Langkah 3. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan  

## 2.6 CRUD
1. Buka file view pada user.blade.php dan buat scritpnya menjadi seperti di bawah ini  
![alt text](../screenshoot/39.png)   
2. Buka file controller pada UserController.php dan buat scriptnya untuk read menjadi seperti di bawah ini  
![alt text](../screenshoot/40.png)   
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/41.png)   
4. Langkah berikutnya membuat create atau tambah data user dengan cara bikin file baru pada view dengan nama user_tambah.blade.php dan buat scriptnya menjadi seperti di
bawah ini  
![alt text](../screenshoot/42.png)   
5. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini  
![alt text](../screenshoot/43.png)   
6. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah dan diletakan di bawah method index seperti gambar di bawah ini
![alt text](../screenshoot/44.png)   
7. Simpan kode program Langkah 4 s/d 6. Kemudian jalankan pada browser dan klik link “+ Tambah User” amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/45.png)   
8. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini  
![alt text](../screenshoot/46.png)   
9. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama tambah_simpan dan diletakan di bawah method tambah seperti gambar di bawah ini  
![alt text](../screenshoot/47.png)   
10. Simpan kode program Langkah 8 dan 9. Kemudian jalankan link localhost:8000/user/tambah atau localhost/PWL_POS/public/user/tambah pada browser dan input formnya dan simpan, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/48.png)   
11. Langkah berikutnya membuat update atau ubah data user dengan cara bikin file baru pada view dengan nama user_ubah.blade.php dan buat scriptnya menjadi seperti di bawah ini 
![alt text](../screenshoot/49.png)   
12. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini  
![alt text](../screenshoot/50.png)   
13. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah dan diletakan di bawah method tambah_simpan seperti gambar di bawah ini  
![alt text](../screenshoot/51.png)   
14. Simpan kode program Langkah 11 sd 13. Kemudian jalankan pada browser dan klik link “Ubah” amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/52.png)   
15. Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini  
![alt text](../screenshoot/53.png)   
16. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama ubah_simpan dan diletakan di bawah method ubah seperti gambar di bawah ini  
![alt text](../screenshoot/54.png)   
17. Simpan kode program Langkah 15 dan 16. Kemudian jalankan link localhost:8000/user/ubah/1 atau localhost/PWL_POS/public/user/ubah/1 pada browser dan ubah input formnya dan klik tombol ubah, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/55.png)   
18. Berikut untuk langkah delete . Tambahkan script pada routes dengan nama file web.php. Tambahkan seperti gambar di bawah ini  
![alt text](../screenshoot/56.png)   
19. Tambahkan script pada controller dengan nama file UserController.php. Tambahkan script dalam class dan buat method baru dengan nama hapus dan diletakan 
![alt text](../screenshoot/57.png)   
20. Simpan kode program Langkah 18 dan 19. Kemudian jalankan pada browser dan klik tombol hapus, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan  
![alt text](../screenshoot/41.png)   
![alt text](../screenshoot/58.png)   


## 2.7 Relationships
1. Buka file model pada UserModel.php dan tambahkan scritpnya menjadi seperti di bawah ini
![alt text](../screenshoot/59.png)   
2. Buka file controller pada UserController.php dan ubah method script menjadi seperti di bawah ini
![alt text](../screenshoot/60.png)   
3. Simpan kode program Langkah 2. Kemudian jalankan link pada browser, kemudian amati apa yang terjadi dan beri penjelasan dalam laporan






