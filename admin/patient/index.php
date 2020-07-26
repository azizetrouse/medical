<?php 
include ("../../config.php");
include (style."/nav.php");
include (style."/header.php");

$sql = 'SELECT * FROM patients ';  
$result = $conn->query($sql);

?>
<div class="row">
<div id="form-container" style=" width: 90% !important;">
    <h1 id="h1">List of Patients <a href="patient.php" class="btn-add">Ajouter un nouveau +</a></h1>
    <table class="table" id="table">
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
                <td><?= $row["reference"]; ?></td>
                <td><?= $row["cin"]; ?></td>
                <td><?= $row["mutuelle"]; ?></td>
                <td><?= $row["tel"]; ?></td>
                <td>
                    <div  class="btn-group m-auto"  role="group" aria-label="">
                        <a href="patient.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-info "><img src="<?php echo images;?>pencil.png "  alt="edit"></button>
                        <a href="delete.php?id=<?= $row["id"]; ?>" type="button" class="btn btn-danger"><img src="<?php echo images;?>delete.png "  alt="edit"></a>
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
</div>
</div>
<?php include (style."/footer.php"); ?>
<script src=""></script>
