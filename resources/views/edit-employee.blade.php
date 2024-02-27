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
            <h1 class="text-center">Editing {{$dataEmployee->nama_karyawan}} </h1>

            <div class="adjust-form">
                <form action="/edit-employee/{{ $dataEmployee->id }}" method="POST">
                    @method("PUT")
                    @csrf

                    <div class="mb-2">
                        <label for="nama_karyawan" class="form-label">Nama </label>
                        <input value="{{$dataEmployee->nama_karyawan}}" id="nama_karyawan" class="form-control" type="text" name="nama_karyawan" minlength="5" maxlength="20" autocomplete="off" required>
                    </div>
                    
                    <div class="mb-2">
                        <label for="umur_karyawan" class="form-label">Umur</label>
                        <input value="{{$dataEmployee->umur_karyawan}}"  id="nama_karyawan" class="form-control" type="number" name="umur_karyawan" min="21" required>
                    </div>
                
                    <div class="mb-2">
                        <label for="alamat_karyawan" class="form-label">Alamat</label>
                        <input value="{{$dataEmployee->alamat_karyawan}}" id="alamat_karyawan" class="form-control" type="text" name="alamat_karyawan" minlength="10" maxlength="40" autocomplete="off" required> 
                    </div>
                
                    <div class="mb-2">
                        <label for="telepon_karyawan" class="form-label">Telepon</label>
                        <input value="{{$dataEmployee->telepon_karyawan}}" id="telepon_karyawan" class="form-control" type="text" name="telepon_karyawan" pattern="^(08).*\d" minlength="9" maxlength="12" title="start with 08 and number only" autocomplete="off" required>
                    </div>

                    <button class="btn btn-success">submit</button>
                </form>
            </div>
          
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>