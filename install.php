<?php
require_once('dbconnection.php');
if(isset($_POST['install'])){
  $user = $_POST['user'];
  $host = $_POST['host'];
  $password = $_POST['password'];
  $table = $_POST['table'];
  $sql = "CREATE TABLE users (
    id int(11) NOT NULL,
    fname varchar(255) DEFAULT NULL,
    lname varchar(255) DEFAULT NULL,
    email varchar(255) DEFAULT NULL,
    password varchar(300) DEFAULT NULL,
    contactno varchar(11) DEFAULT NULL,
    posting_date timestamp NOT NULL DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

  $sql .= "INSERT INTO users (id, fname, lname, email, password, contactno, posting_date) VALUES
  (13, 'Khushi', 'Rauniyar', 'khushi@gmail.com', 'b24331b1a138cde62aa1f679164fc62f', 'abc@123', '2020-10-03 12:51:03');";
  
  $sql .= "ALTER TABLE users 
  ADD PRIMARY KEY (id);";
  
  $sql .= "ALTER TABLE users
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;";
  
  $msg = mysqli_multi_query($con, $sql);
  if($msg){
    echo "<script>alert('Installed successfully');</script>";
  }else{
    echo "<script>alert('Install failed');</script>";
  }
}
?>
<html>
  <head>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Install</title>
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container login-container">
      <div class="row">
        <div class="col-md-12 ">
          <h3>Install</h3>
          <form name="install" action="" class="row" method="post">
            <div class="col col-md-6 form-group">
              <label for="" class="text-white">MySQL User</label>
              <input
                type="text"
                class="form-control"
                name="user"
                value=""
                placeholder="root"
              />
            </div>
            <div class="col col-md-6 form-group">
              <label for="" class="text-white">MySQL User Password</label>
              <input
                type="password"
                class="form-control"
                value=""
                name="password"
                placeholder=""
              />
            </div>
            <div class="col col-md-6 form-group">
              <label for="" class="text-white">Host MySQL</label>
              <input
                type="text"
                class="form-control"
                value=""
                name="host"
                placeholder="127.0.0.1"
              />
            </div>
            <div class="col col-md-6 form-group">
              <label for="" class="text-white">MySQL Table</label>
              <input
                type="text"
                class="form-control"
                value="loginmanager"
                name="table"
                placeholder="MySQL Host ej: 127.0.0.1"
                readonly
              />
            </div>
            <div class="form-group col col-md-12 mt-3">
                <input
                  type="submit"
                  name="install"
                  class="btn btnSubmit btn-success btn-block"
                  value="INSTALAR"
                />
            </div>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
