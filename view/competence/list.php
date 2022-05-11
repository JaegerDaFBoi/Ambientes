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
        
          <div class="col-sm-8">
            <input type="hidden" name="idProgram" value="<?php echo $this->program[0]->id; ?>">
            <p><?php echo $this->program[0]->nombre; ?></p>
            
          </div>
        
      </div>
      
    </div>
  </section>

  <section class="content">
    <div class="row">
      
      <div class="col-md-6">
        <a href="<?php echo APP_URL; ?>competence/create?id=<?php echo $this->program[0]->id; ?>">
          <button type="button" class="btn btn-primary float-left" style="margin-right: 5px;">
            Crear Competencia
          </button>
        </a>
      </div>
      
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Buscar">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive p-0">

            <table class="table table-hover table-bordered text-nowrap">
              <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Descripcion</th>
                  <th>Horas Semanales</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($this->competences as $competence) {
                ?>
                <td><?php echo $competence->codigo ?></td>
                <td><?php echo $competence->descripcion ?></td>
                <td><?php echo $competence->horassemana ?></td>  
              </tbody>
              <?php
                }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>