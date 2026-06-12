@extends('layouts.app')

@section('title','prayer-space')

@section('content')


<div class="container my-4">

    <div class="container">
        <div id="prayer-times" class="card"></div>

<head>
    <title>Prayer Space</title>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-bhE4I0DztxxytLEdJO2JNWsLL8NS4l8&libraries=places"></script>
</head>
<body>
    <h1>Prayer Space</h1>
    <div id="prayer-times" class="card"></div>
            <h2>Prayer Times</h2>
            <ul>
                <li>Fajr: <span id="fajr"></span></li>
                <li>Dhuhr: <span id="dhuhr"></span></li>
                <li>Asr: <span id="asr"></span></li>
                <li>Maghrib: <span id="maghrib"></span></li>
                <li>Isha: <span id="isha"></span></li>
            </ul>
        </div>


    <div id="qibla-finder">
        <h2>Qibla Finder</h2>
        <p id="qibla">Qibla Direction: Loading...</p>
        <div id="qibla-compass" style="position: relative; width: 150px; height: 150px; margin: auto;">
            <img
                src="frontend/images/compass bg.jpeg"
                alt="Compass background"
                style="width: 100%; height: 100%; position: absolute; z-index: 1;"
            />
            <img
                id="qibla-compass-arrow"
                src="frontend/images/arrow.jpeg"
                alt="Compass arrow"
                style="width: 50px; height: 50px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(0deg); z-index: 2;"
            />
        </div>
    </div>


    <!-- map -->
    <h2>Nearby Mosque</h2>
    <div id="map"
     style="width: 100%; height: 400px;"></div>

    <!-- Back Button -->
    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Back</a>

    <script>
        // Check if Geolocation is available
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;

                    // Log user's location
                    console.log("Latitude: " + lat + ", Longitude: " + lon);

                    // Fetch prayer times
                    fetchPrayerTimes(lat, lon);

                    // Fetch Qibla direction
                    fetchQibla(lat, lon);

                    // Initialize the map with mosques
                    initMap(lat, lon);
                },
                (error) => {
                    console.error("Error fetching location:", error);
                    alert("Unable to fetch your location.");
                }
            );
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    });

    async function fetchPrayerTimes(lat, lng) {
        const response = await fetch(`/api/prayer-times?lat=${lat}&lng=${lng}`);
        const data = await response.json();
        document.getElementById('prayer-times').innerHTML = data.html;
    }

    async function fetchQiblahDirection(lat, lng) {
        const response = await fetch(`/api/qiblah?lat=${lat}&lng=${lng}`);
        const data = await response.json();
        document.getElementById('qiblah-direction').innerHTML = `Qiblah: ${data.direction}°`;
    }

    async function fetchNearbyMosques(lat, lng) {
        const response = await fetch(`/api/nearby-mosques?lat=${lat}&lng=${lng}`);
        const data = await response.json();
        // Render the map dynamically
        document.getElementById('mosque-map').src = data.mapUrl;
    }
</script>

</body>
@endsection

