<?php
/**
 * Created by PhpStorm.
 * User: Poliedro
 * Date: 24/11/2018
 * Time: 17:47
 */ ?>
<script>
    const siteUrlThis = "<?=site_url('/Activity')?>";
    const siteUrlEdit = "<?=site_url('/Activity/edit')?>";
    const urlGetActivity = "<?=site_url('/Activity/getActivityList')?>";
    const urlDeleteActivity = "<?=site_url('/Activity/deleteActivity')?>";

    function editActivity(id) {
        $.ajax({
            url: urlGetActivity,
            type: "POST",
            data: {IDENTIFICADOR: id}
        })
            .done(function (activities) {
                activity = JSON.parse(activities)[0]
                $('#materialRegisterFormEmail').val(activity.TITULO)
                $('#materialRegisterFormEmail2').val(activity.DESCRIPCION)
                $('#materialRegisterFormPassword').val(activity.NUM_PLAZAS)
                $('#materialRegisterFormEmail3').val(activity.FECHA)
                $('#iden').val(activity.IDENTIFICADOR)
            })
    }
    function deleteActivity(id) {
        $.ajax({
            url: urlDeleteActivity,
            type: "POST",
            data: {IDENTIFICADOR: id}
        }).done(function () {
            window.location = siteUrlThis
        })
    }
</script>
<script>
    $.ajax({
        url: urlGetActivity,
        type: "POST",
        data: {}
    })
        .done(function (activities) {

            if (activities.length === 0) {
                $('.noResult').show()
            } else {
                $('.waitingResult').hide();
                $(JSON.parse(activities)).each(function (index, activity) {
                    var html = `<tr>
                        <td>${activity.IDENTIFICADOR}</td>
                        <td>${activity.TITULO}</td>
                        <td>${activity.DESCRIPCION}</td>
                        <td>${activity.NUM_PLAZAS}</td>
                        <td>${activity.FECHA}</td>
                        <td>${activity.HORA}</td>
                        <td><a onclick="javascript:editActivity(${activity.IDENTIFICADOR})" data-toggle="modal" data-target="#modalAddPatient" data-id="${activity.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-edit"></i></a>
                        <a onclick="javascript:deleteActivity(${activity.IDENTIFICADOR})" data-id="${activity.IDENTIFICADOR}" class="btn-floating btn-lg purple-gradient"><i class="fa fa-trash"></i></a>
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