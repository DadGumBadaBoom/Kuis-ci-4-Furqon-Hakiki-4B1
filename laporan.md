# Laporan Kuis CI4 Bug Fix v3

## Nama: Furqon Hakiki
## NIM: 231080200005
## Kelas: 4B1

## Bug yang Diperbaiki

1. di controller Home.php
    a.  pada baris
            return view('user', $data)
        kurang syntax ";"

    b.  $data['users'] = $model->getall(); #harusnya getAll()

    c.  $userModel = new usermodel; #harusnya Usermodel()

2. di Models Usermodel.php
    a.  protected $table = 'users'; #dari 'userss' menjadi 'users'

    b.  use CodeIgniter\Model; #pada Codeigniter huruf 'i' harus menggunakan huruf besar menjadi 'CodeIgniter'

    c.  'email' => $this->request->getVar('email'), #dari 'getVar' menjadi 'getPost'

3. di Routes
    a.  $routes->match(['get', 'post'], 'tambah', 'Home::tambah'); # dari 'get', 'home/tambah' menjadi '['get', 'post']'

4. di Views user.php
    a.  <li><?= $u['name'] ?> - <?= $u['email'] ?></li> # dari '$u['nama']' menjadi '$u['name']'

5. di Views form.php
    a.  <input type="text" name="name"><br> #dari 'namaa' menjadi 'name'

    b.  <form action="tambah"> #dari "/home/tambah" menjadi "tambah"

    c.  <form action="/home/tambah" method="post"> #tambah syntax method post

    d.  <input type="text" name="email"><br> #baiknya type menjadi 'email' daripada 'text'
