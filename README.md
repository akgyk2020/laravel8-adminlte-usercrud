<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

Install Laravel

Untuk menginstall laravel pastikan composer & PHP sudah terinstall. Composer sebaiknya menggunakan composer versi 2 dan PHP minimal versi PHP 7.3. Jalankan perintah dibawah ini untuk menginstall laravel :
composer create-project laravel/laravel crud-laravel-adminlte

Langkah selanjutnya adalah melakukan pengaturan database. Silahkan buat database baru di MySQL (bisa menggunakan PHPMyAdmin atau SQL client lainnya) dengan nama crud_laravel
.
Mengatur database untuk CRUD User Laravel AdminLTE

Kemudian ubah file .env yang ada di root project dan sesuaikan pengaturan database menjadi seperti dibawah ini :
# ..... kode lainnya
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel
DB_USERNAME=root
DB_PASSWORD=
# ..... kode lainnya

Terakhir jalankan perintah php artisan migrate
untuk melakukan migrasi database. Sampai tahap ini proses instalasi laravel & database sudah selesai.

Untuk mencobanya silahkan jalankah perintah php artisan serve
untuk menjalankan laravel di localhost, kemudian buka url : http://127.0.0.1:8000, jika berhasil akan muncul tampilan seperti dibawah ini :
Halaman awal Laravel hasil instalasi
Integrasi AdminLTE

Ada beberapa cara untuk melakukan integrasi adminlte dengan laravel, salah satunya dengan menggunakan package laravel adminlte yang dibuat oleh Jeroen Noten. Package ini bisa ditemukan di github : https://github.com/jeroennoten/Laravel-AdminLTE.

Install laravel adminlte dengan menggunakan perintah :
composer require jeroennoten/laravel-adminlte

Selanjutnya jalankan juga perintah :
php artisan adminlte:install

Perintah diatas diperlukan untuk menginstall component-component yang ada di package laravel adminlte.

Selanjutnya kita harus menginstall laravel UI, ini dibutuhkan karena package menggunakan laravel UI untuk sistem authentikasinya. Jalankan perintah :
composer require laravel/ui
php artisan ui bootstrap --auth
php artisan adminlte:install --type=full
php artisan adminlte:plugins install

Jika muncul permintaan konfirmasi pada saat menjalankan perintah, silahkan ketik yes saja.

Silahkan coba akses http://127.0.0.1:8000/login seharusnya pada tahap ini halaman login adminlte sudah tampil di aplikasi yang kita buat.

Silahkan daftarkan akun baru untuk login ke sistem pada link http://127.0.0.1:8000/register
Konfigurasi Halaman Admin

Langkah selanjutnya adalah melakukan konfigurasi dan pengaturan halaman admin. Hal pertama yang akan kita lakukan adalah mengatur menu.
Konfigurasi Menu

Silahkan buka file config/adminlte.php
, kemudian cari blok :
'menu' => [
    # ......
    # kode lainnya 
    # ......
]

silahkan ganti menjadi seperti ini :
'menu' => [
    [
        'text' => 'User',
        'url'  => '/users',
        'icon'  => 'fa fa-users',
    ],
],

pada tahap ini kita menambahkan menu baru pada halaman admin yaitu menu User.
Konfigurasi plugins datatable

Selanjutnya adalah menginstall plugins datatable. Plugins ini nantinya digunakan untuk menampilkan data user.

Silahkan cari blok ini (di file config/adminlte.php) :
'plugins' => [
    
    # .... kode lainnya ....
    'Datatables' => [
        # .... kode lainnya ....
    ],
    # .... kode lainnya ....
]

kemudian ganti dengan kode seperti dibawah ini :
'plugins' => [
    
    # .... kode lainnya ....
    'Datatables' => [
        'active' => true,
        'files' => [
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/datatables/js/jquery.dataTables.min.js',
            ],
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/datatables/js/dataTables.bootstrap4.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/datatables/css/dataTables.bootstrap4.min.css',
            ],
        ],
    ],
    # .... kode lainnya ....
]
Konfigurasi plugins sweetalert2

Selanjutnya kita install plugins sweetalert2. Plugin ini digunakan untuk menampilkan notifikasi.

Silahkan cari blok dibawah ini (masih di file config/adminlte.php) :
'plugins' => [
    
    # .... kode lainnya ....
    'Sweetalert2' => [
        # .... kode lainnya ....
    ],
    # .... kode lainnya ....
]

