<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- custom -->

    <!-- google fonts used -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- google fonts used -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Date and time picker-->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet" >
<link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/popper.min.js"></script>
              <script src="js/bootsrap.min.js"></script>
          <script src="js/moment.min.js"></script>

          <script src="js/bootstrap-datetimepicker.min.js"></script>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>
    </div>
  </body>
</html>
