







<script>
    const urlGetPatients = "<?=site_url('/Patients/getPatientsList')?>";
    $.ajax({
        url: urlGetPatients,
        type: "POST",
        data: {}
    })
        .done(function (patients) {
            if (JSON.parse(patients).length === 0) {
                $('.noResult').show()
            } else {
                $('.waitingResult').hide();
                $(JSON.parse(patients)).each( function (index, patient) {
                    var html = `<tr>
                        <td>${patient.IDENTIFICADOR}</td>
                        <td>${patient.NOMBRE}</td>
                        <td>${patient.APELLIDOS}</td>
                        <td>${patient.DNI}</td>
                        <td>${patient.TELEFONO}</td>
                        <td>${patient.EMAIL}</td>
                        <td>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        	    <button id="PE_${patient.IDENTIFICADOR}" type="button" class="btn btn-secondary btn-sm editBtn" data-toggle="modal" data-target="#modalEditPatient">
                        	        <i class="fa fa-edit"></i>
                                </button>
                        	    <button id="PD_${patient.IDENTIFICADOR}" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalAddPatient">
                        	        <i class="fa fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    `
                    $('tbody').append(html)
                })
            }
        })
        .fail(function (err) {
            $('.noResult').show()
        });


    $("body").on("click", ".editBtn", function(){
        console.log("BOTON DEL ID = " + $(this).attr("id").split("_")[1]);
        $("#modalEditPatient #id").val($(this).attr("id").split("_")[1]);
    });
</script>