<div class="form-group row">
    <label for="label" class="col-lg-3 col-form-label requerido">Etiqueta</label>
    <div class="col-lg-8">
      <input type="text" name="label" id="label" class="form-control" value="{{old('label')}}"/> 
    </div>
</div>
<div class="form-group row">  
  <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
  <div class="col-lg-8">
     <input type="text" name="url" id="url" class="form-control" value="{{old('url')}}" required />
  </div>
</div>
<div class="form-group row">
  <label for="icono" class="col-lg-3 col-form-label">Icono</label>
  <div class="col-lg-8">
    <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono')}}" />
  </div>    
</div>
