<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 16:46
 */ ?>
<!-- Material form register -->
<div class="container">
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Editar Monitor</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" method="post" action="<?= site_url('/Monitors/updateMonitor') ?>"
                  style="color: #757575;">

                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <input type="hidden" name="IDENTIFICADOR" value="<?=$monitor->IDENTIFICADOR?>">
                        <div class="md-form">
                            <input name="NOMBRE" value="<?=$monitor->NOMBRE?>" type="text" id="materialRegisterFormFirstName" class="form-control">
                            <label for="materialRegisterFormFirstName">Nombre</label>
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                            <input name="APELLIDOS" value="<?=$monitor->APELLIDOS?>" type="text" id="materialRegisterFormLastName" class="form-control">
                            <label for="materialRegisterFormLastName">Apellidos</label>
                        </div>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input name="EMAIL" type="email" value="<?=$monitor->EMAIL?>" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">E-mail</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input name="TELEFONO" value="<?=(int)$monitor->TELEFONO?> "type="tex   t" id="materialRegisterFormPassword" class="form-control"
                           aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">Teléfono</label>
                </div>
                <!-- Password -->
                <div class="md-form">
                    <input name="DNI" type="text" value="<?=$monitor->DNI?>" ="materialRegisterFormPassword" class="form-control"
                           aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">DNI</label>
                </div>


                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                    Editar Monitor
                </button>


            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form register -->