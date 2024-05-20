<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<style type="text/css">
    .table-data {
        width: 100%;
        border-collapse: collapse;
    }

    .table-data tr th,
    .table-data tr td {
        border: 1px solid black;
        font-size: 11pt;
        font-family: Verdana;
        padding: 10px;
    }

    h3 {
        font-family: Verdana;
        text-align: center;
    }
</style>
<h3>Laporan Data Buku Perpustakaan Online</h3>
<br/>
<table class="table-data">
    <thead>
	<tr>
     	<th>No</th>
     	<th>Nama Anggota</th>
     	<th>Email</th>
	 	<th>Role ID</th>
     	<th>Status Aktif</th>
     	<th>Tanggal Bergabung</th>
    </tr>
    </thead>
    <tbody>
	<?php
            $no = 1;
            foreach ($anggota as $a) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= $a['is_active'] ? 'Aktif' : 'Tidak Aktif'; ?></td>
					<td><?= date('Y', $a['tanggal_input']); ?></td>
                </tr>
            <?php }
    ?>
    </tbody>
</table>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>
