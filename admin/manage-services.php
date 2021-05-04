<?php
    define('page_title',"Manage");
    include('../includes/functions.php');

 	include('includes/header.php');


?>


<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">


        <div class="container-fluid" id="div-errors">

            <?php
                 include('../includes/show-errors.php');

            ?>
        </div>



		<h2>Manage Your Services</h2>

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 m-0 p-0 " style="overflow-x: auto !important;">


            
						<div class="clearfix mb-4">
						<button type="button" name="add" id="addItem" class="btn btn-success btn-md float-right" >Add Item</button>

						</div>

                        <table id="itemList" class="table table-striped table-bordered" >
                            <thead  >
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>					
                                    <th>Date</th>
                                    <th>Purchases</th>
                                    <th>Price</th>
                                    <th>Currency</th>
                                    <th>Status</th>						
                                    <th></th>
                                    <th></th>					
                                </tr>
                            </thead>
                            
                        </table>
                
                    </div>
                </div>
                
            </div>

       
	</div>
    
</div>
    <div id="itemModal" class="modal fade" >
        <div class="modal-dialog">
            <form method="post" id="itemForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group" style="overflow-x: auto !important;overflow-y: auto !important;">
                            <label class="btn btn-primary position-absolute mt-2 ml-2" style="position:absolute !important">
                                Change Cover Image <input type="file" id="image" name='image' hidden>
                            </label>
                            <img id="visible_image" src="#">		
                        </div>

                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" required class="form-control" id="title" name="title" placeholder="Title" required>			
                        </div>

                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>							
                            <textarea class="form-control" required rows="5" id="description" name="description"></textarea>							
                        </div>

                        <div class="form-group">
                            <label for="date" class="control-label">date</label>							
                            <input type="date" required class="form-control" id="date" name="date" >							
                        </div>

                        <div class="form-group">
                            <label for="icon" class="control-label">Icon</label>							
                            <input type="text" value="fa-line-chart" placeholder="Font Awesome icon e.g. fa-user" class="form-control" id="icon" name="icon" >							
                        </div>

                     

                        <div class="form-group">
                            <label for="currency" class="control-label">Curency</label>	
                            <select class="form-control fh5co_contact_text_box" id="currency" name="currency">
                            <option value="USD" checked>USD</option>
                            <option value="PKR">PKR</option>
                            </select>			
                        </div>	 
                        
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>							
                            <input type="number" min="0" required class="form-control" id="price" name="price" placeholder="Price">			
                        </div>

                        <div class="form-group">
                            <label for="status" class="control-label">Status</label>	
                            <select class="form-control fh5co_contact_text_box" id="status" name="status">
                            <option value="live" checked>Live</option>
                            <option value="hidden">Hidden</option>
                            </select>			
                        </div>	

                        <div class="form-group">
                            <label for="offered_by" class="control-label">Offered By</label>							
                            <input type="text" class="form-control" value="Automate City" id="offered_by" name="offered_by" placeholder="Offered By">			
                        </div>
                        	

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="action" id="action" value="" />
                        <input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script src="/admin/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
<script src="js/customAjax.js"></script>


 

<?php
include('includes/footer.php');
?>

<script>


    var dp = 'uploads/images/455x515.png';

    $('#visible_image').attr('src', dp);

    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
            $('#visible_image').attr('src', e.target.result);
            
            }

            reader.readAsDataURL(input.files[0]);
        }
        }

        $("#image").change(function() {
        readURL(this);
        });
        
    
</script>

