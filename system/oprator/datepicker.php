
<?php include '../pages/admin/nav.php'; ?>
<!DOCTYPE HTML>
<html>
  <head>
        <link href="../vendor/datetimepicker/bs3/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
   <body>
<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Test</legend>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date=""  data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
        <input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
      <
        </fieldset>
    </form>
</div>




    <script type="text/javascript" src="../vendor/datetimepicker/bs3/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="../vendor/datetimepicker/bs3/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../vendor/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../vendor/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>


<script type="text/javascript">
    $('.form_datetime').datetimepicker({
         format: 'yyyy-mm-dd hh:ii:ss',
        autoclose: true
    });
  
</script>
  </body>
<html>