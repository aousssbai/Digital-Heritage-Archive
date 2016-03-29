

<tr>
    <td><?php echo $exercice->getId(); ?></td>
    <td><?php echo $exercice->getTitle(); ?></td>
    <td><?php echo $exercice->getpublished(); ?></td>
    <td><?php echo $exercice->getformat(); ?></td>
    <td><?php echo $exercice->getcreator(); ?></td>
    <td><?php echo $exercice->getheld(); ?></td>
    <td><?php echo $exercice->getusage(); ?></td>
    <td><?php echo $exercice->getshelfmark(); ?></td> 
    <td><?php echo $exercice->getDescription(); ?></td>
   
    <td><a href="exercice.php?exercice=<?php echo $exercice->getId();?>"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></td>
    <td><a href="edit/edit-exercice.php?exercice=<?php echo $exercice->getId();?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
    <td><a href="edit/delete-exercice.php?exercice=<?php echo $exercice->getId();?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
</tr>
