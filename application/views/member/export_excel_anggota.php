<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Data_Anggota.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3><center>Laporan Data Anggota Perpustakaan Online</center></h3>
<br/>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Anggota</th>
            <th>Email</th>
            <th>Role ID</th>
            <th>Aktif</th>
            <th>Member Sejak</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($anggota as $a) { 
            // Memeriksa role ID anggota
            if ($a['role_id'] == 2) { ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['email']; ?></td>
                    <td><?= $a['role_id']; ?></td>
                    <td><?= $a['is_active'] ? 'Aktif' : 'Tidak Aktif'; ?></td>
					<td><?= date('Y', $a['tanggal_input']); ?></td>
                </tr>
            <?php } 
        } ?>
    </tbody>
</table>
