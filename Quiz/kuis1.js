function toggleInputFields(shape) {
    var balokInputs = document.getElementById('balokInputs');
    var kubusInputs = document.getElementById('kubusInputs');
    var tabungInputs = document.getElementById('tabungInputs');
    var volumebalokCheckbox = document.getElementById('volumebalokCheckbox');
    var volumekubusCheckbox = document.getElementById('volumekubusCheckbox');
    var volumetabungCheckbox = document.getElementById('volumetabungCheckbox');
    var lpbalokCheckbox = document.getElementById('lpbalokCheckbox');
    var lpkubusCheckbox = document.getElementById('lpkubusCheckbox');
    var lptabungCheckbox = document.getElementById('lptabungCheckbox');
  
    if (shape === 'volumeBalok') {
        balokInputs.style.display = 'block';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'none';
        volumekubusCheckbox.checked = false;
        volumetabungCheckbox.checked = false;
        lpbalokCheckbox.checked = false;
        lpkubusCheckbox.checked = false;
        lptabungCheckbox.checked = false;
    } else if (shape === 'volumeKubus') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'block';
        tabungInputs.style.display = 'none';
        volumebalokCheckbox.checked = false;
        volumetabungCheckbox.checked = false;
        lpbalokCheckbox.checked = false;
        lpkubusCheckbox.checked = false;
        lptabungCheckbox.checked = false;
    } else if (shape === 'volumeTabung') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'block';
        volumebalokCheckbox.checked = false;
        volumekubusCheckbox.checked = false;
        lpbalokCheckbox.checked = false;
        lpkubusCheckbox.checked = false;
        lptabungCheckbox.checked = false;
    } else if (shape === 'lpBalok') {
        balokInputs.style.display = 'block';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'none';
        volumebalokCheckbox.checked = false;
        volumekubusCheckbox.checked = false;
        volumetabungCheckbox.checked = false;
        lpkubusCheckbox.checked = false;
        lptabungCheckbox.checked = false;
    } else if (shape === 'lpKubus') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'block';
        tabungInputs.style.display = 'none';
        volumebalokCheckbox.checked = false;
        volumekubusCheckbox.checked = false;
        volumetabungCheckbox.checked = false;
        lpbalokCheckbox.checked = false;
        lptabungCheckbox.checked = false;
    } else if (shape === 'lpTabung') {
        balokInputs.style.display = 'none';
        kubusInputs.style.display = 'none';
        tabungInputs.style.display = 'block';
        volumebalokCheckbox.checked = false;
        volumekubusCheckbox.checked = false;
        volumetabungCheckbox.checked = false;
        lpbalokCheckbox.checked = false;
        lpkubusCheckbox.checked = false;
    }
}

function hitung() {
    var hasilField = document.getElementById('hasil');
    var volumebalokCheckbox = document.getElementById('volumebalokCheckbox');
    var volumekubusCheckbox = document.getElementById('volumekubusCheckbox');
    var volumetabungCheckbox = document.getElementById('volumetabungCheckbox');
    var lpbalokCheckbox = document.getElementById('lpbalokCheckbox');
    var lpkubusCheckbox = document.getElementById('lpkubusCheckbox');
    var lptabungCheckbox = document.getElementById('lptabungCheckbox');
  
    if (volumebalokCheckbox.checked) {
        var panjang = parseFloat(document.getElementById('panjangBalok').value);
        var lebar = parseFloat(document.getElementById('lebarBalok').value);
        var tinggi = parseFloat(document.getElementById('tinggiBalok').value);
        var volume = panjang * lebar * tinggi;
        hasilField.value = volume;
    } else if (volumekubusCheckbox.checked) {
        var sisi = parseFloat(document.getElementById('sisiKubus').value);
        var volume = sisi * sisi * sisi;
        hasilField.value = volume;
    } else if (volumetabungCheckbox.checked) {
        var jariJari = parseFloat(document.getElementById('jariJariTabung').value);
        var tinggiTabung = parseFloat(document.getElementById('tinggiTabung').value);
        var volume = Math.PI * Math.pow(jariJari, 2) * tinggiTabung;
        hasilField.value = volume.toFixed(2);
    } else if (lpbalokCheckbox.checked) {
        var panjang = parseFloat(document.getElementById('panjangBalok').value);
        var lebar = parseFloat(document.getElementById('lebarBalok').value);
        var tinggi = parseFloat(document.getElementById('tinggiBalok').value);
        var lp = 2 * (panjang * lebar + panjang * tinggi + lebar * tinggi);
        hasilField.value = lp;
    } else if (lpkubusCheckbox.checked) {
        var sisi = parseFloat(document.getElementById('sisiKubus').value);
        var lp = 6 * Math.pow(sisi, 2);
        hasilField.value = lp;
    } else if (lptabungCheckbox.checked) {
        var jariJari = parseFloat(document.getElementById('jariJariTabung').value);
        var tinggiTabung = parseFloat(document.getElementById('tinggiTabung').value);
        var lp = 2 * Math.PI * jariJari * (jariJari + tinggiTabung);
        hasilField.value = lp.toFixed(2);
    } else {
        hasilField.value = "Pilih salah satu bentuk atau perhitungan terlebih dahulu.";
    }
}

