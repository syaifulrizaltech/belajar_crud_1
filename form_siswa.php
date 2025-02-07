<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa</title>
    <style>
        div{
            padding : 20px;
        }
        .btn{
            /* margin : 20px; */
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <h1>Pendaftaran Siswa</h1>
    <hr>
    <form action="">
        <div>

            <label for="">NISN : </label>
            <input type="text" name="nisn">
        </div>

        <div>
            <label for="">Nama : </label>
            <input type="text" name="nama_siswa">
        </div>

        <div>
            <label for="">Jenis Kelamin : </label>
            <select name="jenis_kelamin" id="">
                <option value="">Laki-Laki</option>
                <option value="">Perempuan</option>
            </select>
        </div>
        
        <div>
            <label for="">Foto Siswa : </label>
            <input type="text" name="foto_siswa">
        </div>
        
        <div>
            <label for="">Alamat : </label>
            <textarea name="alamat" id=""></textarea>
        </div>

        <div class="btn">
            <input type="button" value="Kirim">
            <a href="index.php">
                <input type="button" value="Kembali">
            </a>
        </div>

    </form>
</body>
</html>