<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form nilai</title>
</head>
<body>
    <h2 class="text-center">form nilai</h2>
    <hr>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form class="ml-5 mr-5" action="proses_nilai.php" method="GET">
    <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Pemograman web">Pemograman web</option>
        <option value="Matematika">Matematika</option>
        <option value="B inggris">B inggris</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uts" class="col-4 col-form-label">Nilai Uts</label> 
    <div class="col-8">
      <input id="nilai uts" name="nilai uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai uas" class="col-4 col-form-label">Nilai Uas</label> 
    <div class="col-8">
      <input id="nilai uas" name="nilai uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="nilai tugas" name="nilai tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</hr>
</body>
</html>