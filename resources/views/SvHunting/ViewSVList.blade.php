<x-header-new />
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Student Profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Utama</li>
            <!-- <li class="breadcrumb-item active">Starter Page</li> -->
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 
  <style>
  .form-center form {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
</style>
  <!-- Main content -->
  <style type="text/css">
			<style>
            
			  table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  border: 1px solid black;
			  width: 100%;}
			  
			  th {
				border: 1px solid black;
				border-collapse: collapse;
				text-align: center;
				padding: 6px;
				background:#B2B2B2;
				color: black;}

				table.center{
				margin-left :auto;
				margin-right :auto;
				}
				
			</style>
		 </style>
  <center>
			 <h1 style="text-align: center;">SUPERVISOR LIST</h1>
        </br>
        <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}"></form>
        	<input class="form-control mr-sm-2" type="search" placeholder="SearchSupervisor" name="query">
        <button <a href="">Add Supervisor</a></button>
        <button <a href="" target="_blank">Delete Supervisor </a></button>
        		
  </center>
			<center><table>
			<tr class="center">
				<br><br>
				<th>Supervisor ID</th>
				<th>Supervisor Name</th>
				<th>Expertse</th>
							</tr>

		</table></center>
  <!-- /.content -->

</div>
<!-- ./wrapper -->

<x-footer-new />