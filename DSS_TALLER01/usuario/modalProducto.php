<!-- Modal para ver detalles de producto -->
<div class="modal fade" id="modalProducto<?= $produ->id ?>" tabindex="-1" role="dialog" aria-labelledby="modalProductoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalProductoLabel"><?= $produ->nombre ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="card-img-top" src="../img/<?= $produ->img ?>" alt="" width="300" height="300">
        <p class="card-text">Precio: $<?= $produ->precio ?></p>
        <p class="card-text">Categoria: <?= $produ->categoria ?></p>
        <p class="card-text"><?= $produ->descripcion ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
