<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td height="150px" align="center">
                <img src="<?= base_url('assets/images/sample-header.jpg') ?>" height="100%" width="100%" />
            </td>
        </tr>
        <tr>
            <td height="50px">
                <div class="menu-dropdown">
                    <ul>
                        <li><a href="<?= base_url('menu_utama') ?>">Home</a></li>
                        <li><a href="#">Master</a>
                            <ul>
                                <li><a href="<?= base_url('barang') ?>">Barang</a></li>
                                <li><a href="#">Pegawai</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Transaksi</a>
                            <ul>
                                <li><a href="#">Penjualan</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Laporan</a>
                            <ul>
                                <li><a href="#">Laporan Barang</a></li>
                                <li><a href="#">Laporan Penjualan</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td height="600px" align="center">
                Selamat Datang <?= $this->session->userdata('name') ?>
            </td>
        </tr>
        <tr>
            <td height="50px" align="center">
                Rizky Aditya Fahreza &copy;2020
            </td>
        </tr>
    </table>
</body>

</html>