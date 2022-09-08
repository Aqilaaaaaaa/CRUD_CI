<html lang="en">
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h3>Edit Daftar Buku</h3>
    <form action="<?php echo base_url('tokoku/funcEdit')?>"  method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="text" name="id" value="<?php echo $queryBukuDetails->id ?>" readonly></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><input type="text" name="judul" value="<?php echo $queryBukuDetails->judul ?>"></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>:</td>
            <td><input type="text" name="pengarang" value="<?php echo $queryBukuDetails->pengarang ?>"></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>:</td>
            <td><input type="text" name="penerbit" value="<?php echo $queryBukuDetails->penerbit ?>"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>:</td>
            <td><input type="text" name="tahun" value="<?php echo $queryBukuDetails->tahun ?>"></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><input type="text" name="status" value="<?php echo $queryBukuDetails->status ?>"></td>
        </tr>
        <tr>
            <td colspan="3"><button type="submit">Update List</button></td>
        </tr>
    </table>
    </form>
</body>
</html>