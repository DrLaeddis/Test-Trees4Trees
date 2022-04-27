<div>
    <h1> Ini adalah Map</h1>
    <div id='map' style='width: 600px; height: 400px; border:1px solid black;'>

</div>


</div>

@push('scripts')

<script>

    console.log("Value dari", @this.test);

mapboxgl.accessToken = 'pk.eyJ1IjoibGFlZGRpcyIsImEiOiJja2xraTdndHUyczZsMndtbHB4NXloYzU1In0.I2q4T1TbUHd3iOVyXXXLjw';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11'
});
</script>

@endpush