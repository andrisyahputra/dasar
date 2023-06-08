// ambil element2 yg dibutuhkan

let keyword = document.getElementById('keyword');
let tombolCari = document.getElementById('tombol-cari');
let container = document.getElementById('container');

// kasih event ketika lakukan sesuatu
keyword.addEventListener('keyup', function(){
    // buat object ajax
    let xhr = new XMLHttpRequest();
    // cek kesiapan ajax
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200){
            // console.log("OKE");
            // console.log(xhr.responseText);
            container.innerHTML = xhr.responseText;
        }
    }
    // eksekusi ajax
    xhr.open('GET', 'ajax/mancity.php?keyword=' + keyword.value, true);
    xhr.send();
});