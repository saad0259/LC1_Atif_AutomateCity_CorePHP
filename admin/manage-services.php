<?php
    define('page_title',"Manage");

 	include('includes/header.php');

?>


<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">


        <?php include('../includes/show-errors.php'); ?>


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
                                    <th>description</th>					
                                    <th>date</th>
                                    <th>purchases</th>
                                    <th>price</th>					
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
    <div id="itemModal" class="modal fade" style="z-index:99999999">
        <div class="modal-dialog">
            <form method="post" id="itemForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-plus"></i></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="title" class="control-label">Title</label>
                            <input type="text" autofocus class="form-control" id="title" name="title" placeholder="Title" required>			
                        </div>

                        <div class="form-group">
                            <label for="description" class="control-label">Description</label>							
                            <textarea class="form-control" rows="5" id="description" name="description"></textarea>							
                        </div>

                        <div class="form-group">
                            <label for="date" class="control-label">date</label>							
                            <input type="date" class="form-control" id="date" name="date" >							
                        </div>	   	
                        <div class="form-group">
                            <label for="purchases" class="control-label">Purchases</label>							
                            <input type="number" class="form-control"  id="purchases" name="purchases" placeholder="Purchases" required>							
                        </div>	 
                        
                        <div class="form-group">
                            <label for="price" class="control-label">Price</label>							
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price">			
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

