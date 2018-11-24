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
        type:"POST",
        data: {}
    })
    .done(function (monitors) {
        console.log(monitors)
    })
    .fail()
</script>