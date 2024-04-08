<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h2>JavaScript For Loop</h2>

    <label for="start">Start:</label>
    <input type="number" id="start" value="0">
    <br>
    <label for="end">End:</label>
    <input type="number" id="end" value="10">
    <br>
    <button onclick="displayNumbers()">Tampil</button>
    <p id="isi"></p>

    <script>
        function displayNumbers() {
            let start = parseInt(document.getElementById("start").value);
            let end = parseInt(document.getElementById("end").value);
            let text = '';

            for (let i = start; i <= end; i++) {
                text = text + i + "<br>";
            }

            document.getElementById("isi").innerHTML = text;
        }
    </script>
</body>
</html>