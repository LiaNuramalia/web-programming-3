<!DOCTYPE html>
<html>
<head>
    <title>Laporan Data Anggota Perpustakaan Online</title>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>Laporan Data Anggota Perpustakaan Online</h3>
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
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
