<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="d1"></p>
    <script>
        const proxyUrl = "https://cors-anywhere.herokuapp.com/";
        fetch(proxyUrl + "https://www.google.com/basepages/producttype/taxonomy-with-ids.en-US.txt").then(data => data.text()).then(result => {
            console.log(result);
            
        });
    </script>
</body>

</html>