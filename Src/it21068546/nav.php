<!DOCTYPE html>
<html>
<head>
  <!--Layout -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script type="text/javascript" src="js/nac.js"></script>  
  <!--Css link CSS/main.css -->


<!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"-->  


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<title>Request Book</title>
</head>
<HEADER><div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="gest"><i class="fa fa-user-circle fa-2x" aria-hidden="true">Gest User</i></a>
  <i class="fas fa-tachometer-alt"></i><a href="/">Dashboard</a>
  <a href="#">Request Book</a><i class="fas fa-redo"></i>
  <a href="#">About Us</a><i class="fas fa-info-circle"></i>
  <a href="#">Contact</a><i class="fas fa-info-circle"></i>
</div>

<div class="topnav">
      <img src="https://th.bing.com/th/id/R.36dd618e18bb5ebe5cb174e97d9c4812?rik=Upd0klNFHi%2fCGw&riu=http%3a%2f%2fwww.antioquiatic.edu.co%2fimages%2flogo-biblioteca.png&ehk=7EicayNy8FNz9p9owaZTAi2BRCphdaTviysnInw2bv4%3d&risl=&pid=ImgRaw&r=0" class="logo" width="10%" > 
  </div>


<div class="topnav1">
     <a class="active"  onclick="openNav()" ><img  width="30%"  src="https://www.bing.com/th?id=OIP.IF5ND7jxe56z_8cL13XDVQHaHa&w=96&h=96&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2"></a>
    
  </div>





<body>





<div id="main">
<style>

.container {
                 border-radius: 1.5rem;
                 background-color: #f2f2f2;
                
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;

                  }
h3 {
  text-shadow: 2px 2px 5px red;
}

input[type=text], select {
 
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>


  <!--calculator Form -->
  <div class="container">

  <!-- header -->
<div class="jumbotron">
    <h1>Request Book</h1>
</div>
  <!--Calculator   Form -->
   <div >
   <!--Content-->
    <div class="modal-content">

      <!--Body-->
     <div class="modal-body mb-5 p-5">

    <!--Form  -->
    <form method="post" action=" form.php" >

      <!--number input field   -->
      <div class="form-groups">
      
      <input id="txtName" class="form-controls"  name="txtName" placeholder="Book Name" type="text" value="0"></input><br>
      </div>
      <!--number input field   -->
             <!--div class="form-groups"-->
      <div class="form-groups">
      <input id="txtAge" class="form-controls" name="txtAge" placeholder="Auther" type="Text" value="0"></input><br>
             </div>

            <!--drop-Down  field  -->
      <div class="form-groups">
      <select id="txt" class="form-controls" placeholder="Category" name="op">
        <option>Education</option>
        <option>Novel</option>
        <option>Other</option>
      
      </select><br>
    </div>
      <div class="form-groups">
        <select id="txt" class="form-controls" placeholder="Language" name="op">
        <option>English</option>
        <option>Sinhala</option>
        <option>Tamil</option>
      
      </select><br>
       </div>

      <!--Submit  -->
      <div class="form-groups">
      <input id="btnS" class=" btn btn-primary"  class="btn-lg" name="btnS" type="Submit" ></input>
      </div>

        </form>
    <!-- End Form  -->
  </div>
  </div>
  </div>
  <!--End Form calculator   -->





<!--PHP -->
<?php 
//check index

 ?> 
<!--End PHP-->

</div>
</body>
<footer>
  <div class="topnav1">
    <CENTER><p style="color: white;">Copyright 2021 © SLIIT. All Rights Reserved. Concept designed and developed by SLIIT Student </p></CENTER>
    
  </div>
</footer>
</html>

