<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>
<center>
    <div style="width: 45%; padding: 1px 20px 20px 20px; background-color: dodgerblue; text-align: left;">
    <h1 style="text-align: center;">Form Registrasi Vaksinasi Tahap 1</h1>
    <form action="data.php" method="POST" bgcolor="cyan">
    Isilah Data Dibawah ini dengan benar: <br>
    <table cellspacing="10px">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea type="text" name="alamat" rows="5" cols="40"
                    style="font-family: serif; font-weight: 100;"
                    required></textarea>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempatlhr" required></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggallhr" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="kelamin" value="Laki-laki"> Laki-laki
                <input type="radio" name="kelamin" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td>Profesi</td>
            <td><select name="profesi" required>
                <option>Pilih</option>
                <option value="Pelajar">Pelajar</option>
                <option value="Tenaga Pendidikan">Tenaga Pendidikan</option>
                <option value="Karyawan">Karyawan</option>
                <option value="Buruh">Buruh</option>
                <option value="Lain-lain">Lain-lain</option> </select>
            </td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><select name="usia" required>
            <option>Pilih</option>
            <option value="&le;16">&le;16</option>
            <option value="17-25">17-25</option>
            <option value="26-42">26-42</option>
            <option value="43-59">43-60</option>
            <option value="&ge;60">&ge;60</option> </select>
            </td>
        </tr>
        <tr><td><button type="submit">Kirim</button> <button type="reset">Batal</button></td></tr>
    </table>
    </form>
    </div>
</center>
</body>
</html>