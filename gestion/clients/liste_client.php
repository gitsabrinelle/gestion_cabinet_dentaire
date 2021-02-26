
        <center>
            <h2>Liste des clients</h2>
            <button type="button" class="btn btn-success btn-icon" >
                <a href="?p=gestion/clients/ajout_client.php">
                    Nouveau Client<i class="entypo-user-add"></i>
                </a>
            </button>
		</center>
		<br/>
        <?php
        $j=0;
        $ref;
        $sql = "SELECT * FROM clients";
        if ($result = mysqli_query($link, $sql)) {
            if (mysqli_num_rows($result) > 0) {?>
                <table id='table-2' class="table table-bordered table-striped datatable" >
					 <thead>
						<tr>
							<th>Societe</th>
							<th>Tel</th>
							<th>Adresse</th>
							<th>type de Prix</th>
							<th>Vente</th>
							<th>Facturation</th>
							<th>action</th>
						</tr>
					</thead>
					<?php
					while ($row = mysqli_fetch_array($result)) {
						?>
						<tr>
							<td><?php echo $row['societe'] ;?></td>
							<td><?php echo $row['tel'] ;?></td>
							<td><?php echo $row['adresse']."  ".$row['Ville']."  ".$row['Wilaya'] ;?></td>
                            <td><?php echo $row['prix'] ;?></td>
                            <td><a href ="#" class="<?php if(!empty( $row['is_vente'])) { ?>entypo-check<?php } else { ?>entypo-cancel<?php } ?>"> </a></td>
                            <td><a href ="#" class="<?php if(!empty( $row['is_facturation'])) { ?>entypo-check<?php } else { ?>entypo-cancel<?php } ?>"> </a></td>
							<td><a href="?p=gestion/clients/edit_client.php/<?php echo $row["id"] ?>" class="btn btn-default btn-sm btn-icon icon-left">
								    <i class="entypo-pencil"></i>Modifier
                                </a>
								<a href="?p=gestion/clients/delete_client.php/<?php echo $row["id"] ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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
            }
        }
        mysqli_close($link);        
        ?>
