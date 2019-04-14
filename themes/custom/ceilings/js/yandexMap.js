ymaps.ready(init);
var myMap,
    myPlacemark;

function init(){
    myMap = new ymaps.Map("map", {
      center: [54.982156, 73.321976],
      zoom: 16
    });

  myPlacemark = new ymaps.Placemark([54.982400, 73.323485], {
    hintContent: 'Омск',
    balloonContent: 'г. Омск, ул. 70 Лет Октября, д. 20'
  });
  myMap.geoObjects.add(myPlacemark);
}