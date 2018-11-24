<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 17:46
 */ ?>
<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 16:02
 */ ?>
<div class="modal fade" id="modalAddPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Editar Actividad</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= site_url('/Activity/updateActivity') ?>"  >
                <input type="hidden" id="iden" name="IDENTIFICADOR" >
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-id-card prefix grey-text"></i>
                        <input name="TITULO" type="text" id="materialRegisterFormEmail" class="form-control">
                        <label for="materialRegisterFormEmail">TITULO</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input name="DESCRIPCION" type="text" id="materialRegisterFormEmail2" class="form-control">
                        <label for="materialRegisterFormEmail">DESCRIPCION</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input name="NUM_PLAZAS" type="number" id="materialRegisterFormPassword" class="form-control"
                               aria-describedby="materialRegisterFormPasswordHelpBlock">
                        <label for="materialRegisterFormPassword">PLAZAS</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input name="FECHA" type="date" id="materialRegisterFormEmail3" class="form-control">
                        <label for="materialRegisterFormEmail">FECHA</label>
                    </div>


                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Editar Actividad</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <a href="<?= site_url('Activity/add') ?>">
        <button type="button" class="btn btn-primary btn-rounded">Añadir actividad</button>
    </a>
</div>

<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="th-sm">#
        </th>
        <th class="th-sm">TITULO
        </th>
        <th class="th-sm">DESCRIPCION
        </th>
        <th class="th-sm">NÚMERO DE PLAZAS
        </th>
        <th class="th-sm">FECHA
        </th>
        <th class="th-sm">HORA
        </th>
        <th class="th-sm">
            ACCIONES
        </th>
    </tr>
    </thead>
    <tbody>
    <tr class="waitingResult">
        <td colspan="7" class="text-center">
            <i class="fa fa-spin fa-spinner"></i>
        </td>
    </tr>
    <tr class="noResult" style="display:none;">
        <td colspan="7">
            <div class="alert alert-danger" role="alert">
                LO SENTIMOS, NO EXISTEN ACTIVIDADES AHORA MISMO!
            </div>

        </td>
    </tr>
    </tbody>
</table>

