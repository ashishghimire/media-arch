<?php
/**
 * Created by PhpStorm.
 * User: sabin
 * Date: 6/21/16
 * Time: 11:20 AM
 */
?>

<html lang="en-US">
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="{!! url('css/backend/bootstrap.min.css') !!}">

</head>
<body>

<div class="container">


    <div class="row">
        <h1>Code Alchemny Nepal</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <b>Name: </b> {!! $name!!}
        </div>
        <div class="col-md-6">

            <b>Email:</b> {!! $email!!}
        </div>
    </div>

    <div class="row">
        <b>Messages:</b> {!! $messages  !!}

    </div>
</div>

</body>
</html>




