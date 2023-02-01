<?php
include_once "./hamid_function/function.php";

$id = $_GET['edit-user'];
$select = "SELECT * FROM students WHERE st_id='$id'";
$Qr = mysqli_query($connect, $select);
$data = mysqli_fetch_array($Qr); //get data using fetch array


if (!empty($_POST)) {
  $name = $_POST['hamid_name'];
  $email = $_POST['hamid_email'];
  $number = $_POST['hamid_number'];
  $username = $_POST['hamid_username'];


  $update = "UPDATE students SET st_name='$name', st_email='$email', st_number='$number' WHERE st_id='$id'";
  if(mysqli_query($connect, $update)){
    header("location:all-user.php");
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
                                Update Information
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
                              <input type="text" name="hamid_name" class="form-control" value="<?php echo $data['st_name'];?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" name="hamid_email" class="form-control" value="<?php echo $data['st_email'];?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-8">
                              <input type="text" name="hamid_number" class="form-control" value="<?php echo $data['st_number'];?>">
                            </div>
                          </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">UserName</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $data['st_username'];?>" disabled>
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">UPDATE</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->

<?php
get_footer();
?>