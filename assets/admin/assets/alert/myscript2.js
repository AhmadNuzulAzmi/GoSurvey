const flashDataTarik = $('.flash-data6').data('flashdata');
const flashDataReturn = $('.flash-data7').data('flashdata');
if (flashDataTarik) {

    Swal.fire({
        icon: 'success',
        title: 'Data Tarik',
        text: 'Berhasil ' + flashDataTarik
       
    });
    
}
if (flashDataReturn) {

    Swal.fire({
        icon: 'success',
        title: 'Data Return',
        text: 'Berhasil ' + flashDataReturn
       
    });
    
}