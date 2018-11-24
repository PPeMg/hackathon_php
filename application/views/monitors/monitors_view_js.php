<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 16:03
 */ ?>

<script>
    const siteUrlEdit = "<?=site_url('/Monitors/edit')?>";
    const urlGetMonitors = "<?=site_url('/Monitors/getMonitorsList')?>";
    $.ajax({
        url: urlGetMonitors,
        type: "POST",
        data: {}
    })
        .done(function (monitors) {

            if (JSON.parse(monitors).length === 0) {
                $('.noResult').show()
            } else {
                $('.waitingResult').hide();
                $(JSON.parse(monitors)).each(function (index, monitor) {
                    var html = `<tr>
                        <td>${monitor.IDENTIFICADOR}</td>
                        <td>${monitor.NOMBRE}</td>
                        <td>${monitor.APELLIDOS}</td>
                        <td>${monitor.DNI}</td>
                        <td>${monitor.TELEFONO}</td>
                        <td>${monitor.EMAIL}</td>
                        <td><a href="${siteUrlEdit}/${monitor.IDENTIFICADOR}"  data-id="${monitor.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-edit"></i></a>
                        <a onclick="javascript:delete(${monitor.IDENTIFICADOR})" data-id="${monitor.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-trash"></i></a>
                        </td>
                    `
                    $('tbody').append(html)
                })
            }
        })
        .fail(function (err) {
            $('.noResult').show()
        })

    function edit(id) {

    }
</script>