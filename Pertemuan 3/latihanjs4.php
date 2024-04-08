<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>JavaScript if</h2>
    <form>
        Nilai UTS:
        <input type="number" name="nilai1" id="nilai1">
        <br>
        Nilai UAS:
        <input type="number" name="nilai2" id="nilai2">
        <br>
        Nilai Tugas:
        <input type="number" name="nilai3" id="nilai3">
        <br>
        <button type="button" onclick="myfungsi()">Hitung</button>
        <br>
        <input type="text" id="hasil">
    </form>

    <script>
        function myfungsi() {
            let nilai1 = parseInt(document.getElementById("nilai1").value);
            let nilai2 = parseInt(document.getElementById("nilai2").value);
            let nilai3 = parseInt(document.getElementById("nilai3").value);

            let totalNilai = nilai1 * 0.3 + nilai2 * 0.3 + nilai3 * 0.4;

            if (totalNilai >= 80) {
                document.getElementById("hasil").value = "A";
            } else if (totalNilai >= 70) {
                document.getElementById("hasil").value = "B";
            } else {
                document.getElementById("hasil").value = "C";
            }
        }
    </script>
</body>
</html>
