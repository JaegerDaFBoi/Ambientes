<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
      <div class="col-sm-6">
        <h1>Eliminar Instructor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>instructor/index">Lista de Instructores</a></li>
        </ol>
      </div>
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
      <form role="form" method="POST" action="<?php echo APP_URL; ?>instructor/confirmDelete">
      <div class="row">
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              <h5 class="card-title">Datos del instructor</h5>
            </div>
            <?php foreach ($this->instructor as $instructor) { ?>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <label>Indice</label>
                  <input readonly type="text" class="form-control" id="idInstructor" name="idInstructor" value="<?php echo $instructor->id; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Nombre</label>
                  <input readonly type="text" class="form-control" id="instructorName" name="instructorName" value="<?php echo $instructor->nombre; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Cédula</label>
                  <input readonly type="text" class="form-control" id="instructorDoc" name="instructorDoc" value="<?php echo $instructor->cedula; ?>"> 
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Área</label>
                  <input readonly type="text" class="form-control" id="instructorArea" name="instructorArea" value="<?php echo $instructor->area; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Tipo</label>
                  <input readonly type="text" class="form-control" id="instructorType" name="instructorType" value="<?php echo $instructor->tipo; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Vinculación</label>
                  <input readonly type="text" class="form-control" id="instructorVinculation" name="instructorVinculation" value="<?php echo $instructor->vinculacion; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <label>Total de horas</label>
                  <input readonly type="text" class="form-control" id="instructorHours" name="instructorHours" value="<?php echo $instructor->totalhoras; ?>">
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