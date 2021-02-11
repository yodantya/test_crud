
    var elems = document.getElementsByClassName('btn-danger');
    var confirmIt = function (e) {
        if (!confirm('Yakin Ingin Menghapus?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
