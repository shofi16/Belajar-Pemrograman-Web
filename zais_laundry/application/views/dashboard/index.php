<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4><span class="glyphicon glyphicon-dashboard"></span> <b>Dashboard Administrator</b></h4>
				</div>
				<div class="panel-body">
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-user"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> get_data('pelanggan') -> num_rows(); ?></b></font>
										<div><b>Jumlah Pelanggan</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-retweet"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> edit_data(['status' => 'proses'],'laundry') -> num_rows();  ?></b></font>
										<div><b>Jumlah Cucian Diproses</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="panel panel-warning">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-sort"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b><?php echo $this -> model_laundry -> edit_data(['status'=>'ready'],'laundry')->num_rows(); ?></b></font>
										<div><b>Jumlah Cucian Siap Ambil</b></div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="glyphicon glyphicon-ok"></i>
									</div>
									<div class="col-xs-9 text-right">
										<font size="18"><b>0</b></font>
										<div><b>Jumlah Cucian Selesai</b></div>
									</div>
								</div>
							</div>
						
						</div>
					</div>

				</div>
			</div>
		</div>

		
			</div>
		</div>



	</div>
</div>

