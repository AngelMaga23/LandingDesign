<div class="col-md-12" style="font-family: 'Exo 2', sans-serif">
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 10px, font-size:20px">
            <div class="form-group">
                <label style="margin-bottom: 10px, font-size:10px, font-weight:700">Nombre: </label>
                <p>{{ $nombre }}</p>
            </div>
        </div>

        <div class="col-md-6" style="margin-bottom: 10px, font-size:20px">
            <label style="margin-bottom: 10px, font-size:20px, font-weight:700">Marca: </label>
            <p>{{ $marca }}</p>
        </div>
        <div class="col-md-6" style="margin-bottom: 10px, font-size:20px">
            <label style="margin-bottom: 10px, font-size:20px, font-weight:700">Modelo</label>
            <p>{{ $modelo }}</p>
        </div>

        <div class="col-md-12" style="margin-bottom: 10px, font-size:20px">
            <img src="{{ "data:image/png;base64,". $imagen }}" width="200px" height="200px" style="object-fit: cover">
        </div>

    </div>
</div>