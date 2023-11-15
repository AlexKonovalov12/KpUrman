!function (e) {
    "function" != typeof e.matches && (e.matches = e.msMatchesSelector || e.mozMatchesSelector || e.webkitMatchesSelector || function (e) { for (var t = this, o = (t.document || t.ownerDocument).querySelectorAll(e), n = 0; o[n] && o[n] !== t;)++n; return Boolean(o[n]) }), "function" != typeof e.closest && (e.closest = function (e) { for (var t = this; t && 1 === t.nodeType;) { if (t.matches(e)) return t; t = t.parentNode } return null })
}(window.Element.prototype);


document.addEventListener('DOMContentLoaded', function () {
    let intro = document.querySelector('.intro'),
        overlay = document.querySelector('.js-overlay-modal'),
        townOverlay = document.querySelector('.js-overlay-modal-town'),
        modalWindow = document.querySelector('.modal_window'),
        townModal = document.querySelector('.townhouse_modal'),
        phonePlace = document.getElementById('modal_form_phone'),
        closeButton = Array.from(document.querySelectorAll('.js-modal-close')),
        townhouses = Array.from(document.querySelectorAll('.townhouses')),
        modalButtons = Array.from(document.querySelectorAll('.js-open-modal')),
        mapButtons = Array.from(document.querySelectorAll('.map_buttons'));

    
    townhouses.forEach((house) => {
        house.addEventListener('click', function () {
            let name = house.dataset.name;
            let blockName = document.querySelector('.block_name');
            let townPlanImage = document.querySelector('.townhouse_plan_image');
            
            townOverlay.classList.add('active');
          // townPlanImage.src = `./images/townhouses/${name}.png`;
            blockName.innerHTML = `<span>Блок </span> ${name}`;
            $(".svgblock").each(function(){ $(this).hide();});           
            $("#svg"+name).show();            
            mapButtons.forEach((buttons) => {
                if (buttons.id === name) {
                    buttons.classList.add('buttons_active');
                }
            });
            townModal.style.display = 'block';
            townModal.scrollIntoView(top);
            intro.classList.add('background_scroll');
        })
    })
   
    

    modalButtons.forEach((el) => {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            modalWindow.classList.add('active');
            overlay.classList.add('active');
        });
    });


    closeButton.forEach((el) => {
        el.addEventListener('click', function () {
            if (el.classList.contains('town_cross')) {
                window.scrollTo(0,0);
                townModal.style.display = 'none';
                mapButtons.forEach((buttons) => {
                    buttons.classList.remove('buttons_active');
                    
                });
                townOverlay.classList.remove('active');
                intro.classList.remove('background_scroll');
            } else {
                modalWindow.classList.remove('active');
                overlay.classList.remove('active');
            }
        })
    });


    document.body.addEventListener('keyup', function (e) {
        var key = e.code;
        if (key == 'Escape') {
            modalWindow.classList.remove('active');
            overlay.classList.remove('active');
        };
    }, false);


    overlay.addEventListener('click', function () {
        modalWindow.classList.remove('active');
        this.classList.remove('active');
    });

    townOverlay.addEventListener('click', function () {
        window.scrollTo(0, 0);
        townModal.style.display = 'none';
        mapButtons.forEach((buttons) => {
            buttons.classList.remove('buttons_active');

        });
        this.classList.remove('active');
        intro.classList.remove('background_scroll');
    });

    
    phonePlace.addEventListener('click', function () {
        if (phonePlace.value == '') {
            phonePlace.value = '+7'
        }
    }) 
}); 