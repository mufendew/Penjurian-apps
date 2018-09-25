<!DOCTYPE html>
<html lang="en">
<head>

<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body style="background-image: url(<?php echo base_url();?>assets/Image/background.jpg); background-attachment: fixed;">

<div class="navbar-fixed">
  <nav class="white" style="background-color: #026AB0">
      <a id="logo-container" href="#" class="brand-logo font yellow-text logo-pojok"><img src="<?php echo base_url();?>assets/Image/logo7.png" height="40px;"></a>
      <ul class="right hide-on-med-and-down" style="margin-right: 100px;">
        <li><a class="yellow-text text-darken-2 font" href="#"><i class="material-icons left" style="margin-top: 4px">account_circle</i>Administrator</a></li>
        <li><a href="<?php echo base_url();?>index.php/Wakwaw/LogOut" class="waves-effect waves-light btn red">Log Out</a></li>
        
 
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons black-text">menu</i></a>
  </nav>
</div>
  	  <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      
      
<div class="container">
	<div class="section">
		<div class="row">
			<h4 class="center-align font yellow-text text-darken-2"><b>ADMIN PAGE</b></h4>
			<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
		</div>
		<div class="row">
			<div class="col s12">
				<div class="card z-depth-4">
					<div class="card-tabs">
						<ul class="tabs">
							<li class="tab col s12"><a href="#test4">PENJURIAN PESERTA</a></li>
						</ul>
					</div>
					<div class="card-content grey lighten-5">
						<div id="test4">
							<div class="row">
								<div class="col s12">
									<div style="overflow-x: scroll; margin: 2px;">
									<table id="data-table-simple" class="striped" cellspacing="0" style="">
									  <thead>
										<tr>
										  <th>Nama Tim</th>
										  <th>Ruangan</th>
										  <th>Nilai juri 1</th>
										  <th>Nilai Juri 2</th>
										  <th>Nilai Juri 3</th>
										  <th>Total</th>
										  <th>Rata-Rata Total</th>
										  <th>Docx</th>
										</tr>
									  </thead>
									  <tbody>
									      <?php $i=1; foreach($admin as $admin => $key) { ?>
                                       	<tr>
                                            <td><?php echo $key->NAMA_TIM; ?></td>
											<td><?php echo $key->RUANG_SESI; ?></td>
                                            <td><?php echo $key->NILAI_JURI1; ?></td>
                                            <td><?php echo $key->NILAI_JURI2; ?></td>
                                            <td><?php echo $key->NILAI_JURI3; ?></td>
                                            <td><?php echo $key->NILAI_TOTAL; ?></td>
                                            <td><?php echo round(($key->NILAI_TOTAL/3),2); ?></td>
                                            <td><a href="<?php echo base_url("index.php/Admin/jadiword/").$key->NAMA_TIM;?>"><i class="material-icons" target="_BLANK">file_download</i></a></td>
										</tr>
										<?php $i++; } ?>
									  </tbody>
									</table>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




  <!-- core footer -->
  <?php $this->load->view('fragment/footer');?>

  <!-- core js -->

  <?php $this->load->view('fragment/script');?>
  <script src="<?php echo base_url();?>assets/plugin/ckeditor/ckeditor.js"></script>



  
  
  <script>
	  $('.owl-carousel').owlCarousel({
		loop:false,
		margin:10,
		nav:false,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:2
			},
			1200:{
				items:3
			}
		}
	})
  </script>

  </body>
</html>
