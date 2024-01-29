<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "-----Arrays multidimensionales-----<br>";
        $alimentos = array("fruta" => array("tropical" => "kiwi",
                                            "citrico" => "mandarina"),
                            "leche" => array("animal" => "vaca",
                                            "vegetal" => "coco" ),
                            "carne" => array("vacuno" => "lomo",
                                            "porcino" => "pata"));
        
        echo $alimentos["carne"]['vacuno'];
        echo $alimentos["fruta"]['tropical'];
        
    
    
    
    
    
    
    ?>
</body>
</html>