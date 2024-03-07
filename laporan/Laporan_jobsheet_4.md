## A. PROPERTI $fillable DAN $guarded
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


## B. RETRIEVING SINGLE MODELS
1. Buka file controller dengan nama UserController.php dan ubah script
2. Buka file view dengan nama user.blade.php dan ubah script 
3. Simpan kode program Langkah 1 dan 2. Kemudian jalankan link http://localhost:8000/user pada browser
4. Ubah file controller dengan nama UserController.php dan ubah script
5. Simpan kode program Langkah 4. Kemudian jalankan link http://localhost:8000/user pada browser
6. Ubah file controller dengan nama UserController.php dan ubah script
7. Simpan kode program Langkah 6. Kemudian jalankan link http://localhost:8000/user pada browser dan amati
8. Ubah file controller dengan nama UserController.php dan ubah script
9. Simpan kode program Langkah 8. Kemudian jalankan link http://localhost:8000/user pada browser dan amati
10. Ubah file controller dengan nama UserController.php dan ubah script 
11. Simpan kode program Langkah 10. Kemudian jalankan link http://localhost:8000/user pada browser dan amati
