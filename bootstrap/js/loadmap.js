 function loadMap() {
    const vungtau = { lat: 10.34599, lng: 107.08426 };
  // The map, centered at Uluru
  const map = new google.maps.Map(
    document.getElementById("map"),
    {
      zoom: 4,
      center: vungtau 
    }
  );
}