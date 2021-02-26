
        <center>
            <h2>Liste des utilisateurs</h2>
            <button type="button" class="btn btn-success btn-icon" >
                <a href="?p=gestion/utilisateurs/ajout_utilisateurs.php">
                    Ajouter Utilisateur<i class="entypo-user-add"></i>
                </a>
            </button>
		</center>
		<br/>
        <?php

        $sql = "SELECT * FROM views_liste_utilisateurs";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {?>
                <table id='table-2' class="table table-bordered table-striped datatable" >
					 <thead>
						<tr>
                            <th>Username</th>
                            <th>Type</th>
                            <th colspan="2">action</th>
						</tr>
					</thead>
					<?php
					while ($row = mysqli_fetch_array($result)) {
						?>
						<tr>
                            <td><?php echo $row["user"]?></td>
                            <td><?php echo $row["type"]?></td>
                            <td><a href="?p=gestion/utilisateurs/edit_utilisateurs.php/<?php echo $row["id"] ?>" class="btn btn-default btn-sm btn-icon icon-left">
								    <i class="entypo-pencil"></i>Modifier
                                </a>
                            </td>
                            <td>
								<a href="?p=gestion/utilisateurs/delete_utilisateurs.php/<?php echo $row["id"] ?>" class="btn btn-danger btn-sm btn-icon icon-left">
									<i class="entypo-cancel"></i>Supprimer 
								</a>
							</td>
						</tr>
					<?php 
					}
					?>
                </table>
				<?php 
                mysqli_free_result($result);
            } else {
                ?><h1>Aucune entrée !</h1><?php
            }
        }
        mysqli_close($link);        
        ?>
