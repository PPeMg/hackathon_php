







<script>
    const urlGetPatients = "<?=site_url('/Patients/getPatientsList')?>";
    $.ajax({
        url: urlGetPatients,
        type: "POST",
        data: {}
    })
        .done(function (patients) {
            console.log(patients);
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
                    `
                    $('tbody').append(html)
                })
            }
        })
        .fail(function (err) {
            $('.noResult').show()
        });
</script>