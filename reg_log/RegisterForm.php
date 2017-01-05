   


    <div class="row container" >
      <div class="col s1 m3 l4"></div>
      <div class="col s10 m6 l4 container" >
	      <div class="valign-wrapper" >
			  <div class="card-panel hoverable " style="width: 100%;"  >   
			  		<form action="php_files/register.php" method="POST">
					        <div class="input-field">
					          	<i class="material-icons prefix">account_circle</i>
					          	<input id="icon_prefix" type="text" name = "user_Name" class="validate">
					          	<label for="icon_prefix">User Name</label>
					        </div>
					        <div class="input-field">
					          	<i class="material-icons prefix">vpn_key</i>
					          	<input id="icon_telephone" type="password" name = "pass" class="validate">
					         	 <label for="icon_telephone">Password</label>
					        </div>
					        <div class="input-field">
					          	<i class="material-icons prefix">assignment_ind</i>
					          	<input id="icon_telephone" type="url" name = "url" class="validate">
					         	 <label for="icon_telephone">Image URL</label>
					        </div>
					        <div class="input-field col s12">
					          	<input id="email" type="email" name="Email" class="validate">
					         	 <label for="email" data-error="wrong" data-success="right">Email</label>
					        </div>

					        <div class="switch">
							    <label>
							      male
							      <input type="checkbox" name="sex">
							      <span class="lever"></span>
							      female
							    </label>
							</div>

							 <input type="date" class="datepicker" name = 'BD'>

					        <button class="btn waves-effect waves-light red " style = "width: 100%;" type="submit" name="action">Submit
			 			    	<i class="material-icons right">offline_pin</i>
			 			  	</button>
					</form>
				</div>
			</div>
		</div>
      	<div class="col s1 m3 l4"></div>
    </div>
