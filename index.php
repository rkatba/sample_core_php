<?php
include_once 'custom_ajax.php';
?>
<html>
    <head></head>
    <body>
        <table>
            <thead>
                <tr>ID</tr>
                <tr>Name</tr>
                <tr>Sub1</tr>
                <tr>Sub2</tr>
                <tr>Sub3</tr>
            </thead>
            <tbody></tbody>
            <tfoot></tfoot>
        </table>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            "url": "custom_ajax.php",
            "type": "POST",
            //"dataType" : "",
            "data": {
                "action": "select_users"
            },
            "success": function (response) {
                console.log(response);
            },
            "error": function (error) {

            }
        })
    });
</script>