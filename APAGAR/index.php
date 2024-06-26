<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>

<!-- This one works just fine -->
<script>
    console.log('init'); 
</script>

<!-- This one does not work -->
<script type="" src="js/test.js"></script>
<script type="module" src="./js/index.js"></script>

</body>
</html>