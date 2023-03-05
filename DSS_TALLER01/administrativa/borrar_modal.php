
<!-- Eliminar -->
<div class="modal fade" id="delete_<?php echo $produ->codigo; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eliminar el producto</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">¿Esta seguro que deseas borrar?</p>
				<h2 class="text-center">
                    <?=$produ->nombre?>
                </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="eliminar.php?cod=<?=$produ->codigo?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Confirmar</a>
            </div>
        </div>
    </div>
</div>