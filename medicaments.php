<?php
session_start();
 include 'init.php';
$sql = 'SELECT * FROM medicaments';
$result = $conn->query($sql);


   ?>
 
     <div class="row">
        <div id="form-container" class="form-container" style=" width: 92% !important;">
        
        <h1> <samp id="h1">List of Patients</samp> <button type="submit" id="btn" class="btn-add">Ajouter un nouveau +</button> </h1>
           
              <table class="table"id="table">
                <thead id="thead">
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <?php
                if ($result->num_rows > 0) { ?>
                <tbody id="tbody">
                <?php while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td scope="row"><?= $row['name'] ?? '' ?></td>
                        <td><?= $row['description'] ?? '' ?></td>
                        <td>
                        <div  id="btn-group"> 
                        <!-- <button type="button" id="addmed" class="btn btn-info">  -->
                        <a href="med_edit.php?id=<?= $row['id'] ?>"  class="btn btn-info"><img src="./images/<?= $data['pages'][2]['title'] ?>" alt=""></a>
                            
                        <a href="med_delete.php?id=<?= $row['id'] ?>" class="btn btn-danger"><img src="images/<?= $data['pages'][1]['title'] ?>" alt=""></a>
                        </div>
                        </td>
                    </tr>
                <?php } ?>
              
                <?php } ?>
            
         <?php 
        //  include "med_edit.php";
         include "medicament.php";
         ?>  
          </tbody>
    </table>

   <script src="script.js/port.js"></script>
   </div>
</div>
</body>
</html>
<?php
include "footer.php";
?>