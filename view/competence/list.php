<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Competencias</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>initial/index">Inicio</a></li>
          </ol>
        </div>
      </div>
      <div class="row">
      <?php foreach ($this->program as $program) { ?>
        <div class="col-sm-8">
          <input type="hidden" name="idProgram" value="<?php echo $program->id; ?>">
          <p><?php echo $program->nombre; ?></p>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>
</div>