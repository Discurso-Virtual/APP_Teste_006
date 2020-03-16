<?php 
  $path = "http://192.168.1.20/teste";
?>


<div class="modal show fade" id="myModal" tabindex="-1" role="dialog" style="padding-right: 17px; display: block;" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p> Deseja alterar o registo com Id:</p>
        <?php echo $_POST['id']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-primary">Sim</button>
      </div>
    </div>
  </div>
</div>



<?php include_once './rodape.php'; ?>
  
