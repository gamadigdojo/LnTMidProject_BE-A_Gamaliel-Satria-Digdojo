<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/style.css')}}">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="/">Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/manage-employee">Manage Employees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/add-employee">Add Employee</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="mt-5">
            <h2 class="text-center">Daftar Karyawan</h2>
            <div class="adjust-list">
                <ul class="list-group">
                    @for($i =0; $i<$dataEmployee->count(); $i++)  
                        <li class="list-group-item">
                            <div>
                                Nama: {{ $dataEmployee[$i]->nama_karyawan }} <br> Umur: {{ $dataEmployee[$i]->umur_karyawan}} <br> Alamat: {{ $dataEmployee[$i]->alamat_karyawan }} <br> Telepon: {{ $dataEmployee[$i]->telepon_karyawan }}
                            </div>
                              <span> ✏️<a href="/edit-employee/{{$dataEmployee[$i]->id}}">edit</a> ❌<a href="/delete-employee/{{$dataEmployee[$i]->id}}">delete</a> </span> 
                        </li>                        
                    @endfor
                </ul>
            </div>
        </div>
    </div>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>