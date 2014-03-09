<!DOCTYPE html>
<html>
    <head>       
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <script>
            requirejs = {
                paths: {
                    jquery: 'js/jquery.min',
                    datepicker: 'js/bootstrap-datetimepicker.min',
                    moment: 'js/moment',
                    bootstrap: 'js/bootstrap.min'
                }
            }
        </script>
        <script src="js/require.js"></script>
    </head>    
    <body>     
        <input type="text" name="test" id="test" />
        <script>
            require(['datepicker'], function() {
                $("#test").datetimepicker();
            });
        </script>
    </body>
</html>