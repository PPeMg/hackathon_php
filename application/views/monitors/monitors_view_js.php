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
    const urlDeleteMonitor = "<?=site_url('/Monitors/deleteMonitor')?>";
    const siteUrlThis = "<?=site_url('/Monitors')?>";
</script>
<script>
    function deleteMonitor(id) {
        $.ajax({
            url: urlDeleteMonitor,
            type: "POST",
            data: {IDENTIFICADOR: id}
        })
            .done(function (result) {
                if (result[0] == 'true')
                    window.location = siteUrlThis
            })
    }
</script>
<script>

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
                $(JSON.parse(monitors)).each(function (index, monitor) {
                    var html = `<tr>
                        <td>${monitor.IDENTIFICADOR}</td>
                        <td>${monitor.NOMBRE}</td>
                        <td>${monitor.APELLIDOS}</td>
                        <td>${monitor.DNI}</td>
                        <td>${monitor.TELEFONO}</td>
                        <td>${monitor.EMAIL}</td>
                        <td><a href="${siteUrlEdit}/${monitor.IDENTIFICADOR}"  data-id="${monitor.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-edit"></i></a>
                        <a onclick="javascript:deleteMonitor(${monitor.IDENTIFICADOR})" data-id="${monitor.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-trash"></i></a>
                        </td>
                    `
                    $('tbody').append(html)
                })
            }
        })
        .fail(function (err) {
            $('.noResult').show()
        })

</script>