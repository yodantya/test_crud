
$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
		case 'JPG':
        case 'jpeg':
		case 'JPEG':
        case 'png':
		case 'PNG':
        case 'gif':
            $('#kirim').attr('disabled', false);
            break;
        default:
            alert('Format Gambar tidak di Izinkan');
            this.value = '';
    }
});
