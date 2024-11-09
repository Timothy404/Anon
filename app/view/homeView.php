
	<h1>
		Anon <small class="sub-text"> - <i>Anonymous Messaging</i></small>
	</h1>
		<hr/>
		<br/>
	<style type="text/css">
		.sub-text{
			font-size: 15px;
		}
		.float_left{
			float: left;
		}
		.float_right{
			float: right;
		}
		.msg_box{
			height: 550px;
			max-height: 600px;
		}
		.no-message-yet{
			margin-top: 25vh;
		}
	</style>
	<div class="container-fluid">
		<h3 class="float_left">
			<?php 
				$name = username(); 
				echo "Hello " . ucfirst($name) . "!";	
			?>
		</h3>
		<a class="float_right btn btn-outline-danger">Logout</a>
	</div>

	<br/>
	<br/>
	<br/>

	<div class="row">
		<div class="col-md-8">
			<div class="card msg_box">
				<div class="card-header">
					<h5 class="float_left">Received Messages</h5>
					<button class="btn btn-outline-primary float_right">Refresh</button>
				</div>
				<div class="card-body">
					<div class="table-responsive">
							<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>S/N</th>
										<th>Message</th>
										<th>Date Sent</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
					<?php
						if ($getMessages != null) {
						foreach ($getMessages as $value) {
					?>
						
									<tr>
										<td><?php echo $value['id'] ?></td>
										<td><?php echo $value['msg'] ?></td>
										<td><?php echo $value['date'] ?></td>
										<td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#msgModal<?php echo $value['id'] ?>">View More</button></td>
									</tr>
								

						<!-- The Modal -->
<div class="modal fade" id="msgModal<?php echo $value['id'] ?>">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">More From this Message</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <h5>Message:</h5>
        <p><?php echo $value['msg'] ?></p>
        <h5>Hint:</h5>
        <p><?php if ($value['gender'] == "Null"){ echo "No Hints"; } else{ echo $value['gender']; } ?></p>

        <hr/>
        <small>Do You Want More Hints? Reach Timothy For the Access To Way More Hints</small>
      </div>

     </div>
  </div>
</div>

					<?php
						}
					}else{
					?>
					<div class="no-message-yet container">
						<center><h3>No Message Yet!</h3></center>
					</div>
					<?php } ?>
					</tbody>
							</table>
						</div>
				</div>
			</div>
			<br/>
			<br/>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5>Share your Link!</h5>
					<br/>
					<p>Send me an Anonymous Message</p>
					<a href="<?=PROOT?>sendmsg/user/@<?php echo username();?>"><?=PROOT?>sendmsg/user/@<?php echo username();?></a>
				</div>
			</div>
		</div>
	</div>

	<br/>
	<br/>

	<footer>
		<center><p>Made By Timothy! &copy; 2024</p></center>
	</footer>
	<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/jquery.js"></script>