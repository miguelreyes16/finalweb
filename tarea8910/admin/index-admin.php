<?php 
           include("../includes/cabeza-admin.php");
           include("../includes/pie-admin.php");
           include("../includes/db.php");

          
            
          ?>
    <br>
        
        <div class="container">
        <span> Camiones</span>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Modelo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Valor</th>
            <th scope="col">--</th>
           
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM camiones";
            $camiones= mysqli_query($conn,$query);

            while($row=mysqli_fetch_array($camiones)){?>

            <tr>
            <td><?php echo $row['id_camion']?></td>
            <td><?php echo $row['modelo']?></td>
            <td><?php echo $row['cant']?></td>
            <td><?php echo $row['valor']?></td>
            <td>
            <a href="eliminar.php?id<?php echo $row['id_camion']?>"> <i class="fas fa-trash"></i> </a>
                 <a href="edit-camiones.php"> <i class="fas fa-edit"></i> </a>
                 </td>
            </tr>

           <?php }


?>
        
        </tbody>
        </table>
        </div>

   
            <br>


        <div class="container">
        <span> Lavadoras</span>
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Código</th>
            <th scope="col">Modelo</th>
            <th scope="col">Valor</th>
            <th scope="col">--</th>
            
            </tr>
        </thead>
        <tbody>
        <?php
            $query = "SELECT * FROM lavadoras";
            $camiones= mysqli_query($conn,$query);

            while($row=mysqli_fetch_array($camiones)){?>

            <tr>
            <td><?php echo $row['id_lav']?></td>
            <td><?php echo $row['marca']?></td>
            <td><?php echo $row['modelo']?></td>
            <td><?php echo $row['valor']?></td>
            <td>
            <a href="./eliminar.php"> <i class="fas fa-trash"></i> </a>
                 <a href="./edit-lavadoras.php"> <i class="fas fa-edit"></i> </a>
                 </td>
            </tr>

           <?php }


?>
        
        </tbody>
        </table>
        </div>