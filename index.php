<?php declare(strict_types =1 ); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP102- PHP7:Scalar Types</title>
</head>
<style>
    body {
        padding: 20px;
    }
</style>
<body>
    <?php
        include './includes/scalar.php';
    
        $portal = new BoomPortal("Boom.Camp Portal V1.0.0");
        $portal->setClientName('Jaymard Menor');
        $portal->setProjectManagerName('Jino Lacson');
        $portal->setYrDeployed(2020);
        $portal->setBuiltInVersion(1);
        $portal->setTechnologyStack(array("PHP", "Boostrap", "HTML5", "CSS3"));
        $portal->setDevelopers(array("Rap", "Delfin", "Hamlet"));
    ?>
        <div style='display: flex; justify-content: center;'>
            <div class='card' style='width: 30rem;'>
                <div class='card-body'>
                    <?php echo $portal->getInfo(); ?>
                    <?php foreach($portal->getTechnologyStack() as $techStack){
                            echo "<ul class='list-group'>";
                                echo "<li class='list-group-item'><strong>". $techStack. '</strong></li>';
                            echo "</ul>";
                    }?>
                    <?php echo "Developers: <br />"; ?>
                    <?php foreach($portal->getDevelopers() as $dev){
                            echo "<ol class='list-group'>";
                                echo "<li class='list-group-item'><strong>" . $dev . '</strong></li>';
                            echo "</ol>";
                    }?>
                </div>
            </div>
        </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>