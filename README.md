# Task Project "detikcom"
<h2>Digital Perpustakaan berbasis Website - detikcom Menggunakan Laravel 8</h2> 
<h3>Angga Sulistiangga</h3>
<h4>2007411004</h4>
<h4>D4 - Teknik Informatika Politeknik Negeri Jakarta</h4>



# Library yang digunakan :
<ul>
<li>Laravel UI 8</li>
<li>Bootstrap 4</li>
<li>FontAwesome</li>
<li>realrashid/sweet-alert</li>
<li>spatie/pdf-to-image</li>
<li>Template Ruang Admin https://themewagon.com/themes/free-bootstrap-4-html-5-admin-dashboard-website-template-ruang/</li>
<li>Select multiple select</li>
<li>DataTables</li>
<li>DomPDF</li>
</ul>

# Fitur Requirements :
<ol>
Skill Test Assigment Backend Developer of CTARSA Magang Kampus Merdeka :
<ul>
<p>
<li>Requirement : PHP Native atau Framework (Codeigniter/Laravel), Database (MySQL), JavaScript, HTML, CSS Native atau Framework
<p>
<li>Title Project : Digital Perpustakaan berbasis Website
<p>
<li>Test : Membuat CMS (Content Management System) untuk pengelolaan konten yang berisikan
<p>
<ul>
<li>a. Login (Admin dan User)
<p>
<li>b. Register
<p>
<li>c. Daftar/List Data Buku
<p>
<li>d. Daftar/List Data Buku terdapat filter berdasarkan Kategori Buku
<p>
<li>e. Action Master Data Buku (Create, Read, Update, Delete dan Upload File)
<p>
<li>f. Form Data Buku berisi : Judul Buku, Kategori Buku (dropdown), Deskripsi, Jumlah, Upload File Buku (PDF) dan Upload Cover Buku (jpeg/jpg/png)
<p>
<li>g. Daftar/List Data Kategori Buku
<p>
<li>h. Action Master Data Kategori Buku (Creat, Read, Update dan Delete)
<p>
<li>i. Form Data Buku berisi : Nama Kategori Buku
<p>
<li>j. Export Data (Excel/PDF) dari Data Buku
<p>
<li>k. Hak Akses (Privilege) dibatasi hanya dapat membuka, melihat, mengedit dan menghapus Daftar/List Data Buku sesuai dengan data yang dibuat oleh user itu sendiri (kecuali admin)

<p>
</ol>
Final Format : Project dan Database dikumpulkan dalam bentuk .RAR atau .ZIP dalam google drive

<p>

### 👤 Default Akun untuk login
	
**Admin Default Akun**
- Username: admin@admin.com
- Password: admin123

**Siswa Default Akun**
- Username: anggasulistiangga@gmail.com
- Password: 12345678

## 💻 Install

1. **Extract Zip**
```bash
cd Sistem-Digital-Perpustakaan
composer install
composer update
npm install
copy .env.example .env
```

1. **Buka ```.env``` lalu sesuaikan dengan database yang dibuat pada localhost.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=digital_perpustakaan
DB_USERNAME=root
DB_PASSWORD=
```
3. **Instalasi website**
```bash
php artisan key:generate
php artisan migrate
php artisan serve (Untuk Menjalankan Website)
```
</ul>

# Mungkin Masih Banyak Kekurangan pada pembuatan Website ini dan dirasa tidak sesempurna dengan ``requirement`` yang diminta, Jadi saya pribadi meminta maaf atas kekurangan tersebut :)

<ul>Best Regards,
<p>
<li>Angga Sulistiangga
