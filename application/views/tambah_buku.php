<html lang="en">
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h3>Masukkan Daftar Buku</h3>
    <form action="<?php echo base_url('tokoku/funcAdd') ?>" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td><input type="text" name="pengarang"></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><input type="text" name="penerbit"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><input type="text" name="tahun"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type="text" name="status"></td>
        </tr>
        <tr>
            <td colspan="3"><button type="submit">Add List</button></td>
        </tr>
    </table>
    </form>
</body>
</html>