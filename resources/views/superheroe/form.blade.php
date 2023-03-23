<div class="form-group">
<label for="NombreReal">Nombre Real </label>
    <input type="text" class="form-control" name="NombreReal" value="{{isset($superheroe->Nombre)?$superheroe->Nombre:' '}}" id="NombreReal"> 
    <br>
</div>

<div class="form-group">
    <label for="NombreSuperheroe">Nombre Superheroe </label>
    <input type="text"  class="form-control" name="NombreSuperheroe" value="{{isset($superheroe->NombreSuperheroe)?$superheroe->NombreSuperheroe:' '}}"id="NombreSuperheroe"> 
    </div>

    <div class="form-group">
    <label for="Foto">Foto</label>
    @if(isset($superheroe->Foto))
    <img class="img-thumbnail img-fliud" width="50px" height="50x" src="{{asset('storage'.'/'.$superheroe->Foto)}}"/>
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto"> 
    </div>

    <div class="form-group">
    <label for="InformacionAdicional">Informacion Adicional</label>
    <input type="text" class="form-control" name="InformacionAdicional" value="{{isset($superheroe->InformacionAdicional)?$superheroe->InformacionAdicional:' '}}" id="InformacionAdicional"> 
    </div>
    <br>
    <input class="btn btn-success" type="submit" value="Guardar datos"> 

    <a class="btn btn-primary" href="{{url('/superheroe/')}}"> REGRESAR </a>
    <br>