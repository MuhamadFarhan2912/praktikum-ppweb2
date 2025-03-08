<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    q<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
            

<form method="post" action="hasil-nilai.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" placeholder="masukan nim" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="rombel" class="col-4 col-form-label">Rombel</label> 
    <div class="col-8">
      <input id="rombel" name="rombel" placeholder="masukan rombel anda" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="Pemweb2">Pemweb2</option>
        <option value="Basis Data">Basis Data</option>
        <option value="Statistika">Statistika</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai tugas" name="tugas" placeholder="masukan nilai tugas" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai uts" name="uts" placeholder="masukan nilai uts" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai uas" name="uas" placeholder="masukan nilai uas" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
            </div>
        </div>
    </div>
</body>
</html>