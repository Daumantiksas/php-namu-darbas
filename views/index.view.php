<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2>Skrydziai</h2>
    
    
<!--     
            <button type="submit" class="btn btn-primary" name="new">Naujas skrydis</button>
            <button type="submit" class="btn btn-primary" name="all">Visi skrydziai</button>
              -->
    
            <?php if(isset($_POST["save"])):?>
               <ul> 
                <?php foreach($_POST as $key => $value):?>   
                <?php if($key !=='save'):?>
                    <li><?=$value;?></li>
                    <?php endif;?>
                    <?php endforeach;?> 
             </ul>  
               <?php else:?>
             
           




       <form method="POST">
    <div class="mb-3">
    <select class="form-control" name="flightFrom">
    <option selected disabled>- Iš ->-></option>
    <?php foreach($flightsFrom as $key=>$city) :?>
        <option value=<?= $city['town'];?>><?=$city['town'];?></option>
    <?php endforeach; ?>
    </select>
    </div>
    <div class="mb-3">
    <select class="form-control" name="flightTo">
    <option selected disabled>->-> Į -</option>
    <?php foreach($flightsTo as $key=>$city) :?>
        <option value=<?=$city['town'];?>><?=$city['town'].", ".$city['price']."Eur." ;?></option>
        
        <?php endforeach; ?> 
    </select>
    </div>

    <div class="mb-3">
    <select class="form-control" name="Bag">
    <option selected disabled>Bagazas</option>
    <option value="<20kg">maziau <20 kg</option>
         <option value=">20kg">daugiau >20kg + 20Eur</option>
    </select>
    </div>
    <div class="mb-3">
        <ul>
            <li >Kaina: <?=$city['price'];?></li>
        </ul>
    </div>
 
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Vardas" name="name">
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Pavarde" name="lname">
    </div>
    <div class="mb-3">
        <input type="numbers" class="form-control" placeholder="A/K." name="id">
    </div>
    <div class="mb-3">
        <textarea cols="30" rows="10" class="form-control" placeholder="Pastabos" name="message"></textarea>
    </div>


    <button type="submit" class="btn btn-primary" name="save">Spausdinti</button>
       </form>
       <?php endif;?>
     
      
</div>

</body>
</html>