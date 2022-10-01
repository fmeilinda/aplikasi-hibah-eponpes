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
    <center>Laporan Data Anak<br>Pondok Pesantren Riyadus sholihin</center>
</h3>
<br><br>
<table id="tabel1">
    <tr>
        <th>No</th>
        <th>NIK Anak</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Nama Ibu</th>
        <th>Nama Bapak</th>
        <th>Pekerjaan Orang Tua</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Pendidikan</th>
        <th>Kategori</th>
        <th>Status</th>
    </tr>

    <?php $no = 1;
    foreach ($anak as $row) { ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['nik_anak']; ?></td>
            <td><?php echo ucwords($row['nama_anak']); ?></td>
            <td>
                <?php if ($row['jk_anak'] == 'L') { ?>
                    <span>Laki-laki</span>
                <?php } else { ?>
                    <span>Perempuan</span>
                <?php } ?>
            </td>
            <td><?php echo ucwords($row['tempat_lahir_anak'] . ', ' . date_indo($row['tgl_lahir_anak'])); ?></td>
            <td><?php echo ucwords($row['nama_ibu_kandung']); ?></td>
            <td><?php echo ucwords($row['nama_bapak_kandung']); ?></td>
            <td><?php echo ucwords($row['pekerjaan_ayah']); ?></td>
            <td><?php echo ucwords($row['alamat']); ?></td>
            <td>
                <?php if ($row['agama'] == 1) { ?>
                    <span>Islam</span>
                <?php } elseif ($row['agama'] == 2) { ?>
                    <span>Kristen</span>
                <?php } elseif ($row['agama'] == 3) { ?>
                    <span>Katholik</span>
                <?php } elseif ($row['agama'] == 4) { ?>
                    <span>Hindu</span>
                <?php } elseif ($row['agama'] == 5) { ?>
                    <span>Budha</span>
                <?php } else { ?>
                    <span>Konghucu</span>
                <?php } ?>
            </td>
            <td>
                <?php if ($row['pendidikan'] == 1) { ?>
                    <span>SD/MI</span>
                <?php } elseif ($row['pendidikan'] == 2) { ?>
                    <span>SMP/MTS</span>
                <?php } elseif ($row['pendidikan'] == 3) { ?>
                    <span>SMK/SMA/MA</span>
                <?php } else { ?>
                    <span>Kuliah</span>
                <?php } ?>
            </td>
            <td>
                <?php if ($row['id_kelas'] == '1') { ?>
                    <span>Pondok Pesantren</span>
                <?php } else { ?>
                    <span> Rumah Tahfidz Qur'an</span>
                <?php } ?>
            </td>
            <td>
                <?php if ($row['status'] == '1') { ?>
                    <span>Aktif</span>
                <?php } else if ($row['status'] == '3') { ?>
                    <span>Alumni</span>
                <?php } else { ?>
                    <span>Tidak Aktif</span>
                <?php } ?><br>
            </td>
        </tr>
    <?php $no++;
    }  ?>
</table>