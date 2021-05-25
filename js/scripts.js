import Swal from 'sweetalert2/dist/sweetalert2.js'
document.getElementById('editProduct').onclick = function(){
    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
      })
}