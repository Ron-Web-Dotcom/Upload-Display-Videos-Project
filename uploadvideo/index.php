
<!doctype html>
<html>
    <head>
    <?php include("insert.php");?>
</head>
<style>
 body,html{
    height: 100%;
    width: 100%;
   
    background-image: url("photographer.png") ; 

    background-size: cover;
    
   
    }

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
 
</style>
<body>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- no additional media querie or css is required -->
<body>
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
<!--<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-5" style="background-color:red;">
                <div class="card">
                    <div class="card-body">-->
                    
                        <form action="" autocomplete="off" method="post" enctype='multipart/form-data'>
                        
                          <div class="form-group">
                            <input type='file' name='file' />
            <input type='submit' value='Upload' name='but_upload'class="btn btn-primary">
                       
                        </form>
                        </div>
                        
<br>            
<br>            
<br>            
<div class="container-fluid">

            <table width="4px" class="table table-striped table-bordered" id="cusTable">
                <thead style="background-color: #ffff;">
                    <tr>
                        <th>VideoId</th>
                        <th>VideoName</th>
                        <th>ViewVideo</th>

                    </tr>
                </thead>
                <tbody>
				<?php
                    $materialquery=mysqli_query($con,"select * from videos");
                    while($materialqueryrow=mysqli_fetch_array($materialquery)){
                       $uploadidno=$materialqueryrow['id'];
                    ?>
						<tr>
							<td><?php echo $materialqueryrow['id']; ?></td>
							<td><?php echo $materialqueryrow['name']; ?></td>
							
							
	 
							<td>
            
                            <video src='<?php echo $materialqueryrow['location']; ?>' controls width='320px' height='200px' ></td>

                            </td>  
                         
						</tr>
					<?php
					}
				?>

                </tbody>
            </table>
                   
            </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    </body>
  
    </html>