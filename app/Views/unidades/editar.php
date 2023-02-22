<div class="card my-3 col-md-8 mx-auto">
  <div class="card-body">
    <h4 class="card-title">
      <?=$titulo?>
    </h4>
    <form action="<?=base_url()?>/unidades/modificar" method="POST">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" value="<?=$unidad->nombre?>" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Introduzca el nombre">
      </div>
      <div class="mb-3">
        <label for="abreviado" class="form-label">Abreviatura</label>
        <input type="text" value="<?=$unidad->abreviado?>" class="form-control col-2" name="abreviado" id="abreviado" aria-describedby="helpId"
          placeholder="Introduzca la abreviatura">
      </div>
      <div class="mb-3 text-end">
        <a type="button" href="<?=base_url()?>/unidades" class="btn btn-secondary bi-box-arrow-left"> Regresar</a>
        <button type="submit" class="btn btn-primary bi-plus" name="modificar"> Modificar</button>
      </div>
      <input type="hidden" name="id" value="<?=$unidad->id?>">
    </form>
  </div>
</div>
