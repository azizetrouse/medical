<?php
 include ('../../config.php'); 
 include (style."/nav.php");
 include (style."/header.php");

$sql = 'SELECT * FROM medicaments';
$result = $conn->query($sql);

   ?>
 <?php //require admi.'function/message.php'; ?>
     <div class="row">
        <div id="form-container" class="form-container" style=" width: 92% !important;">
        
        <h1> <samp id="h1">List of Patients</samp> <a href="medicament.php" class="btn-add">Ajouter un nouveau +</a> </h1>
           
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
                        <!--  -->
                        <div  class="btn-group m-auto " role="group" aria-label=" ">
                        <a href="med_edit.php?id=<?= $row['id'] ?>" type="button" class="btn btn-info"><img src="<?php echo images;?>pencil.png "  alt="edit"></button>
                        <a href="med_delete.php?id=<?= $row['id'] ?>" type="button" class="btn btn-danger"><img src="<?php echo images;?>delete.png "  alt="edit"></a>
                                           </div>
                        </td>
                    </tr>
                <?php } ?>
              
                <?php } ?>
          </tbody>
    </table>
</div>
<script src="../../script/app.js"></script>
</body>
</html>
