<!DOCTYPE html>
<html>
    <head>
        <script src="Tugasjs3.js"> </script>
    </head>
    <title>Menghitung balok dan kubus</title>
</head>
<body>
    <h2>Menghitung balok dan kubus</h2>
    <form>
        <input type="checkbox" id="balokCheckbox" onchange="toggleInputFields('balok')"> Balok
        <input type="checkbox" id="kubusCheckbox" onchange="toggleInputFields('kubus')"> Kubus
        <br>
        <div id="balokInputs" style="display: none;">
            Panjang: <input type="number" id="panjangBalok"> <br>
            Lebar: <input type="number" id="lebarBalok"> <br>
            Tinggi: <input type="number" id="tinggiBalok"> <br>
        </div>
        <div id="kubusInputs" style="display: none;">
            Sisi: <input type="number" id="sisiKubus"> <br>
        </div>
        <button type="button" onclick="hitungVolume()">Hitung Volume</button>
        <br>
        <input type="number" name="hasil" id="hasil">
    </form>

    <script>
      
    </script>
</body>
</html>