<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 16:03
 */ ?>

<script>
    const urlGetMonitors = "<?=site_url('/Monitors/getMonitorsList')?>";
    $.ajax({
        url: urlGetMonitors,
        type: "POST",
        data: {}
    })
        .done(function (monitors) {
            if (monitors.length === 0) {
                $('.noResult').show()
            } else {
                $('.waitingResult').hide();
                $.each(monitors, function (index, monitor) {
                    var html = `<tr>
                        <td>${monitor.IDENTIFICADOR}</td>
                        <td>${monitor.NOMBRE}</td>
                        <td>${monitor.APELLIDOS}</td>
                        <td>${monitor.DNI}</td>
                        <td>${monitor.TELEFONO}</td>
                        <td>${monitor.EMAIL}</td>
                    `
                    $('tbody').append(html)
                })
            }
        })
        .fail(function (err) {
            $('.noResult').show()
        })
</script>