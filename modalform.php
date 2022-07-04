<?php
include("config.php");

if(isset($_POST['viewid'])){
	$sql=mysqli_query($conn,"SELECT * FROM service where id='".$_POST['viewid']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="modalform.php">
            <div class="modal-body body1">
                <div class="row">   
                <div class="col-4">
                <b> Name :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['name'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Mobile No :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['mobile_no'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Email :</b><br>
                </div>
                <div class="col-8">
                <p>'.$arr['email'].'</p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Service :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['services'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Description :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['description'].' </p>
                </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div></form>';
}

?>