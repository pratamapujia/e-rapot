// Preview img
function previewImgGuru() {
  const fotoGuru = document.querySelector('#foto_guru');
  const fotoLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  fotoLabel.textContent = fotoGuru.files[0].name;

  const fileGuru = new FileReader();
  fileGuru.readAsDataURL(fotoGuru.files[0]);

  fileGuru.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}

function previewImgSiswa() {
  const fotoSiswa = document.querySelector('#foto_siswa');
  const fotoLabel = document.querySelector('.custom-file-label');
  const imgPreview = document.querySelector('.img-preview');

  fotoLabel.textContent = fotoSiswa.files[0].name;

  const fileSiswa = new FileReader();
  fileSiswa.readAsDataURL(fotoSiswa.files[0]);

  fileSiswa.onload = function(e) {
    imgPreview.src = e.target.result;
  }
}
// Toast Sweet ALert
// const swal = $('.swal').data('swal');
// if (swal) {
//   const Toast = Swal.mixin({
//     toast: true,
//     position: 'top',
//     showConfirmButton: false,
//     timer: 2000,
//     timerProgressBar: true,
//     didOpen: (toast) => {
//     toast.addEventListener('mouseenter',Swal.stopTimer)
//     toast.addEventListener('mouseleave', Swal.resumeTimer)  
//     }
//   })
//   Toast.fire({
//     icon: 'success',
//     title: swal
//   })
// }

//Swal Sweet Alert
const swal = $('.swal').data('swal');
if (swal) {
  Swal.fire({
    position: 'center',
    title: swal,
    showConfirmButton: false,
    icon: 'success',
    timer: 2000,
    timerProgressBar: true
  })
}

$(document).on('click','.hapus', function(e){
  //menghentikan aksi default
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
    title: 'Apa anda yakin ?',
    text: "Data ini akan dihapus permanen!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#16c79a',
    cancelButtonColor: '#ff5e78',
    confirmButtonText: 'Ya, saya yakin!',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.value) {
      window.location.href = href;
    } else{
      Swal.fire({
        title: 'Dibatalkan',
        text: 'Data anda masih aman',
        icon: 'error',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
      })
    }
  })
})

var cleaveI = new Cleave('.mapel-input', {
  prefix: 'MPL',
  delimiter: '-',
  blocks: [10],
  uppercase: true
});