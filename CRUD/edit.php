<?php
session_start();

$key=$_GET['id'];

$siswa=$_SESSION['dataSiswa'][$key];

if(isset($_POST["update"])) {
    $_SESSION['dataSiswa'][$key]['nama']=$_POST['nama'];
    $_SESSION['dataSiswa'][$key]['nis']=$_POST['nis'];
    $_SESSION['dataSiswa'][$key]['rayon']=$_POST['rayon'];

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home|edit</title>
</head>
<body>
<div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card text-center">
                    <div class="card-body">
                        <h1>DATA SISWA</h1>
                            <form action="" method="POST" class="row d-flex align-items-center">
                                <label for="nama">Nama Siswa</label>
                                <input value="<?php echo $siswa['nama'];?>" type="text" id="nama" placeholder="masukan nama siswa" name="nama">
    
                                <label for="nis">NIS Siswa</label>
                                <input value="<?php echo $siswa['nis']?>" type="number" id="nis" placeholder="masukan nis siswa" name="nis">
    
                                <label for="rayon">Rayon</label>
                                <input value="<?php echo $siswa['rayon']?>" type="text" id="rayon" placeholder="masukan rayon siswa" name="rayon">
    
                                <div class="col mt-3">
                                    <button class="btn btn-success" type="submit" name="update">
                                        <i class='bx bx-plus'></i>Tambah</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>