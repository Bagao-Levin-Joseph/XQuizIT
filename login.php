
<!DOCTYPE html>
<html>
	<head>
		<?php include('header.php') ?>
        <?php
        session_start();
        if(isset($_SESSION['login_id'])){
            header('Location:home.php');
        }
        ?>

		<title>Login | XQuizIT</title>


		<style media="screen">

		@import url('https://fonts.googleapis.com/css?family=Muli&display=swap');
		@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,500&display=swap');


		body {
		  background: #f2f2f2;
		}

		nav{
		  position: fixed;
		  padding: 0;
		  margin: 0;
		  box-sizing: border-box;
		  border-bottom: 2px solid #f2f2f2;
		  background: #ffffff;
		}
		nav .navbar-header{
		  padding: 5px;
		  padding-left: 5rem;
		}
		nav .navbar-brand img{
		    height: 40px;
		    width: auto;
		}

		.container {
		  margin: 0;
		  padding-top: 180px;
		  padding-left: 38%;
		}

		.section_content {
		  padding: 25px;
		  width: 80%;
		  background: #ffffff;
		  text-align: center;
		  border-radius: 10px;
		}

		.content-body {
		  margin-top: 20px;
		}

		.box {
		  padding-top: 10px;
		}

		.button_section {
		  padding-top: 10px;
		}

		.button_section_2 {
		  padding-top: 30px;
		}

		h4{
		  font-weight: bold;
		}

		input[type=text] {
		  width: 80%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  margin-top: 20px;
		  box-sizing: border-box;
		  border: 0 solid #ccc;
		  border-radius: 5px;
		  background: #f2f2f2;
		  -webkit-transition: 0.5s;
		  transition: 0.5s;
		  outline: none;
		}

		input[type=password] {
		  width: 80%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  box-sizing: border-box;
		  border: 0 solid #ccc;
		  border-radius: 5px;
		  background: #f2f2f2;
		  -webkit-transition: 0.5s;
		  transition: 0.5s;
		  outline: none;
		}

		.button {
		  background-color: #008CBA;
		  border: none;
		  border-radius: 5px;
		  color: white;
		  padding: 10px;
		  width: 80%;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  cursor: pointer;
		}

		.button_2 {
		  border: none;
		  border-radius: 5px;
		  color: black;
		  font-weight: 500;
		  padding: 10px;
		  width: 80%;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  cursor: pointer;
		}

		.line {
		  border: 1px solid #091c77;
		  margin-left: 38px;
		  margin-top: 50px;
		  width: 110px;
		}

		.line_2 {
		  border: 1px solid #091c77;
		  margin-top: -19px;
		  margin-left: 210px;
		  width: 110px;
		}
		h5 {
		  margin-top: -15px;
			font-weight: bold;
		}

		img {
		height: 25px;
		padding-right: 20px;
		}

		.alert{
		  background: crimson;
		  color: #ffffff;
		  padding: 10px;
		  width: 80%;
		  border-radius: 5px;
		  margin: 20px auto;
		}

		</style>

	</head>

	<body>

		<nav class="navbar navbar-default fixed-top">
			<div class="container-fluid">
					<div class="navbar-header">
							<a class="navbar-brand" href="index.php">
									<img alt="Brand" src="xquiz.png"  width="30" height="24" class="d-inline-block align-text-top">
							</a>

					</div>
			</div>
	</nav>
			<div class="container">
					<div class="section_content">
              <form id="login-frm">
								<div class="title">
                	<h4>Login to XQuizIT</h4>
              	</div>

								<div class="box">
									<input type="text" name="username" placeholder="Email Address" required>
									<input type="password" name="password" placeholder="Password" required>
								</div>
								<div class="button_section">
                	<button class="button" name="submit">Login</button>
              	</div>
								<div class="line"></div>
								   <h5>OR</h5>
								<div class="line_2"></div>

								<div class="button_section_2">
								  <button class="button_2"><img src="icon.png" alt="">Continue with Google</button>
								</div>

								<div class="content-body">
								</div>
              </form>
            </div>
        </div>

		</body>

        <script>
            $(document).ready(function(){
                $('#login-frm').submit(function(e){
                    e.preventDefault()

                    $.ajax({
                        url:'./login_auth.php',
                        method:'POST',
                        data:$(this).serialize(),
                        error:err=>{
                            console.log(err)
                            alert('An error occured');
                            $('#login-frm button').removeAttr('disable')
                            $('#login-frm button').html('Login')
                        },
                        success:function(resp){
                            if(resp == 1){
                                location.replace('dashboard.php')
                            }
														else{
															$('#login-frm').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
															$('#login-frm button[type="button"]').removeAttr('disabled').html('Login');
														}
                        }
                    })

                })
            })
        </script>
</html>
