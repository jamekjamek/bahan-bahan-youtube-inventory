<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Harian Masuk</title>
</head>

<body>
    <table style="width: 100%; height: 59px;" border="0">
        <tbody>
            <tr>
                <td style="width: 23%;" align="center">
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="" width="150" height="50" />
                </td>
                <td style="text-align: center;">
                    <p></p>
                    <h3 style="text-align: center;"><span style="font-family: Times New Roman;"><b>PT. MIPDEVP.COM</b></span></h3>
                    <span style="text-align: center;"><span style="font-family: Times New Roman;">Jl. Kemayoran Timur GG. 1 No. 24</span></span>
                    <p></p>
                </td>
            </tr>
        </tbody>
    </table>
    <hr style="height: 2px;background-color:black" />
    <p style="text-align: center;">
        <strong style="font-size:14px; text-transform:uppercase">Laporan Harian Barang Masuk</strong>
        <br>
        <strong style="font-size:14px; text-transform:uppercase">21-January-2021 - 28-July-2021</strong>
    </p>
    <table style="border-collapse: collapse; width: 100%; height: 144px; padding:20px" border="1">
        <thead>
            <tr style="height: 18px;">
                <td style="width: 10%; text-align: center; height: 18px;"><strong>No</strong></td>
                <td style="width: 15%; text-align: center; height: 18px;"><strong>Tanggal</strong></td>
                <td style="width: 35%; text-align: center; height: 18px;"><strong>Barang</strong></td>
                <td style="width: 15%; text-align: center; height: 18px;"><strong>Jumlah</strong></td>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 200; $i++) : ?>
                <tr>
                    <td style="height: 18px; text-align:center"><?= $i; ?></td>
                    <td style="height: 18px;text-align:center">01-02-2021</td>
                    <td style="height: 18px; padding-left:10px">Pulpen</td>
                    <td style="height: 18px; text-align:center">
                        2 box
                    </td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <br>
    <br>
    <div>
        <p style="padding-left: 400px;">
            <span>Jakarta, 28 July 2021</span>
            <br>
            <span>
                Pimpinan Perushaan,
            </span>
            <br>
            <br>
            <br>
            <br>
            <br>
            <span>
                Agung Hardiyanto
            </span>
            <br>
            <span>
                NPP : 13753004
            </span>



        </p>
    </div>
</body>

</html>