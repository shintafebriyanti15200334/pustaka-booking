<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Berita</title>
</head>
<body>
    <center><h1>Membuat Data Berita</h1></center>
    <center><?php echo anchor('berita/tambah','Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Headline News</th>
            <th>Deskripsi News</th>
            <th>Tanggal Publikasi</th>
            <th>Penulis</th>
            <th>Kategori Berita</th>
        </tr>
        <?php 
        $no = 1;
        foreach($berita as $u){ 
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->judul ?></td>
            <td><?php echo $u->headline_news ?></td>
            <td><?php echo $u->deskripsi_berita ?></td>
            <td><?php echo $u->tgl_publikasi ?></td>
            <td><?php echo $u->penulis ?></td>
            <td><?php echo $u->kategori_berita ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
