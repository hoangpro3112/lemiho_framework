<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'module/DashboardController/assets/css/style.css'; ?>"/>    
    <script src="<?php echo base_url() . 'module/DashboardController/assets/js/todo.functions.js'; ?>"/></script>
    <script src="<?php echo base_url() . 'module/DashboardController/assets/js/weather.js'; ?>"/></script>
    <script src="<?php echo base_url() . 'module/DashboardController/assets/js/form.js'; ?>"/></script>
</head>
    <body>
        <?php $this->view($data['template'],$data); ?>
        
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>"/>
    </body>
</html>