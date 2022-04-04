<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Registro de Instructores</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Lista de Instructores</a></li>
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
            <div class="card-header">
              <h3 class="card-title">Formulario de registro</h3>
            </div>
            <form role="form" method="POST" action="<?php echo APP_URL; ?>instructor/save">
              <div class="card-body">
                <div class="form-group col-md-12">
                  <label for="instructorName">Nombre del Instructor</label>
                  <input type="text" class="form-control" id="instructorName" name="instructorName" placeholder="Escriba el nombre aqui...">
                </div>
                <div class="form-group col-md-4">
                  <label for="instructorDoc">Cédula</label>
                  <input type="number" class="form-control" id="instructorDoc" name="instructorDoc" placeholder="Ingrese cédula aqui...">
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="instructorArea">Área</label>
                    <select class="form-control" id="instructorArea" name="instructorArea">
                      <option disabled selected>Seleccione un área</option>
                      <option>AREA DE SISTEMAS, MANTENIMIENTO DE EQUIPOS DE COMPUTO Y DISEÑO GRAFICO Y MULTIMEDIAL</option>
                      <option>AREA DE ELECTRONICA Y MANTENIMIENTO ELECTRONICO</option>
                      <option>AREA DE DISEÑO, IMPLEMENTACION Y MANTENIMIENTO DE SISTEMAS DE TELECOMUNICACIONES</option>
                      <option>AREA DE TELEINFORMATICA Y ADSI</option>
                      <option>AREA DE CNC</option>
                      <option>GESTION DE LA PRODUCCION INDUSTRIAL</option>
                      <option>AREA DE AUTOMATIZACION INDUSTRIAL Y DISEÑO E INTEGRACION DE AUTOMATISMOS MECATRONICOS</option>
                      <option>INTERACCION IDONEA COMUNICACION</option>
                      <option>AREA DE INGLES</option>
                      <option>AREA DE MANTENIMIENTO BIOMEDICO</option>
                      <option>CULTURA FISICA</option>
                      <option>EMPRENDIMIENTO</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="instructorType">Tipo de Instructor</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="instructorType">
                      <label class="form-check-label">Virtual</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="instructorType">
                      <label class="form-check-label">Presencial</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="instructorVinculation">Vinculación</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="instructorVinculation">
                      <label class="form-check-label">Planta</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="instructorVinculation">
                      <label class="form-check-label">Contratista</label>
                    </div>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="instructorHours">Total/horas del Instructor</label>
                    <input type="number" class="form-control" id="instructorHours" name="instructorHours">
                  </div>  
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark">
                      Guardar Registro
                    </button>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>