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

// Swal Sweet Alert
const swal = $('.swal').data('swal');
if (swal) {
  Swal.fire({
    position: 'center',
    title: swal,
    showConfirmButton: false,
    icon: 'success',
    timer: 1500 
  })
}