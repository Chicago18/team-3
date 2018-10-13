
<body>
		<div class="jumbotron">
			<div width="100%">
				<img src="http://codeforgood.net/wp-content/uploads/2018/10/cmaa.jpg" width="220" height="220" align: "center">
  			<center>
					<font color="red">
						<font size = "3">
							<h1 class="display-4"> Welcome to Chinese Mutual Aid Association </h1>
						</font>
					</center>
  			<p>
					<font size = "3">
						<font color = "blue">
							Mission:
							Chinese Mutual Aid Association (CMAA) aims to serve the needs, promote the interests, and enhance the well-being of immigrants and refugees in the Chicagoland area, and to foster their participation in and integration into American society.
  					</font>
  			</p>
		<div>
  <h1> <font color: "black"> Please pick a language: </font> </h1>
  <select>
    <option value="English">English</option>
    <option value="Chinese">Chinese</option>
    <option value="Spanish">Spanish</option>
    <option value="Vietnamese">Vietnamese</option>

  </select>

  <table style="margin-top:1.5%">
  <tr>
      <td><a class="btn btn-primary btn-lg" href="<?php echo base_url()?>auth/login" role="button"> <font size = "3"> Login</a>
      <td><a class="btn btn-primary btn-lg" href="<?php echo base_url()?>auth/registration_student" role="button"> <font size = "3"> Register Student</a>
			<td><a class="btn btn-primary btn-lg" href="<?php echo base_url()?>auth/registration_parent" role="button"> <font size = "3"> Register Parent</a>
    </tr>
  </table>

</head>
</html>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>
