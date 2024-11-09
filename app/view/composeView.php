	
<div class="container-fluid ">
  <div>
  <h1 class="display-5 fw-bold" style="float: left;">Contact Book</h1>
  <button class="btn btn-outline-danger btn-sm" onclick="window.location.assign('<?=PROOT?>')" style="margin-right: 5px; float: right;"> < Back</button>
  </div><br/><br/><br/>
 	<div class="row">
	  <div class="col-lg-12 mb-4 order-0">
		  <div class="card">
			  <div class="card-body">
			  	<div class="container-fluid">
			  		<br/>
			  		<h2>Mail</h2>
			  		<hr>
			  		<form>
			  			<div class="mb-3">
					    <label class="form-label" for="basic-icon-default-fullname"></label>
					    <div class="input-group input-group-merge">
					    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i>To:</span>
					    <input
					    type="text"
					    name="mail_to"
					    class="form-control"
					    id="basic-icon-default-fullname"
					    placeholder="..Select Recipient Contact(s)"
					    />
					    </div>

					    <label class="form-label" for="basic-icon-default-fullname"></label>
					    <div class="input-group input-group-merge">
					    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i>Subject:</span>
					    <input
					    type="text"
					    name="mail_subject"
					    class="form-control"
					    id="basic-icon-default-fullname"
					    placeholder="Email Subject"
					    />
					    </div>

					    <p></p>
					    <label class="form-label" for="">Body</label>
					    <textarea class="form-control" placeholder="Type in body of your letter in this message box." style="height: 120px;" name="mail_body"></textarea>

					    <p></p>
					    <label class="form-label" for="basic-icon-default-fullname">Attach Files</label>
					    <div class="input-group input-group-merge">
					    <input
					    type="file"
					    name="attached_file"
					    class="form-control"
					    multiple
					    />
					    </div>

					    </div>

					    
					    <p></p>
					    <button class="btn btn-outline-success">Send</button>
						</div>
			  		</form>
			  		<p></p>
			  	</div>
			  </div>
		  </div>
	  </div>
    </div>
</div>
