<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h1>Eliminar Ficha</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>card/index">Lista de Fichas</a></li>
          </ol>
        </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-body">
              <p class="card-text">Confirme los datos antes de eliminar el registro</p>
            </div>
          </div>
        </div>
      </div>
      <form role="form" method="POST" action="<?php echo APP_URL; ?>card/confirmDelete">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h5 class="card-title">Datos de la ficha</h5>
            </div>
            <?php foreach ($this->card as $card) { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <label>Indice</label>
                  <input readonly type="text" class="form-control" id="idCard" name="idCard" value="<?php echo $card->id; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Numero</label>
                  <input readonly type="text" class="form-control" id="cardNumber" name="cardNumber" value="<?php echo $card->numero; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Programa de Formacion</label>
                  <input readonly type="text" class="form-control" id="cardProgram" name="cardProgram" value="<?php echo $card->programaformacion; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Jornada</label>
                  <input readonly type="text" class="form-control" id="cardAssignedTime" name="cardAssignedTime" value="<?php echo $card->jornada; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Modalidad</label>
                  <input readonly type="text" class="form-control" id="cardMode" name="cardMode" value="<?php echo $card->modalidad; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Fecha de inicio</label>
                  <input readonly type="text" class="form-control" id="cardStartDate" name="cardStartDate" value="<?php echo $card->fechainicio; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Fecha de finalizacion</label>
                  <input readonly type="text" class="form-control" id="cardEndDate" name="cardEndDate" value="<?php echo $card->fechafin; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Gestor de grupo</label>
                  <input readonly class="form-control" id="cardInstructor" name="cardInstructor" value="<?php echo $card->nombreinstructor; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Numero de aprendices</label>
                  <input readonly class="form-control" id="cardCapacity" name="cardCapacity" value="<?php echo $card->cantidad; ?>">
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="container">
            <div class="row">
              <div class="col-sm-8">
                <input type="submit" class="btn btn-danger" value="Eliminar">
              </div>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </section>
</div>