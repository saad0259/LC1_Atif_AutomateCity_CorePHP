<?php
    define('page_title',"Manage");

 	include('includes/header.php');

?>


<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">


        <?php include('../includes/show-errors.php'); ?>


		<h2>Responsive Table with DataTables</h2>

            <div class="container">
                <div class="row">
                    <div class="col-10 m-0 mx-auto p-0" style="overflow-x: auto !important;">


                        <button type="button" name="add" id="addItem" class="btn btn-success btn-md mx-auto" >Add Item</button>
            


                        <table id="itemList" class="table table-striped table-bordered " >
                            <thead >
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
                        <h4 class="modal-title"><i class="fa fa-plus"></i> </h4>
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
<script >
// $('table').DataTable();

// See:
// http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions
</script>


      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
      <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap.min.js"></script>

      <!-- popper js -->
      <script src="/admin/js/popper.min.js"></script>
      <!-- bootstarp js -->
      <script src="/admin/js/bootstrap.min.js"></script>
      <!-- sidebar menu  -->
      <script src="js/customAjax.js"></script>	

 

<?php
//  include('admin/includes/footer.php');
?>


<!-- <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
            <th>Extn.</th>
            <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Tiger</td>
            <td>Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
            <td>2011/04/25</td>
            <td>$320,800</td>
            <td>5421</td>
            <td>t.nixon@datatables.net</td>
            </tr>
            <tr>
            <td>Garrett</td>
            <td>Winters</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>63</td>
            <td>2011/07/25</td>
            <td>$170,750</td>
            <td>8422</td>
            <td>g.winters@datatables.net</td>
            </tr>
            <tr>
            <td>Ashton</td>
            <td>Cox</td>
            <td>Junior Technical Author</td>
            <td>San Francisco</td>
            <td>66</td>
            <td>2009/01/12</td>
            <td>$86,000</td>
            <td>1562</td>
            <td>a.cox@datatables.net</td>
            </tr>
            <tr>
            <td>Cedric</td>
            <td>Kelly</td>
            <td>Senior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2012/03/29</td>
            <td>$433,060</td>
            <td>6224</td>
            <td>c.kelly@datatables.net</td>
            </tr>
            <tr>
            <td>Airi</td>
            <td>Satou</td>
            <td>Accountant</td>
            <td>Tokyo</td>
            <td>33</td>
            <td>2008/11/28</td>
            <td>$162,700</td>
            <td>5407</td>
            <td>a.satou@datatables.net</td>
            </tr>
            <tr>
            <td>Brielle</td>
            <td>Williamson</td>
            <td>Integration Specialist</td>
            <td>New York</td>
            <td>61</td>
            <td>2012/12/02</td>
            <td>$372,000</td>
            <td>4804</td>
            <td>b.williamson@datatables.net</td>
            </tr>
            <tr>
            <td>Herrod</td>
            <td>Chandler</td>
            <td>Sales Assistant</td>
            <td>San Francisco</td>
            <td>59</td>
            <td>2012/08/06</td>
            <td>$137,500</td>
            <td>9608</td>
            <td>h.chandler@datatables.net</td>
            </tr>
            <tr>
            <td>Rhona</td>
            <td>Davidson</td>
            <td>Integration Specialist</td>
            <td>Tokyo</td>
            <td>55</td>
            <td>2010/10/14</td>
            <td>$327,900</td>
            <td>6200</td>
            <td>r.davidson@datatables.net</td>
            </tr>
            <tr>
            <td>Colleen</td>
            <td>Hurst</td>
            <td>Javascript Developer</td>
            <td>San Francisco</td>
            <td>39</td>
            <td>2009/09/15</td>
            <td>$205,500</td>
            <td>2360</td>
            <td>c.hurst@datatables.net</td>
            </tr>
            <tr>
            <td>Sonya</td>
            <td>Frost</td>
            <td>Software Engineer</td>
            <td>Edinburgh</td>
            <td>23</td>
            <td>2008/12/13</td>
            <td>$103,600</td>
            <td>1667</td>
            <td>s.frost@datatables.net</td>
            </tr>
            <tr>
            <td>Jena</td>
            <td>Gaines</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>30</td>
            <td>2008/12/19</td>
            <td>$90,560</td>
            <td>3814</td>
            <td>j.gaines@datatables.net</td>
            </tr>
            <tr>
            <td>Quinn</td>
            <td>Flynn</td>
            <td>Support Lead</td>
            <td>Edinburgh</td>
            <td>22</td>
            <td>2013/03/03</td>
            <td>$342,000</td>
            <td>9497</td>
            <td>q.flynn@datatables.net</td>
            </tr>
            <tr>
            <td>Charde</td>
            <td>Marshall</td>
            <td>Regional Director</td>
            <td>San Francisco</td>
            <td>36</td>
            <td>2008/10/16</td>
            <td>$470,600</td>
            <td>6741</td>
            <td>c.marshall@datatables.net</td>
            </tr>
            <tr>
            <td>Haley</td>
            <td>Kennedy</td>
            <td>Senior Marketing Designer</td>
            <td>London</td>
            <td>43</td>
            <td>2012/12/18</td>
            <td>$313,500</td>
            <td>3597</td>
            <td>h.kennedy@datatables.net</td>
            </tr>
            <tr>
            <td>Tatyana</td>
            <td>Fitzpatrick</td>
            <td>Regional Director</td>
            <td>London</td>
            <td>19</td>
            <td>2010/03/17</td>
            <td>$385,750</td>
            <td>1965</td>
            <td>t.fitzpatrick@datatables.net</td>
            </tr>
            <tr>
            <td>Michael</td>
            <td>Silva</td>
            <td>Marketing Designer</td>
            <td>London</td>
            <td>66</td>
            <td>2012/11/27</td>
            <td>$198,500</td>
            <td>1581</td>
            <td>m.silva@datatables.net</td>
            </tr>
            <tr>
            <td>Paul</td>
            <td>Byrd</td>
            <td>Chief Financial Officer (CFO)</td>
            <td>New York</td>
            <td>64</td>
            <td>2010/06/09</td>
            <td>$725,000</td>
            <td>3059</td>
            <td>p.byrd@datatables.net</td>
            </tr>
            <tr>
            <td>Gloria</td>
            <td>Little</td>
            <td>Systems Administrator</td>
            <td>New York</td>
            <td>59</td>
            <td>2009/04/10</td>
            <td>$237,500</td>
            <td>1721</td>
            <td>g.little@datatables.net</td>
            </tr>
            <tr>
            <td>Bradley</td>
            <td>Greer</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>41</td>
            <td>2012/10/13</td>
            <td>$132,000</td>
            <td>2558</td>
            <td>b.greer@datatables.net</td>
            </tr>
            <tr>
            <td>Dai</td>
            <td>Rios</td>
            <td>Personnel Lead</td>
            <td>Edinburgh</td>
            <td>35</td>
            <td>2012/09/26</td>
            <td>$217,500</td>
            <td>2290</td>
            <td>d.rios@datatables.net</td>
            </tr>
            <tr>
            <td>Jenette</td>
            <td>Caldwell</td>
            <td>Development Lead</td>
            <td>New York</td>
            <td>30</td>
            <td>2011/09/03</td>
            <td>$345,000</td>
            <td>1937</td>
            <td>j.caldwell@datatables.net</td>
            </tr>
            <tr>
            <td>Donna</td>
            <td>Snider</td>
            <td>Customer Support</td>
            <td>New York</td>
            <td>27</td>
            <td>2011/01/25</td>
            <td>$112,000</td>
            <td>4226</td>
            <td>d.snider@datatables.net</td>
            </tr>
        </tbody>
</table>
 -->
