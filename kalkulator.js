var Name;
var waktu;
var hari = new Date();
var time = hari.getHours();

Name = window.prompt("Silahkan masukan nama anda :");

if (time < 12) waktu = "Selamat Pagi ";

if (time >= 12) {
  time = time - 12;

  if (time < 6) waktu = "Selamat Siang, ";

  if (time < 5) waktu = "Selamat Sore, ";

  if (time >= 6) waktu = "Selamat Malam, ";
}

document.writeln("<h4>" + waktu + "" + Name + "</2>");

function luasSilinder() {
    var r = document.getElementById("jariSilinder").value;
    var t = document.getElementById("tinggiSilinder").value;
  
    var hasil = 2 * Math.PI * r * r + 2 * Math.PI * r * t;
    document.getElementById("hasil_luas").innerHTML = hasil.toFixed(2);
  }
  
  function volumeSilinder() {
    var r = document.getElementById("jariSilinder").value;
    var t = document.getElementById("tinggiSilinder").value;
  
    var hasil = Math.PI * (r * r) * t;
    document.getElementById("hasil_volume").innerHTML = hasil.toFixed(2);
  }


  function luasKerucut() {
    var r = document.getElementById("jariKerucut").value;
    var pelukis = document.getElementById("pelukisKerucut").value;
    var t = document.getElementById("tinggiKerucut").value;
  
    var hasil = Math.PI * r * r + Math.PI * r * pelukis;
    document.getElementById("hasil_luas_kerucut").innerHTML = hasil.toFixed(2);
  }
  
  function volumeKerucut() {
    var r = document.getElementById("jariKerucut").value;
    var t = document.getElementById("tinggiKerucut").value;
  
    var hasil = (1 / 3) * Math.PI * (r * r) * t;
    document.getElementById("hasil_volume_kerucut").innerHTML = hasil.toFixed(2);
  }



  function luasBola() {
    var r = document.getElementById("jariBola").value;
  
    var hasil = 4 * Math.PI * r * r;
    document.getElementById("hasil_luas_bola").innerHTML = hasil.toFixed(2);
  }
  
  function volumeBola() {
    var r = document.getElementById("jariBola").value;
  
    var hasil = (4 / 3) * Math.PI * r * r * r;
    document.getElementById("hasil_volume_bola").innerHTML = hasil.toFixed(2);
  }