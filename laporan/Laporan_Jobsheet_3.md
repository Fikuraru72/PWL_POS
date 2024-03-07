1. Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?  
   Jawaban :  
   APP_KEY merupakan sebuah enkripsi yang digunakan untuk mengamankan databse.

2. Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?  
   jawaban :  
   Untuk mengenerate APP_KEY dapat menggunakan printah berikut pada terminal "php artisan key:generate".

3. Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?  
   Jawaban :  
   Terdapat 4 file migrasi yang digunakan untuk membuat table user, token password, log error, dan personal token.

4. Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?  
   Jawaban :  
   Tujuan dari timestamp digunakan untuk membuat kolom log perubahan data

5. Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?
   Jawaban :
   Menggunakan tipe data Big Integer.

6. Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id'); ?
Jawaban : 
$table->id('level_id') melakukan migrasi dengan nama kolom id/primary key level_id, sedangkan $table->id(); migrasi dengan nama kolom defaul id.

7. Pada migration, Fungsi ->unique() digunakan untuk apa?
   Jawaban :  
   code tersebut bertujuan bahwa data yang di masukan pada kolom tersebut harus uniqe atau tidak boleh sama

8. Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id') ?  
   Jawaban :  
   Karena pada tabel m_user kolom level_id sebagai foregin Key, sedangkan pada tabel m_level sebagai primary key.

9. Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?  
   Jawaban :  
   kode program tersebut akan melakukan eksripsi data menjadi hash sebelum di simpan pada database.

10. Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?  
    Jawaban :  
    Tanda ? digunakan sebagai placeholder atau penanda untuk parameter dalam query SQL.

11. Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = ‘m_user’; dan protected $primaryKey = ‘user_id’; ?  
    jawaban :  
    Pada kode tersebut melakukan enkapsulasi pada variabel agar data di dapat di akses dari secara global, hanya dapat digunakan di dalam class tersebut.

12. Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM) ? jelaskan  
    Jawaban :  
    dalam melakukan CRUD lebih mudah digunakan dengan Query Builder, karena memiliki susuan yang mudah dipahami dan ringkas.
