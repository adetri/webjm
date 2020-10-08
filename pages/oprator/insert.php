<?php 
include '../../conn/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dumetschool</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Plugin jQuery dan CSS: -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example-optionClass').multiselect({
            includeSelectAllOption: true, // add select all option as usual
            optionClass: function(element) {
                var value = $(element).val();
 
                if (value%2 == 0) {
                    return 'even';
                }
                else {
                    return 'odd';
                }
            }
        });
    });
</script>
<style type="text/css">
    #example-optionClass-container .multiselect-container li.odd {
        background: #eeeeee;
    }
</style>
  
</head>
<body>

<div class="container">
  <h2>Data iyuran</h2>
  <form method="post" action="../../system/dataiyuran.php"  enctype="multipart/form-data"> 
     <p>Nama Member :</p>            
  <div id="example-optionClass-container">     
    <select id="example-optionClass" multiple="multiple" name="id_member[]">
    <?php 
    include 'conn/koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"SELECT * FROM member");
    while($d = mysqli_fetch_array($data)){
      ?>

        
          <option value="<?php echo $d['id_member']; ?>"><?php echo $d['nama']; ?></option>
           <?php 
      }
      ?>
      </select>
    </div>
     <div class="form-group">
          <label for="exampleFormControlSelect1">Tahun :</label>
          <select name="tahun" class="form-control" id="exampleFormControlSelect1">     
      <?php 
      $no = 0;
      $data = mysqli_query($koneksi,"select * from tahun");
      while($d = mysqli_fetch_array($data)){
      $no++;  
        ?>
        <option value="<?php echo $d['id_tahun']; ?>"> <?php echo $d['tahun']; ?> </option>
              <?php 
      }
      ?>
          </select>
        </div>
          <input type="hidden" name="tgl" value="0000/00/00" readonly>
          <input type="hidden" name="status" value="belum" readonly>
            <input type="submit" name="" value="Simpan" class="btn btn-primary">
	</div>

</div>

    </form>
</body>
</html>