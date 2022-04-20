<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detalles de la Ficha</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo APP_URL; ?>card/index">Lista de Fichas</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-6">

        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary">
                        <?php foreach ($this->card as $card) { ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Indice</label>
                                        <p><?php echo $card->id; ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Numero de Ficha</label>
                                        <p><?php echo $card->numero; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Programa de formacion</label>
                                        <p><?php echo $card->programaformacion; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Jornada</label>
                                        <p><?php echo $card->jornada; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Modalidad</label>
                                        <p><?php echo $card->modalidad; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Fecha de Inicio</label>
                                        <p><?php echo $card->fechainicio; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Fecha de finalizacion</label>
                                        <p><?php echo $card->fechafin; ?>
                                        <p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Gestor de grupo</label>
                                        <p><?php echo $card->nombreinstructor; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Numero de aprendices</label>
                                        <p><?php echo $card->cantidad; ?>
                                        </p>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <label>Formulario de actualización de datos</label>
                        </div>
                        <form role="form" method="POST" action="<?php echo APP_URL; ?>card/update">
                            <?php foreach ($this->card as $card) { ?>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" id="idCard" name="idCard" value="<?php echo $card->id; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="cardNumber">Numero de Ficha</label>
                                            <input type="text" class="form-control" id="cardNumber" name="cardNumber" value="<?php echo $card->numero; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-8">
                                            <label for="cardProgram">Programa de formación</label>
                                            <select class="form-control" id="cardProgram" name="cardProgram">
                                                <?php
                                                $dsn = DBTYPE . ":host=" . DBHOST . ";dbname=" . DBNAME;
                                                $connection = new PDO($dsn, DBUSER, DBPASS);
                                                $query = $connection->prepare("SELECT * FROM programas");
                                                $query->execute();
                                                $data = $query->fetchAll();
                                                foreach ($data as $program) :
                                                    echo '<option value="' . $program["id"] . '">' . $program["nombre"] . '</option>';
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="cardAssignedTime">Jornada</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cardAssignedTime" value="Diurna">
                                                <label class="form-check-label">Diurna</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cardAssignedTime" value="Nocturna">
                                                <label class="form-check-label">Nocturna</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="cardMode">Modalidad</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cardMode" value="Virtual">
                                                <label class="form-check-label">Virtual</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="cardMode" value="Presencial">
                                                <label class="form-check-label">Presencial</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="cardStartDate">Fecha de inicio</label>
                                            <input type="date" class="form-control" id="cardStartDate" name="cardStartDate" value="<?php echo $card->fechainicio; ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="cardEndDate">Fecha de finalizacion</label>
                                            <input type="date" class="form-control" id="cardEndDate" name="cardEndDate" value="<?php echo $card->fechafin; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="cardInstructor">Gestor de grupo</label>
                                            <select class="form-control" id="cardInstructor" name="cardInstructor">
                                                <?php
                                                $dsn = DBTYPE . ":host=" . DBHOST . ";dbname=" . DBNAME;
                                                $connection = new PDO($dsn, DBUSER, DBPASS);
                                                $query = $connection->prepare("SELECT * FROM instructores");
                                                $query->execute();
                                                $data = $query->fetchAll();
                                                foreach ($data as $instructor) :
                                                    echo '<option value="' . $instructor["id"] . '">' . $instructor["nombre"] . '</option>';
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="cardCapacity">Numero de aprendices</label>
                                            <input type="number" class="form-control" id="cardCapacity" name="cardCapacity" value="<?php echo $card->cantidad; ?>">
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Actualizar">
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