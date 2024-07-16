function validationpengarang(){
    let pengarang = document.forms['FormBuku']["pengarang"].value;
    if(pengarang == ""){
      alert('Pengarang Harus Diisi')
      return false;
    }

   }

   function updateTotal(){
    let harga  =document.getElementById('hargabuku').value;
    let jumlah = document.getElementById('jumlahbuku').value;

    let total = harga * jumlah;
    let totalbuku = document.getElementById('totalbuku');
    totalbuku.value = total;  

   }