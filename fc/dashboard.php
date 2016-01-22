<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    <link href="<?=base_url("asset/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("asset/metisMenu/dist/metisMenu.min.css")?>" rel="stylesheet">
    <link href="<?=base_url("asset/morrisjs/morris.css")?>" rel="stylesheet">
    <link href="<?=base_url("asset/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
        <script src="<?=base_url("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js")?>"></script>
        <script src="<?=base_url("https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js")?>"></script>
    <![endif]-->
    
    <link href="<?=base_url("asset/sb-admin/css/timeline.css")?>" rel="stylesheet">
    <link href="<?=base_url("asset/sb-admin/css/sb-admin-2.css")?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <?php require_once 'inc_nav_header.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
                
                <div class="col-lg-12">
                    <form method="POST" action="process/index.php">
                      <input type="text" name="DB_U_test_col" />
                      <input type="text" name="DB_U_test_col1" />
                      <input type="text" name="DB_W_test_col2" />
                      <input type="text" name="DB_W_test_col3" />
                      <input type="submit" value="Send" />
                  </form>
                </div>
                
                <div class="col-lg-12">
                    <?php $fc_data = db_select("SELECT * FROM faculty");?>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($fc_data as $row) { ?>
                            <tr>
                                <td><?=$row["fc_email"]?></td>
                                <td><?=$row["fc_name"]?></td>
                                <td><?=$row["fc_phone"]?></td>
                                <td><?=$row["fc_password"]?></td>
                            </tr> 
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- /.row -->                       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url("asset/jquery/jquery-1.12.0.min.js")?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url("asset/bootstrap/js/bootstrap.min.js")?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url("asset/metisMenu/dist/metisMenu.min.js")?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url("asset/raphael/raphael-min.js")?>"></script>
    <script src="<?=base_url("asset/morrisjs/morris.min.js")?>"></script>
    <!--<script src="<?=base_url("asset/sb-admin/js/morris-data.js")?>"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url("asset/sb-admin/js/sb-admin-2.js")?>"></script>

</body>

</html>
