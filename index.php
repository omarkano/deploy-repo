<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <?php echo 'hello'; ?>

    



        <script>


            function getTodos(){
                fetch('https://jsonplaceholder.typicode.com/todos')
                .then(response => response.json())
                .then(json => console.log(json))
            }
            
            getTodos();
          
        </script>
</body>
</html>