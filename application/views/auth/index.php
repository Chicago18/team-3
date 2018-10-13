
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
  <select id="language">
		<option value="arabic">Arabic</option>
		<option value="bengali">Bengali</option>
		<option value="bulgarian">Bulgarian</option>
		<option value="catalan">Catalan</option>
		<option value="croatian">Croatian</option>
		<option value="czech">Czech</option>
		<option value="danish">Danish</option>
		<option value="dutch">Dutch</option>
		<option value="english">English</option>
		<option value="estonian">Estonian</option>
		<option value="filipino">Filipino</option>
		<option value="finnish">Finnish</option>
		<option value="french">French</option>
		<option value="german">German</option>
		<option value="greek">Greek</option>
		<option value="hungarian">Hungarian</option>
		<option value="indonesian">Indonesian</option>
		<option value="italian">Italian</option>
		<option value="japanese">Japanese</option>
		<option value="korean">Korean</option>
		<option value="lithuanian">Lithuanian</option>
		<option value="norwegian">Norwegian</option>
		<option value="persian">Persian</option>
		<option value="pirate">Pirate</option>
		<option value="polish">Polish</option>
		<option value="portuguese">Portuguese</option>
		<option value="romanian">Romanian</option>
		<option value="russian">Russian</option>
		<option value="slovak">Slovak</option>
		<option value="spanish">Spanish</option>
		<option value="swedish">Swedish</option>
		<option value="thai">Thai</option>
		<option value="turkish">Turkish</option>
		<option value="ukrainian">Ukrainian</option>
		<option value="vietnamese">Vietnamese</option>
		<option value="zh_cn">Zh Chinese</option>
		<option value="zh_tw">Zh tw</option>
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
<script type="text/javascript">
// Ajax post
$(document).ready(function() {
	$("#language").change(function() {
		const language = $("#language").val();
		jQuery.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>" + "auth/select_language",
			data: {
				lang: language
			},
			success: function(res) {
				if (res){
					console.log(res);
				}
			},
		});
});
});
</script>
