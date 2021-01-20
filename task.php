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
        // const proxyUrl = "https://cors-anywhere.herokuapp.com/";
        // fetch(proxyUrl + "https://www.google.com/basepages/producttype/taxonomy-with-ids.en-US.txt").then(data => data.text()).then(result => {
        //     console.log(result);

        // });
    </script>

    <?php
    $file = file_get_contents('https://www.google.com/basepages/producttype/taxonomy-with-ids.en-US.txt');
    $file = explode("\n", $file);
    $txt = array();
    foreach ($file as $index => $line) {
        $fields = explode(" > ", $line);
        $cursor = &$txt;
        foreach ($fields as $field) {
            if (!isset($cursor[$field])) {
                $cursor[$field] = array();
            }
            $cursor = &$cursor[$field];
        }
    }

    foreach($txt as $key=>$val){
        echo $key."<br>";
        foreach($val as $k=>$v){
            print_r($k."<br>");
            print_r($v);
        }
    }
    ?>
</body>

</html>