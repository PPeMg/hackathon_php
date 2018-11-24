<div class="modal fade" id="modalAddPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Add Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= site_url('/Patients/addPatient') ?>"  >
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-id-card prefix grey-text"></i>
                        <input type="text" id="dni" name="dni" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="dni">DNI</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="name" name="name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="name">First name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="lastName" name="lastName" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="lastName">Last name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="tel" id="telephone" name="telephone" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="telephone">Telephone</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Add Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditPatient" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Edit Patient</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?= site_url('/Patients/updatePatient') ?>"  >
                <input type="hidden" id="id" name="id" class="form-control">
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fa fa-id-card prefix grey-text"></i>
                        <input type="text" id="dni" name="dni" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="dni">DNI</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="name" name="name" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="name">First name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="lastName" name="lastName" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="lastName">Last name</label>
                    </div>
                    <div class="md-form mb-5">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="email" id="email" name="email" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                    </div>

                    <div class="md-form mb-4">
                        <i class="fa fa-phone prefix grey-text"></i>
                        <input type="tel" id="telephone" name="telephone" class="form-control validate">
                        <label data-error="wrong" data-success="right" for="telephone">Telephone</label>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit">Edit Patient</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<!--Table-->
			<table id="tablePatients" class="table">
				<!--Table head-->
				<thead>
					<tr>
						<th>#</th>
						<th>DNI</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Telephone</th>
						<th>Email</th>
						<th></th>
					</tr>
				</thead>
				<!--Table head-->
				<!--Table body-->
				<tbody>
                    <tr class="waitingResult">
                        <td colspan="6" class="text-center">
                            <i class="fa fa-spin fa-spinner"></i>
                        </td>
                    </tr>
                    <tr class="noResult" style="display:none;">
						<td colspan="6">
							La lista de pacientes está vacía.
						</td>
					</tr>
				</tbody>
				<!--Table body-->
			</table>
			<!--Table-->
		</div>
	</div>
    <div class="row">
    	<div class="col-12">
    	    <button id="addPatient_btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAddPatient">
    	        <i class="fa fa-plus"></i> Add Patient
            </button>
    	</div>
    </div>
</div>