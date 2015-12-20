<!DOCTYPE html>
<html lang="pt-br">
	<head><title></title></head>
	<meta charset="utf-8">
	<body>
		<h1>Default template</h1>
         
        <div class="wrapper">
             
            <?php echo $body; ?>
             
        </div>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</body>
</html>