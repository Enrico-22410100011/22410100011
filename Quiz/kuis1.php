<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Balok, Kubus dan Tabung</title>
    <link rel="stylesheet" href="kuis1.css">
    <script src="kuis1.js"></script>
</head>
<body>
    <h2>Menghitung Balok, Kubus dan Tabung</h2>
    <form>
        <input type="checkbox" id="volumebalokCheckbox" onchange="toggleInputFields('volumeBalok')"> Volume Balok <br>
        <input type="checkbox" id="volumekubusCheckbox" onchange="toggleInputFields('volumeKubus')"> Volume Kubus <br>
        <input type="checkbox" id="volumetabungCheckbox" onchange="toggleInputFields('volumeTabung')"> Volume Tabung <br>
        <input type="checkbox" id="lpbalokCheckbox" onchange="toggleInputFields('lpBalok')"> LP Balok <br>
        <input type="checkbox" id="lpkubusCheckbox" onchange="toggleInputFields('lpKubus')"> LP Kubus <br>
        <input type="checkbox" id="lptabungCheckbox" onchange="toggleInputFields('lpTabung')"> LP Tabung <br>
        <br>
        <div id="balokInputs" style="display: none;">
            Panjang: <input type="number" id="panjangBalok"> <br>
            Lebar: <input type="number" id="lebarBalok"> <br>
            Tinggi: <input type="number" id="tinggiBalok"> <br>
        </div>
        <div id="kubusInputs" style="display: none;">
            Sisi: <input type="number" id="sisiKubus"> <br>
        </div>
        <div id="tabungInputs" style="display: none;">
            Jari-jari: <input type="number" id="jariJariTabung"> <br>
            Tinggi: <input type="number" id="tinggiTabung"> <br>
        </div>
        <button type="button" onclick="hitung()">Hitung</button>
        <br>
        <input type="number" name="hasil" id="hasil">
    </form>

    <script>
        // Script tambahan (jika diperlukan)
    </script>
</body>
</html>
