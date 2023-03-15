
/*tugas ke 4 Javascript
1. Lengkapilah form dari latihan 15js menggunakan CSS dan table 
2. Perbagus tampilannya 
3. Lengkapi perhitungannya dengan:
- pembagian
- perkalian
- pangkat
4. jika form input dari angka 1 dan 2 kosong dan user klik button, 
maka tampilkan "Maaf angka belum terisi"
*/
function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;

    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert('data tidak boleh kosong');
        return false
    }
}

function kurang(){    
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    
    if(a1 && a2){
        frm.hasil.value = total;
    }else{

        alert('data tidak boleh kosong');
        return false
    }
}

//pembagian
function pembagian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2;
    
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert('data tidak boleh kosong');
        return false
    }
}

// perkalian
function perkalian(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2;
    
    if(a1 && a2){
        frm.hasil.value = total;
    }else{

        alert('data tidak boleh kosong');
        return false
    }
}

// pangkat
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = Math.pow (a1,a2);
    if(a1 && a2){
        frm.hasil.value = total;
    }else{

        alert('data tidak boleh kosong');
        return false
    }
    

}

