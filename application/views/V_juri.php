<!DOCTYPE html>
<html lang="en">
<head>
<!-- core css -->
<?php $this->load->view('fragment/header');?>

</head>
<body style="background-image: url(http://juri.creatonomics.id/assets/Image/background.jpg); background-attachment: fixed;">

  <style>
	  [type="radio"] + label:before,
	  [type="radio"] + label:after {
		  height: 30px;
		  width: 30px;
	  }
	  .no-padding{
		  padding: 0px !important;
	  }
	  .no-margin{
		  margin: 0px !important;
	  }
	  .borderr{
		  border: 1px solid red;
	  }
  </style>

<div class="container">
	<div class="section">
		<div class="row">
			<h4 class="center-align font yellow-text text-darken-2"><b>FORM PENJURIAN</b></h4>
			<hr class="hr" style="border:solid rgba(0,0,0,0.20) 2px;">
		</div>
		<div class="row">
			<div class="col s8">
				<div class="card z-depth-5">
					<div class="card-content">
						<form action="Juri/tambah_aksi" method="post">
							<div class="row">
								<div class="col s12">
									<h6><b>1. Kematangan ide Bisnis :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a1" value="1" />
									<label for="a1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a2" value="2" />
									<label for="a2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a3" value="3" />
									<label for="a3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a4" value="5" />
									<label for="a4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a5" value="6" />
									<label for="a5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya1" type="radio" id="a6" value="7" />
									<label for="a6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>2. Keunikan ide Bisnis :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b1" value="1" />
									<label for="b1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b2" value="2" />
									<label for="b2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b3" value="3" />
									<label for="b3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b4" value="5" />
									<label for="b4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b5" value="6" />
									<label for="b5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya2" type="radio" id="b6" value="7" />
									<label for="b6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>3. Originalitas ide Bisnis :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c1" value="1" />
									<label for="c1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c2" value="2" />
									<label for="c2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c3" value="3" />
									<label for="c3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c4" value="5" />
									<label for="c4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c5" value="6" />
									<label for="c5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya3" type="radio" id="c6" value="7" />
									<label for="c6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>4. Kejelasan target pasar :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d1" value="1" />
									<label for="d1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d2" value="2" />
									<label for="d2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d3" value="3" />
									<label for="d3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d4" value="5" />
									<label for="d4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d5" value="6" />
									<label for="d5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya4" type="radio" id="d6" value="7" />
									<label for="d6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>5. Keunikan proses produksi barang / jasa :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e1" value="1" />
									<label for="e1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e2" value="2" />
									<label for="e2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e3" value="3" />
									<label for="e3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e4" value="5" />
									<label for="e4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e5" value="6" />
									<label for="e5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya5" type="radio" id="e6" value="7" />
									<label for="e6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>6. Penampilan Presenter :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f1" value="1" />
									<label for="f1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f2" value="2" />
									<label for="f2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f3" value="3" />
									<label for="f3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f4" value="5" />
									<label for="f4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f5" value="6" />
									<label for="f5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya6" type="radio" id="f6" value="7" />
									<label for="f6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>7. Tampilan PPT :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g1" value="1" />
									<label for="g1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g2" value="2" />
									<label for="g2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g3" value="3" />
									<label for="g3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g4" value="5" />
									<label for="g4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g5" value="6" />
									<label for="g5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya7" type="radio" id="g6" value="7" />
									<label for="g6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>8. Kemampuan Berkomunikasi :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h1" value="1" />
									<label for="h1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h2" value="2" />
									<label for="h2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h3" value="3" />
									<label for="h3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h4" value="5" />
									<label for="h4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h5" value="6" />
									<label for="h5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya8" type="radio" id="h6" value="7" />
									<label for="h6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<h6><b>9. Materi Presentasi :</b></h6>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i1" value="1" />
									<label for="i1"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">1</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i2" value="2" />
									<label for="i2"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">2</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i3" value="3" />
									<label for="i3"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">3</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i4" value="5" />
									<label for="i4"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">5</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i5" value="6" />
									<label for="i5"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">6</div>
								</div>
								<div class="col s2">
									<input class="with-gap" name="tanya9" type="radio" id="i6" value="7" />
									<label for="i6"></label>
									<div style="padding-left: 15px; margin-top: 10px; ">7</div>
								</div>
							</div>
							<div class="row">
								<div class="col s12 center-align">
									<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
										<i class="material-icons right">send</i>
									</button>	
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col s4">
				<div class="card z-depth-4">
					<div class="card-content cbcc-color" style="padding-top: 1px; padding-bottom: 3px;">
						<h5 class="font center-align white-text"><b>Information</b></h5>
					</div>
					<div class="card-content">
						<table>
						    
							<tr>
								<td width="35%"><b style="font-size: 16px;">Nama Tim</b></td>
								<td width="10%">:</td>
								<td width="55%"><? echo $this->session->userdata('NAMA_TIM'); ?></td>
							</tr>
							<tr>
								<td><b style="font-size: 16px;">Nama Juri</b></td>
								<td>:</td>
								<td><? echo $this->session->userdata('NAMA_JURI'); ?></td>
							</tr>
							<tr>
								<td><b style="font-size: 16px;">Ruangan</b></td>
								<td>:</td>
								<td><? echo $this->session->userdata('RUANG'); ?></td>
							</tr>
							<tr>
								<td><b style="font-size: 16px;">Sesi</b></td>
								<td>:</td>
								<td><? echo $this->session->userdata('SESI'); ?></td>
							</tr>
						
						</table>
						<center>
						<a class="btn red" href="<?php echo base_url();?>index.php/Login/logout">Logout</a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  







<!-- core script -->
<?php $this->load->view('fragment/script');?>


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
				items:1
			},
			1200:{
				items:1
			}
		}
	})
  </script>

  </body>
</html>
