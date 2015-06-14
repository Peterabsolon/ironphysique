<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>
            <?= isset($this->title) ? $this->title : 'IronPhysique' ?>
        </title>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="<?= URL_PUBLIC ?>css/bootstrap.min.css">            

        <!-- main stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?= URL_PUBLIC;?>css/main.css">

        <!-- font awesome -->
        <link rel="stylesheet" href="<?= URL_PUBLIC;?>fonts/font-awesome-4.3.0/css/font-awesome.min.css">

        

    </head>
<body class="<?=isset($this->class) ? $this->class : 'page-default' ?>">