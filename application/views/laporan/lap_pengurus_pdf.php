<style>
    #tabel1 {
        margin-left: 25px;
        color: #444;
        border-collapse: collapse;
        border: 2px solid #777;
        font-size: 15px;
        color: #000;
    }

    #tabel1 tr th {
        background: #35A9DB;
        color: #fff;
        font-weight: normal;
        line-height: 20px;
    }

    #tabel1,
    th,
    td {
        padding: 3px 6px;
        border: 1px solid #777;
    }

    #tabel1 tr:nth-child(odd) {
        background-color: #f2f2f2;
    }
</style>
<img src="assets/images/kop.jpg" alt="Logo" width="110%" style="margin-left:-50px">
<h3>
    <center>Laporan Data Pengurus<br>Pondok Pesantren Ridhyatul Solikhin - Kab. Tegal</center>
</h3>
<br><br>
<table id="tabel1">

    <head>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NIK Pengurus</th>
            <th>Nama Pengurus</th>
            <th>TTL</th>
            <th>Mulai Kerja</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Pendidikan</th>
            <th>Pelatihan</th>
        </tr>
    </head>

    <body>
        <?php $no = 1;
        foreach ($pengurus as $row) { ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td> <?php if ($row['foto_pengurus'] != null) { ?>
                        <img src="./upload/foto_pengurus/<?= $row['foto_pengurus'] ?>" alt="" width="80px">
                    <?php } ?>
                </td>
                <td><?php echo $row['nik_pengurus']; ?></td>
                <td><?php echo ucwords($row['nama_pengurus']); ?></td>
                <td><?php echo ucwords($row['tempat_lahir_pengurus']) . ', ' . date_indo($row['tgl_lahir_pengurus']) ?></td>
                <td><?php echo date_indo($row['mulai_kerja']); ?></td>
                <td>
                    <?php if ($row['jabatan'] == 1) { ?>
                        <span>Ketua</span>
                    <?php } elseif ($row['jabatan'] == 2) { ?>
                        <span>Wakil Ketua</span>
                    <?php } elseif ($row['jabatan'] == 3) { ?>
                        <span>Sekretaris 1</span>
                    <?php } elseif ($row['jabatan'] == 4) { ?>
                        <span>Sekretaris 2</span>
                    <?php } elseif ($row['jabatan'] == 5) { ?>
                        <span>Bendahara</span>
                    <?php } elseif ($row['jabatan'] == 6) { ?>
                        <span>Penanggungjawab sekaligus Pengajar Akhlak</span>
                    <?php } elseif ($row['jabatan'] == 7) { ?>
                        <span>Bidang Pendidikan</span>
                    <?php } elseif ($row['jabatan'] == 8) { ?>
                        <span>Pelaksana Harian</span>
                    <?php } elseif ($row['jabatan'] == 9) { ?>
                        <span>Juru Masak</span>
                    <?php } else { ?>
                        <span>Admin</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($row['status'] == 1) { ?>
                        <span>Tetap</span>
                    <?php } elseif ($row['status'] == 2) { ?>
                        <span>Kontrak</span>
                    <?php } else { ?>
                        <span>Relawan</span>
                    <?php } ?>
                </td>
                <td>
                    <?php if ($row['pendidikan'] == 1) { ?>
                        <span>SMA/SMK/MA</span>
                    <?php } elseif ($row['pendidikan'] == 2) { ?>
                        <span>D3</span>
                    <?php } elseif ($row['pendidikan'] == 3) { ?>
                        <span>S1</span>
                    <?php } else { ?>
                        <span>S2</span>
                    <?php } ?>
                <td><?php echo $row['pelatihan']; ?></td>
            </tr>
        <?php $no++;
        }  ?>
    </body>
</table>