<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 16:02
 */ ?>
<div class="row">
    <a href="<?= site_url('Monitors/add') ?>">
        <button type="button" class="btn btn-primary btn-rounded">Añadir monitor</button>
    </a>
</div>

<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="th-sm">#
        </th>
        <th class="th-sm">NOMBRE
        </th>
        <th class="th-sm">APELLIDOS
        </th>
        <th class="th-sm">DNI
        </th>
        <th class="th-sm">TELEFONO
        </th>
        <th class="th-sm">EMAIL
        </th>
        <th class="th-sm">
            Acciones
        </th>
    </tr>
    </thead>
    <tbody>
    <tr class="waitingResult">
        <td colspan="6" class="text-center">
            <i class="fa fa-spin fa-spinner"></i>
        </td>
    </tr>
    <tr class="noResult" style="display:none;">
        <td colspan="6">
            <div class="alert alert-danger" role="alert">
                LO SENTIMOS, NO EXISTEN MONITORES AHORA MISMO!
            </div>

        </td>
    </tr>
    </tbody>
</table>
