const flashData = $('.flash-data').data('flashdata');
const flashData2 = $('.flash-data2').data('flashdata');
const flashData3 = $('.flash-data3').data('flashdata');
const flashDataBayar = $('.flash-data4').data('flashdata');
const flashDataTopUp = $('.flash-data5').data('flashdata');

if (flashData) {

    Swal.fire({
        icon: 'success',
        title: 'Data Member',
        text: 'Berhasil ' + flashData
       
    });
    
}
if (flashData2) {

    Swal.fire({
        icon: 'success',
        title: 'Data Rekening',
        text: 'Berhasil ' + flashData2
       
    });
    
}
if (flashData3) {

    Swal.fire({
        icon: 'success',
        title: 'Data Harga Saldo',
        text: 'Berhasil ' + flashData3
       
    });
    
}
if (flashDataBayar) {

    Swal.fire({
        icon: 'success',
        title: 'Data Pembayaran',
        text: 'Berhasil ' + flashDataBayar
       
    });
    
}
if (flashDataTopUp) {

    Swal.fire({
        icon: 'success',
        title: 'Data Top Up',
        text: 'Berhasil ' + flashDataTopUp
       
    });
    
}
if (flashDataTarik) {
     Swal.fire({
        icon: 'success',
        title: 'Data Tarik',
        text: 'Berhasil ' + flashDataTarik
       
    });
}