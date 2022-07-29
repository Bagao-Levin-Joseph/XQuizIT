<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XQuizIT</title>
    <?php include('header.php') ?>


<style media="screen">


/* @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap'); */
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
.flex svg{
  top: 3rem;

}
.flex-box{
  display:flex;
  justify-content:space-between;
  gap: 5px;
  padding-right: 50px;
}
.content-title{
  height: 300px;
  width: 500px;;
  margin-left: 50px;
  margin-top: 90px;
  position: relative;
  display: flexbox;
}
.content-title h1{
  padding-top: 50px;
  padding-bottom: 30px;
  font-family: 'Bungee Shade', cursive;
  font-size: 55px;
  color: rgb(9, 28, 119);
}

.line {
  border: 1px solid #091c77;
  width: 500px;
}
.content-body{
  padding-top: 50px;
}
.content-body h3 {
  /* font-size: 20px; */
  margin-left: 130px;
  color: #ea4646;
  font-family: 'Lato', sans-serif;
  font-weight: bold;
}

.content-body p {
  margin-left: 160px;
  text-decoration: none;
  font-size: 13pt;
  font-family: 'Lato', sans-serif;
  font-weight: 900;
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

svg{
  position: absolute;
  display: inline;
  width: 100%;
  margin: 0;
}

.right_image{
  position: absolute;
  margin-top: 150px;
  margin-left: 700px;
  margin-right: auto;
  margin-bottom: auto;
}
.right_image img{
  margin: 0;
  top: 0;
  width: 500px;
  height: 200px;
}
.image2{
  margin-top: 150px;
  margin-left: 700px;
  margin-right: auto;
  margin-bottom: auto;
}
main{
  width: 100vh;
  height: 100vh;
}
section{
  width: 100vh;
  height: 100vh;
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
.section_content{
  margin-top: 100px;
}
.section_content .section2{

  position: relative;
  margin: 100px;
  /* box-sizing: border-box;
  border: 1px solid black; */
  text-align: center;
}
.card-group{
  gap: 50px;
  margin: 100px;
  font-family: 'Lato', sans-serif;
}
.card img{
  width: auto;
  height: 200px;
  padding: 10px;
}

.blob svg{
  margin-top: 0;
  position: absolute;
  display: flex;
  width: auto;
  height: 400px;
  opacity: 80%;
}

/* #section_3{
  height: 30vh;
  width: 100%;
  background: #c9c9c9;
} */
.side_img{
  margin: 0;
  padding: 0;
}
.row{
  padding: 0;
  margin: 0;
}
.row .side_img svg{
  margin-top: 0;
  padding: 0;
  position: absolute;
  display: flex;
  width: auto;
  height: 200px;
  align-content: center;


}


</style>

</head>
<body>

    <nav class="navbar navbar-default fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="xquiz.png"  width="30" height="24" class="d-inline-block align-text-top">
                </a>

                <a href="#section_1" class="exampleClass"> Teacher</a>
                <a href="#section_2" class="exampleClass"> Student</a>
                <!-- <a href="#section_3" class="exampleClass"> School</a> -->
            </div>

            <div class="flex-box">
                <a href="login.php"><button type="button" class="btn btn-primary">Login</button></a>
            </div>
    </nav>

    <div class="flex">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,64L14.1,90.7C28.2,117,56,171,85,181.3C112.9,192,141,160,169,128C197.6,96,226,64,254,74.7C282.4,85,311,139,339,133.3C367.1,128,395,64,424,64C451.8,64,480,128,508,181.3C536.5,235,565,277,593,261.3C621.2,245,649,171,678,117.3C705.9,64,734,32,762,26.7C790.6,21,819,43,847,48C875.3,53,904,43,932,64C960,85,988,139,1016,170.7C1044.7,203,1073,213,1101,202.7C1129.4,192,1158,160,1186,128C1214.1,96,1242,64,1271,80C1298.8,96,1327,160,1355,170.7C1383.5,181,1412,139,1426,117.3L1440,96L1440,0L1425.9,0C1411.8,0,1384,0,1355,0C1327.1,0,1299,0,1271,0C1242.4,0,1214,0,1186,0C1157.6,0,1129,0,1101,0C1072.9,0,1045,0,1016,0C988.2,0,960,0,932,0C903.5,0,875,0,847,0C818.8,0,791,0,762,0C734.1,0,706,0,678,0C649.4,0,621,0,593,0C564.7,0,536,0,508,0C480,0,452,0,424,0C395.3,0,367,0,339,0C310.6,0,282,0,254,0C225.9,0,198,0,169,0C141.2,0,113,0,85,0C56.5,0,28,0,14,0L0,0Z"></path></svg>        </div>
    </div>

    <div class="container">
        <div class="right_image">
            <img src="undraw_online.svg" alt="">
        </div>
    </div>


    <main>
        <div class="container">
            <div class="content-title">
                <h1>An Excitement Platform Just for you</h1>
                <div class="line">

                </div>
            </div>
            <br>
            <div class="content-body">
                <h3>Create &ensp;.&ensp; Fun &ensp;.&ensp; Interact</h3> <br>
                <p>Already Have Account? <a href="login.php" class="link">Sign in</a></p>
            </div>
    </main>


    <div class="section_content">
        <section id="section_1">
                     <div class="blob">
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1260 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,288L34.3,266.7C68.6,245,137,203,206,160C274.3,117,343,75,411,80C480,85,549,139,617,160C685.7,181,754,171,823,186.7C891.4,203,960,245,1029,240C1097.1,235,1166,181,1234,181.3C1302.9,181,1371,235,1406,261.3L1440,288L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
                    </div>
                <div class="container">
                    <br>
                    <div class="section2">
                        <h2>Alternative Web-based Platform to Create Quizes </h2>
                    </div>

                            <div class="card-group">
                                <div class="card ">
                                    <img class="card-img-top" src="teaching.png">
                                    <div class="card-body">
                                    <h5 class="text-muted text-center">Deploying lessons to the student</h5>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="tech02.png">
                                    <div class="card-body">
                                    <h5 class="text-muted text-center">Checking of activities</h5>
                                    </div>
                                </div>
                            </div>
                </div>

        </section>

        <section id="section_2">

                    <div class="blob">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="#8A3FFC" d="M29,-25.5C36.1,-14.2,39.3,-2.3,39.6,14C39.8,30.2,37.1,50.7,25.3,58.7C13.6,66.8,-7.1,62.3,-25.2,53.2C-43.2,44.2,-58.5,30.5,-65.3,11.7C-72.2,-7.1,-70.6,-31.1,-58.3,-43.5C-46,-55.9,-23,-56.8,-6,-52C10.9,-47.2,21.9,-36.7,29,-25.5Z" transform="translate(100 100)" /></svg>
                    </div>

            <div class="container">
                <br>
                    <div class="section2">
                        <h2>Interactive Game Quiz</h2>
                    </div>



                    <div class="card-group">
                        <div class="card ">
                            <img class="card-img-top" src="log1.png">
                            <div class="card-body">
                            <h5 class="text-muted text-center">Test your knowledge and skills</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="home.png">
                            <div class="card-body">
                            <h5 class="text-muted text-center">Can do at your home</h5>
                            </div>
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="ol.png">
                            <div class="card-body">
                            <h5 class="text-muted text-center">Take quiz and exam through online</h5>
                            </div>
                        </div>

                    </div>
            </div>
        </section>
    </div>
</body>
</html>
