<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<?php require '../inc/functions.php';?>

<body>
    <?php  if(isset($_POST['btn'])):?>
        <?php saveTicket($_POST);?>
    <?php endif;?>
<form action="indexTicket.view.php" method="POST">

            <h3>Boarder pass</h3>
            <table class="table table-bordered table-striped">
                <th>Isvykimas</th>
                <th>Atvykimas</th>
                <th>Bilieto kaina</th>
                <th>Vardas</th>
                <th>Pavarde</th>
                <th>A/K.</th>
                <th>Bilietas</th>
                <?php foreach (getData() as $key=>$list):?>
                    
                    <tr>
                        
                        <?php if($list = explode(',', $list)):?>
                        
                            <?php if(count($list) > 1):?>
                            <td><?=$list[0];?></td>
                            <td><?=$list[1];?></td>
                            <td><?=$list[2]+$list[3];?></td> 
                            <td><?=$list[4];?></td>
                            <td><?=$list[5];?></td>
                            <td><?=$list[6];?></td>
                            <td><button type="submit" value="<?=$key;?>" href="indexTicket.view.php" class="btn btn-primary" name="btn">Bilietas</button></td>
                            <?php endif;?>
                            <?php endif;?>
                    </tr>

                    <?php endforeach;?>
            </table>
            
                            </form>
      
</body>
</html>