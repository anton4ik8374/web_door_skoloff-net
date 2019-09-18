ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [59.936764, 30.391336],
        zoom: 17
    });
    // Создание геообъекта с типом точка (метка).
    var glyphIcon1 = new ymaps.Placemark([59.936764, 30.391336], {
        hintContent: 'Собственный значок метки',
        balloonContent: 'Санкт-Петербург улица Моисеенко, 39АЕ'
    }, {
        preset: 'islands#redGlyphIcon',
        iconGlyph: 'home',
        iconGlyphColor: 'blue'
    });
    // Размещение геообъекта на карте.
    myMap.geoObjects.add(glyphIcon1);
}



/*ymaps.ready(initMapYandex);

function initMapYandex () {
    var markerUrl = 'images/icons/map_pin.png';
    var mapContacts = new ymaps.Map("map", {
        center: [59.936764, 30.391336,
        zoom: 9,
        controls: ['zoomControl', 'fullscreenControl']
    });
    mapContacts.behaviors.disable('scrollZoom');
 
    var contentString = '<div class="map_content">' +
        '<strong class="map_content-title">' +
        'Замена и ремонт автостекла skoloff-net ' +
        '</strong>' +
        '<span class="map_content-address">' +
        'Санкт-Петербург улица Моисеенко, 39АЕ' +
        '</span>' +
        '<span class="map_content-tel">' +
        '+7(996)784-35-42' +
        '</span>';

    var placemark = new ymaps.Placemark([59.936764, 30.391336], {
        //balloonContentHeader: '',
        balloonContentBody: contentString,
        //balloonContentFooter: '',
        hintContent: 'skoloff-net'
    }, {
        iconLayout: 'default#image',
        iconImageHref: markerUrl,
        iconImageSize: [28, 40],
        iconImageOffset: [-20, -20],
        // Определим интерактивную область над картинкой.
        iconShape: {
            type: 'Circle',
            coordinates: [0, 0],
            radius: 20
        }
    });
    mapContacts.geoObjects.add(placemark);*/