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
            <strong>Añadir Actividad</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" method="post" action="<?= site_url('/Activity/addActivity') ?>"
                  style="color: #757575;">

                <div class="md-form mt-0">
                    <input name="TITULO" type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">TITULO</label>
                </div>

                <!-- E-mail -->
                <div class="md-form mt-0">
                    <input name="DESCRIPCION" type="text" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">DESCRIPCION</label>
                </div>

                <!-- Password -->
                <div class="md-form">
                    <input name="NUM_PLAZAS" type="number" id="materialRegisterFormPassword" class="form-control"
                           aria-describedby="materialRegisterFormPasswordHelpBlock">
                    <label for="materialRegisterFormPassword">PLAZAS</label>
                </div>
                <div class="md-form mt-0">
                    <input name="FECHA" type="date" id="materialRegisterFormEmail" class="form-control">
                    <label for="materialRegisterFormEmail">FECHA</label>
                </div>
                <!-- Password -->
                <div class="md-form">
                    <select name="MONITOR" class="browser-default custom-select">
                        <?php foreach ($monitors as $key => $monitor):?>
                        <option value="<?=$monitor->IDENTIFICADOR?>"><?=$monitor->NOMBRE?></option>
                        <?php endforeach;?>
                    </select>
                </div>


                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                    Registrar Actividad
                </button>


            </form>
            <!-- Form -->

        </div>

    </div>
</div>
<!-- Material form register -->