kemudian ganti menjadi seperti dibawah ini :
'plugins' => [
    
    # .... kode lainnya ....
    'Sweetalert2' => [
        'active' => true,
        'files' => [
            [
                'type' => 'js',
                'asset' => true,
                'location' => '/vendor/sweetalert2/sweetalert2.min.js',
            ],
            [
                'type' => 'css',
                'asset' => true,
                'location' => '/vendor/sweetalert2/sweetalert2.min.css',
            ],
        ],
    ],
    # .... kode lainnya ....
]
Membuat Component Notifikasi

Langkah selanjutnya adalah membuat component notifikasi. Silahkan jalankan perintah :
php artisan make:component NotificationComponent

kemudian ubah file app/View/Components/NotificationComponent.ph
p menjadi seperti dibawah ini :
<?php
namespace App\View\Components;
use Illuminate\View\Component;
class NotificationComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.notification-component');
    }
}

ubah juga file resources/views/components/notification-component.blade.php
menjadi seperti dibawah ini :
<div>
    
</div>
@push('js')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        function toast_show(icon, message) {
            Toast.fire({
                icon: icon,
                title: message
            })
        }
        function success_message(message)
        {
            toast_show('success', message);
        }
        function info_message(message)
        {
            toast_show('info', message);
        }
        function error_message(message)
        {
            toast_show('error', message);
        }
        function warning_message(message)
        {
            toast_show('warning', message);
        }
    </script>
    @if($message = \Illuminate\Support\Facades\Session::get('success_message'))
        @if(is_iterable($message))
            @foreach($message as $m)
                <script>
                    success_message('{{addslashes($m)}}');
                </script>
            @endforeach
        @else
            <script>
                success_message('{{addslashes($message)}}');
            </script>
        @endif
    @endif
    @if($message = \Illuminate\Support\Facades\Session::get('info_message'))
        @if(is_iterable($message))
            @foreach($message as $m)
                <script>
                    info_message('{{addslashes($m)}}');
                </script>
            @endforeach
        @else
            <script>
                info_message('{{addslashes($message)}}');
            </script>
        @endif
    @endif
    @if($message = \Illuminate\Support\Facades\Session::get('warning_message'))
        @if(is_iterable($message))
            @foreach($message as $m)
                <script>
                    warning_message('{{addslashes($m)}}');
                </script>
            @endforeach
        @else
            <script>
                warning_message('{{addslashes($message)}}');
            </script>
        @endif
    @endif
    @if($message = \Illuminate\Support\Facades\Session::get('error_message'))
        @if(is_iterable($message))
            @foreach($message as $m)
                <script>
                    error_message('{{addslashes($m)}}');
                </script>
            @endforeach
        @else
            <script>
                error_message('{{addslashes($message)}}');
            </script>
        @endif
    @endif
@endpush
Memasang component notifikasi ke template adminlte

Langkah terakhir pada konfigurasi halaman admin ini adalah memasang component notifikasi yang baru saja kita buat ke template adminlte.

Silahkan jalankan perintah :
php artisan adminlte:install --only=main_views

kemudian buka file resources/views/vendor/adminlte/page.blade.php
, kemudian cari blok :
# .... kode lainnya 
@section('body')
    # ... kode lainnya 
@stop
# ... kode lainnya 

tambahkan kode <x-notification-component/>
di dalam section body sehingga menjadi seperti dibawah ini :
# .... kode lainnya 
@section('body')
    # ... kode lainnya 
    
       <x-notification-component/>
    
@stop
# ... kode lainnya 
Membuat CRUD User

Ini merupakan tahap utama sekaligus tahap terakhir dari artikel ini.
Membuat Controller User

Jalankan perintah php artisan make:controller UserController --resource
.
Membuat Routing User

Tambahkan kode dibawah ini pada file routes/web.php
:
Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');
Menampilkan User

Silahkan ubah file app/Http/Controllers/UserController.php
, kemudian ganti method index() dengan kode dibawah ini :
public function index()
{
    $users = User::all();
    return view('users.index', [
        'users' => $users
    ]);
}

kode diatas untuk mengambil semua data user, kemudian mengirimnya ke view users.index
, pada laravel view users.index
akan diarahkan ke file resources/views/users/index.blade.php
.

    Pada laravel view selalu diakhiri oleh ekstensi .blade.php
    , dan lokasi view ada pada direktori resources/views
    . Tanda titik “.” pada view menandakan bahwa view ada di dalam subdirektori. Misal view users.index berarti nama view index.blade.php ada di direktori resources/views/users.

