<div>
    <h1> Ini adalah Map</h1>
    <div id='map' style='width: 600px; height: 400px; border:1px solid black;'>

</div>


</div>

@push('scripts')

<script>

mapboxgl.accessToken = 'pk.eyJ1IjoibGFlZGRpcyIsImEiOiJja2xraWFxbmgwNTBzMnBtd3B1bjluYW9xIn0.39A6eWtKxzvLiYv-L-mNCA';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script>

@endpush