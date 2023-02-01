<?php
include_once "./hamid_function/function.php";
get_header();
get_sidebar();
?>
                <div class="col-md-12">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                All Information View
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="add-user.php" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i> Add User</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <table class="table table-responsive table-striped table-hover table_cus">
                          		<thead class="table_head">
                            		<tr>
                                    	
                                    	<th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Username</th>
                                        <th class="hidden-xs">Address</th>
                                        <th>Manage</th>
                                    </tr>
                            	</thead>
                                <tbody>
                                  <?php
                                  $sel = "SELECT * FROM `students` ORDER BY st_id DESC";
                                  $Que = mysqli_query($connect, $sel);

                                  while($data=mysqli_fetch_array($Que)){

                                

                                  ?>
                                	<tr>
                                    	  
                                    	  <td><?php echo $data['st_name']; ?></td>
                                        <td><?php echo $data['st_email']; ?></td>
                                        <td><?php echo $data['st_number']; ?></td>
                                        <td><?php echo $data['st_username']; ?></td>
                                        <td class="hidden-xs"></td>
                                        <td>
          <a href="view-user.php?v=<?php echo $data['st_id'];?>"><i class="fa fa-plus-square fa-lg"></i></a>
          <a href="edit-user.php ?edit-user=<?php echo $data['st_id'];?>"><i class="fa fa-pencil-square fa-lg"></i></a>
          <a href="delete.php ? d=<?php echo $data['st_id']?>"><i class="fa fa-trash fa-lg"></i></a>
                                        </td>
                                    </tr>
                                    
                                    <?php
                                       }
                                    ?>
                                </tbody>
                          </table>
                      </div>
                      <div class="panel-footer">
                        <div class="col-md-4">
                        	<a href="#" class="btn btn-sm btn-warning">EXCEL</a>
                            <a href="#" class="btn btn-sm btn-primary">PDF</a>
                            <a href="#" class="btn btn-sm btn-danger">SVG</a>
                            <a href="#" class="btn btn-sm btn-success">PRINT</a>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 text-right">
                        	<nav aria-label="Page navigation">
                              <ul class="pagination pagina_cus">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                </div><!--col-md-12 end-->
<?php
get_footer();
?>