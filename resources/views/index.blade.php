<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
        <!-- As a link -->
    <nav class="navbar bg-light mb-4">
        <div class="container container-fluid">
        <a class="navbar-brand" href="#"><h4>CRUD KAMI</h4></a>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            <form action="/Create" method="post">
                @csrf
            <div class="form-group">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" name="umur" class="form-control" id="umur" required>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <label for="profesi" class="form-label">Profesi</label>
                    <select name="profesi" id="profesi" class="form-control" required>
                        <option value="Pegawai">Pegawai</option>
                        <option value="Petani">Petani</option>
                        <option value="Peternak">Peternak</option>
                        <option value="Pelajar">Pelajar</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <table class="table table-hover table-bordered">
                <thead class="text-center">
                    <tr>
                        <th class="col-1">No</th>
                        <th class="col-5">Nama</th>
                        <th class="col-1">Umur</th>
                        <th class="col-3">Profesi</th>
                        <th class="col-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1; ?>
                    @foreach ($data as $datas)
                    <tr>
                        <td class="text-center">{{$i++;}}.</td>
                        <td>{{$datas['nama']}}</td>
                        <td class="text-center">{{$datas['umur']}}</td>
                        <td>{{$datas['profesi']}}</td>
                        <td class="text-center"><a href="/edit/{{$datas['id']}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a> <a href="/delete/{{$datas['id']}}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>