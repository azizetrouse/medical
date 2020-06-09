  <?php  
  session_start();
    include 'init.php';

  $sql = 'SELECT * FROM patients ';  
   $result = $conn->query($sql);
   ?>

 <div class="row">

 <div id="form-container" style=" width: 92% !important;">
    <h1 id="h1">List of Patients<button type="submit" id="add" class="btn-add"> Ajouter un nouveau +</button></h1>

    <form id="serch" action="" method="POST">
      <input class="search" name="search" type="search" placeholder="Search" require ></input>
      <button type="submit" id="search" name="submit" id="btn"> </button>
    </form>
     <div id="success"></div> 
    <table class="table" id="table" >
        <thead id="thead">
            <tr>
                <th>Id</th>
                <th>Reference</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>CIN</th>
                <th>Mutuelle</th>
                <th>Tel</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        if ($result->num_rows > 0) { ?>
        <tbody id="tbody">
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td scope="row"><?= $row["id"]; ?></td>
                <td ><?= $row["reference"]; ?></td>
                <td><?= $row["nom"]; ?></td>
                <td><?= $row["prenom"]; ?></td>
                <td><?= $row["cin"]; ?></td>
                <td><?= $row["mutuelle"]; ?></td>
                <td><?= $row["tel"]; ?></td>
                    <div  id="group"  >
                <td>
                <div  id="btn-group"  role="group" aria-label="">
                <a href="edit_patient.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-info"><img src="./images/<?= $data['pages'][2]['title'] ?>" alt=""></button>
                     <a href="database/delete.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-danger"><img src="./images/<?= $data['pages'][1]['title'] ?>" alt=""></a>
                    </div>
                    </td>
               
            </tr>
            <?php } ?>
        </tbody>
        <?php
        } else {
            echo "No Patient";
        } ?>
    </table>
     <?php 
             include "patient.php";
    ?>
  <div>
  </div>
  <script src="script.js/port.js"></script>

  <?php
include "footer.php";
?>