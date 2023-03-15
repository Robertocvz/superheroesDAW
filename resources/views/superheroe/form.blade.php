<label for="NombreReal">Nombre Real </label>
    <input type="text" name="NombreReal" value="{{isset($superheroe->Nombre)?$superheroe->Nombre:' '}}" id="NombreReal"> 
    <br>
    <label for="NombreSuperheroe">Nombre Superheroe </label>
    <input type="text" name="NombreSuperheroe" value="{{isset($superheroe->NombreSuperheroe)?$superheroe->NombreSuperheroe:' '}}"id="NombreSuperheroe"> 
    <br>
    <label for="Foto">Foto</label>
    @if(isset($superheroe->Foto))
    <img width="50px" height="50x" src="{{asset('storage'.'/'.$superheroe->Foto)}}"/>
    @endif
    <input type="file" name="Foto" value="" id="Foto"> 
    <br>
    <label for="InformacionAdicional">Informacion Adicional</label>
    <input type="text" name="InformacionAdicional" value="{{isset($superheroe->InformacionAdicional)?$superheroe->InformacionAdicional:' '}}" id="InformacionAdicional"> 
    <br>
    <input type="submit" value="Guardar datos"> 
    <br>
    <a href="{{url('/superheroe/')}}"> REGRESAR </a>