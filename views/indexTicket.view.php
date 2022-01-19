<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="ticket.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Boarder pass</title>
</head>
<body>
    <?php require '../inc/functions.php'; ?>
    <h1>Boarder pass</h1>
    <?php

        $printTicket = getTicket(); 
        var_dump($printTicket);

    ?>
    <div class="container">
        <div class="row" id="top">
            <div class="col">
                <p>Departing<br></p>
                <h3><?= $printTicket[0]; ?></h3>
            </div>
            <div class="col">
                <div style="transform: rotate(45deg)">
                    <i class="fa fa-plane" style="font-size:48px;color:white"></i>
                </div>
            </div>
            <div class="col">
                <p>Arraiving<br></p>
                <h3><?= $printTicket[1]; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col" id="mid">
                <p>Passenger:<br></p>
                <h5><?= $printTicket[4]; ?><br></h5>
                <h5><?= $printTicket[5]; ?><br></h5>
            </div>
            <div class="col">
                <p><br></p>
                <h6>Person Id: <?= $printTicket[6]; ?><br></h6>
                
            </div>
            <div class="col">
               <p><br></p>
                <h5>Tickets price: <?= $printTicket[2]; ?>Eur </h5>
                <h5>Bag: +<?= $printTicket[3]; ?>Eur<br></h5>
                <h5>Total: <?= $printTicket[2]+$printTicket[3];?>Eur</h5>
            </div>
            
        </div>
  </div>







</body>
</html>