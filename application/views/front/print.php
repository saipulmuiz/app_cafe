<html>
<head>
  <title>Cetak PDF</title>
  <style>
    table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
    }
    table td {
      word-wrap:break-word;
      width: 20%;
    }
    h3{
        text-align: center;
    }
    th{
      background-color: #3fbae4;
      color: #fff;
      padding: 5px;
      font-size: 16px;
    }
</style>
</head>
<body>
    <h2>Struk Pemesanan</h2></b><br /><br />
    <?php echo var_dump($struk); ?>
    
    <table id="struk" class="table datatable">
        <thead>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama Pemesan</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Status Pemesanan</th>
                <th>Total Bayar</th>
            </tr>
        </thead>
        <tbody>
        <?php  if( ! empty($struk)){ ?>
            <?php foreach ($struk as $data): ?>
            <tr>
                <td><?= $data["id_transaksi"] ?></td>
            </tr>
            <?php endforeach; ?>
        <?php }  ?>
        </tbody>
    </table>   
</body>
</html>