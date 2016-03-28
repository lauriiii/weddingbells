<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
    <?php echo css('assets/bootstrap/css/bootstrap.min.css') ?>
    <?php echo css('assets/css/main.css') ?>
</head>
<body>

    <div class="container">
        
        <div class="row header">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="site-info">
                    <h1><a href="<?php echo url() ?>"><?php echo $site->title()->html() ?></a></h1>
                    <?php echo $site->tagline()->kirbytext() ?>
                </div>

                <img src="<?php echo url('assets/images/header.jpg') ?>" alt="Header image">
            </div>
        </div>

        <?php snippet('menu') ?>