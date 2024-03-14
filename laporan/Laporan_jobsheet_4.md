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
2. Simpan kode program Langkah 1. Kemudian jalankan pada browser   
3. Buat agar jumlah script pada langkah 1 bisa tampil pada halaman browser, sebagai contoh bisa lihat gambar di bawah ini dan ubah script pada file view supaya bisa muncul datanya

## 2.4 Retreiving or Creating Models
1. Ubah file controller dengan nama UserController.php dan ubah script 
2. Ubah kembali file view dengan nama user.blade.php dan ubah script  
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan pada browser dan amati apa yang terjadi  
4. Ubah file controller dengan nama UserController.php dan ubah script  
5. Simpan kode program Langkah 4. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user   
6. Ubah file controller dengan nama UserController.php dan ubah script  
7. Simpan kode program Langkah 6. Kemudian jalankan pada browser dan amati  
8. Ubah file controller dengan nama UserController.php dan ubah script  
9. Simpan kode program Langkah 8. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user   
10. Ubah file controller dengan nama UserController.php dan ubah script  
11. Simpan kode program Langkah 9. Kemudian jalankan pada browser dan amati apa yang terjadi dan cek juga pada phpMyAdmin pada tabel m_user  

## 2.5 Attribute Changes


