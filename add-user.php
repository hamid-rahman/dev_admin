<?php
include_once "hamid_function/function.php";
if (!empty($_POST)) {
  $name = $_POST['hamid_name'];
  $email = $_POST['hamid_email'];
  $number = $_POST['hamid_number'];
  $username = $_POST['hamid_username'];
  $pass = md5($_POST['hamid_pass']);
  $match_pass = md5($_POST['match_hamid_pass']);

 $insert = "INSERT INTO students(st_name,st_email,st_number,st_username,st_pass)
              VALUES('$name','$email','$number', '$username','$pass')";


if($pass==$match_pass){
  if(mysqli_query($connect,$insert)){
      header("location:all-user.php");
  }

}else{
    echo "Password didn't match!";
  
}



}





get_header();
get_sidebar();
?>
                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="post">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Add Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="all-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All User</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" name="hamid_name" class="form-control" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" name="hamid_email" class="form-control" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Number</label>
                            <div class="col-sm-8">
                              <input type="number" value="+880" name="hamid_number" class="form-control" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" name="hamid_username" class="form-control" placeholder="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" name="hamid_pass" class="form-control" placeholder="">
                            </div>
                          </div>
                          <!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
                          <!-- title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" -->

                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Confirm-Password</label>
                            <div class="col-sm-8">
                              <input type="password" name="match_hamid_pass" class="form-control" placeholder="">
                            </div>
                          </div>
                          
<!--                           
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Upload</label>
                            <div class="col-sm-8">
                              <input type="file" name="">
                            </div>
                          </div> -->
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">REGISTRATION</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->

                

<?php
get_footer();
?>