<!DOCTYPE html>
<html>
<head>
<title>Tugas 1</title>
</head>
<form action="Tugas11.php" method="POST">
<input type="submit" value="+" name="+">
</form>
<table border="1">
  <tr>
    <th rowspan="2">Kode</th>
    <th rowspan="2">Nama</th>
    <th rowspan="2">Satuan</th>
    <th colspan="2">Harga</th>
    <th rowspan="2"> Action</th>
  </tr>
  <tr>
    <td>Beli</td>
    <td>Jual</td>
  </tr>
  <tr>
    <td>M01</td>
    <td>CPU</td>
    <td>pcs</td>
    <td>200</td>
    <td>350</td>
    <td> 
    <a href="Tugas12.php" target="_blank">
        <input type="submit" value="Update" name="update">
    </td>
  </tr>
  <tr>
  <td>M02</td>
    <td>RAM</td>
    <td>pcs</td>
    <td>300</td>
    <td>450</td>
    <td>
    <a href="Tugas12.php" target="_blank">
        <input type="submit" value="Update" name="update"> 
    </td>
  </tr>
  <tr>
    <td>M03</td>
    <td>VGA</td>
    <td>pcs</td>
    <td>400</td>
    <td>550</td>
    <td>
    <a href="Tugas12.php" target="_blank">
    <input type="submit" value="Update" name="update"> 
    </td>
  </tr>
</table>
</body>
</html>