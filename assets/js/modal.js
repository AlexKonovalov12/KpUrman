!function (e) {
    "function" != typeof e.matches && (e.matches = e.msMatchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || function (e) { for (var t = this, o = (t.document || t.ownerDocument).querySelectorAll(e), n = 0; o[n] && o[n] !== t;)++n; return Boolean(o[n]) }), "function" != typeof e.closest && (e.closest = function (e) { for (var t = this; t && 1 === t.nodeType;) { if (t.matches(e)) return t; t = t.parentNode } return null })
}(window.Element.prototype);


document.addEventListener('DOMContentLoaded', function () {
    let modalButton = document.querySelector('.js-open-modal'),
     m2  = document.querySelector('.m2'),
        overlay = document.querySelector('.js-overlay-modal'),
        modalWindow = document.querySelector('.modal_window'),
        phonePlace = document.getElementById('modal_form_phone'),
        closeButton = document.querySelector('.js-modal-close');


    modalButton.addEventListener('click', function (e) {
        e.preventDefault();
        modalWindow.classList.add('active');
        overlay.classList.add('active');
    });
    
        m2.addEventListener('click', function (e) {
        e.preventDefault();
        modalWindow.classList.add('active');
        overlay.classList.add('active');
    });


    closeButton.addEventListener('click', function (e) {
        modalWindow.classList.remove('active');
        overlay.classList.remove('active');
    });


    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;
        if (key == 27) {
            document.querySelector('.modal_window.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');
        };
    }, false);


    overlay.addEventListener('click', function () {
        document.querySelector('.modal_window.active').classList.remove('active');
        this.classList.remove('active');
    });

    
    phonePlace.addEventListener('click', function () {
        if (phonePlace.value == '') {
            phonePlace.value = '+7'
        }
    }) 

    var element = document.getElementById('modal_form_phone');
    var maskOptions = {
        mask: '+{7}(000)000-00-00'
    };

}); 