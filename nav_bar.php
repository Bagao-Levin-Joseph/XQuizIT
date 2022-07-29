<style>

	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Bungee+Shade&display=swap');

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

	nav a{
	  text-decoration: none;
	  color: black;
	  font-family: 'Lato', sans-serif;
	  justify-content: center;
	  align-items: center;
	  padding-inline: 20px;
	  font-weight: 900;
	}

	svg{
	  position: absolute;
	  display: inline;
	  width: 100%;
	  margin-top:400px;
	  transform: rotate(180deg);
	}


	.exampleClass {
	  display: inline-block;
	  position: relative;
	  color: rgb(0, 0, 0);
	}

	.exampleClass::after {
	  content: '';
	  position: absolute;
	  width: 100%;
	  transform: scaleX(0);
	  height: 2px;
	  bottom: 0;
	  left: 0;
	  background-color: rgb(0, 0, 0);
	  transform-origin: bottom right;
	  transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
	}

	.exampleClass:hover::after {
	  transform: scaleX(1);
	  transform-origin: bottom left;
	}

	#section_1{
	  height: 100vh;
	  width: 100%;
	  background: white;
	}
	#section_2{
	  margin-top: auto;
	  width: 100%;
	  background: white;
	}

.d-inline-block{
	height: 30px;
	width: auto;
}

</style>


<nav class="navbar navbar-default fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="home.php">
	<img alt="Brand" src="xquiz.png"  width="30" height="24" class="d-inline-block align-text-top">
</a>

<?php if($_SESSION['login_user_type'] != 3): ?>
<?php if($_SESSION['login_user_type'] == 1): ?>

		<a class="exampleClass" href="faculty.php"> Faculty List</a>
<?php endif; ?>

		<a class="exampleClass" href="student.php">List of Students</a>
		<a class="exampleClass" href="history.php">History</a>

<?php else: ?>
		<a class="exampleClass" href="history.php">History</a>
<?php endif; ?>
</div>
<div class="flex-box">
<?php  if($_SESSION['login_user_type'] < 3):?>
<a href="quiz.php"><button type="button" class="btn btn-primary">Create Quiz</button></a>
<?php else: ?>
	<a href="student_quiz_list.php"><button type="button" class="btn btn-primary bt-sm" id="new_quiz">Join Quiz</button></a>
<?php endif; ?>
<a href="logout.php"><button type="button" class="btn btn-danger">Logout</button></a>

</div>
</div>
</nav>
<br><br><br><br>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})

		</script>
