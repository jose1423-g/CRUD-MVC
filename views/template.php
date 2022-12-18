<?php 
    namespace views;
    $Template = new Template();
    
    class Template{

        public function __construct(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUC MVC</title>
        <link rel="stylesheet" href="<?php echo URL; ?>views/template/css/style.css">
    </head>
    <body>

        
<?php
    }
        public function __destruct(){

?>
    </body>
    </html>
<?php
        }
    }
?>