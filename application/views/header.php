<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Penjualan Kenderaan">
    <meta name="author" content="Abas Djumadi">

    <title>Penjualan</title>

   <!-- Latest compiled and minified CSS -->
	<link href="<?= base_url(); ?>/asset/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	body {
		  padding-top: 50px;
		}
	.starter-template {
		  padding: 40px 15px;
		  text-align: center;
		}
	</style>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= site_url(); ?>">Penjualan</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        <?php if ($this->session->userdata('username') != ''){ ?>
	        <ul class="nav navbar-nav">
	        	<?php if ($this->session->userdata('level') === 'Admin'){ ?>
	        		<li><a href="<?= site_url('penjualan') ?>">Transaksi</a></li>
	        		<li><a href="<?= site_url('user') ?>">User</a></li>
	        	<?php }?>
	        </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="<?= site_url('user/logout'); ?>">Close</a></li>
          </ul>
        <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">