masih pada file app/Http/Controllers/UserController.php
silahkan tambahkan kode dibawah ini dibawah nama namespace :
use App\Models\User;
use Illuminate\Http\Request;

Selanjutnya kita harus membuat view users.index. Buat file index.blade.php
di direktori resources/views/users/. Isi dengan kode dibawah ini :
@extends('adminlte::page')
@section('title', 'List User')
@section('content_header')
    <h1 class="m-0 text-dark">List User</h1>
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('users.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('users.edit', $user)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('users.destroy', $user)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush
Menambah User

Selanjutnya adalah membuat fungsi untuk menambah user. Ubah method create() & store () masih pada file app/Http/Controllers/UserController.php menjadi seperti dibawah ini :
public function create()
{
    return view('users.create');
}
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed'
    ]);
    $array = $request->only([
        'name', 'email', 'password'
    ]);
    $array['password'] = bcrypt($array['password']);
    $user = User::create($array);
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil menambah user baru');
}

Method create() merupakan method untuk menampilkan form tambah. View yang ditampilkan adalah view users.create (kita belum buat dan harus dibuat)

Method store() adalah method untuk menyimpan data yang diinput dari form. Oleh karena itu, pada method store() ini kita melakukan validasi input dari form, kemudian menyimpannya.
$request->validate([
    'name' => 'required',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|confirmed'
]);

Kode diatas merupakan kode validasi input dari form, yang artinya form harus mempunyai input kolom nama, email dan password. Selanjutnya terkait validasi form pada laravel bisa dibaca pada situs resmi laravel https://laravel.com/docs/master/validation.
$array = $request->only([
    'name', 'email', 'password'
]);
$array['password'] = bcrypt($array['password']);
$user = User::create($array);

Kode diatas adalah kode untuk mengimpan data yang diinput dari form ke dalam database.

Sedangkan kode dibawah ini memerintahkan laravel untuk kembali ke halaman user dan menampilkan notifikasi sukses dengan pesan “Berhasil menambah user baru”.
return redirect()->route('users.index')
    ->with('success_message', 'Berhasil menambah user baru');

Selanjutnya view users.create
( file resources/views/users/create.blade.php
) dan isi dengan kode dibawah ini :
@extends('adminlte::page')
@section('title', 'Tambah User')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah User</h1>
@stop
@section('content')
    <form action="{{route('users.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
Mengubah User

Masih pada file app/Http/Controllers/UserController.php
, ubah method edit() dan update() menjadi seperti dibawah ini :
public function edit($id)
{
    $user = User::find($id);
    if (!$user) return redirect()->route('users.index')
        ->with('error_message', 'User dengan id'.$id.' tidak ditemukan');
    return view('users.edit', [
        'user' => $user
    ]);
}
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'.$id,
        'password' => 'sometimes|nullable|confirmed'
    ]);
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    if ($request->password) $user->password = bcrypt($request->password);
    $user->save();
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil mengubah user');
}

Method edit() dan update() mirip dengan fungsi create() dan store(). Method edit untuk menampilkan form edit, sedangkan method update untuk menyimpan hasil perubahan.

Buat juga view users.edit
(file resources/views/users/edit.blade.php
) dengan isi dibawah ini :
@extends('adminlte::page')
@section('title', 'Edit User')
@section('content_header')
    <h1 class="m-0 text-dark">Edit User</h1>
@stop
@section('content')
    <form action="{{route('users.update', $user)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputName">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Nama lengkap" name="name" value="{{$user->name ?? old('name')}}">
                        @error('name') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail" placeholder="Masukkan Email" name="email" value="{{$user->email ?? old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password">
                        @error('password') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="Konfirmasi Password" name="password_confirmation">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('users.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
Menghapus User

Bagian terakhir dari CRUD, yaitu menghapus user. Silahkan edit method destroy() masih pada file app/Http/Controllers/UserController.php
dan ganti dengan kode dibawah ini :
public function destroy(Request $request, $id)
{
    $user = User::find($id);
    if ($id == $request->user()->id) return redirect()->route('users.index')
        ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
    if ($user) $user->delete();
    return redirect()->route('users.index')
        ->with('success_message', 'Berhasil menghapus user');
}

Sampai pada tahap ini pembuatan CRUD user telah selesai.

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
