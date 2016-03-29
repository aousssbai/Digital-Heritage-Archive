

<div class="container">

 <?php
       Alert::displayMessage();
        $dbFactory = new DBFactory();
        $db = $dbFactory->getMysqlConnexionWithPDO();
        $exerciceManager = new ExerciceManager($db);

        ?>



        <h1 class="text-center">Submission page</h1>

        

       
            <tbody>
        <?php  
        

      

         ?>
            </tbody>
        </table>

        


    <form action="views/add-exercice.php" method="post" id="addForm">

        <div class="form-group">
            <label for="group number">Group number:</label>
            <input type="text" class="form-control" placeholder="Group number" name="group_number" required>
        </div>

        <div class="form-group">
            <label for="title">Full title:</label>
            <input type="text" class="form-control" placeholder="Full title" name="title" required>
        </div>

        <div class="form-group">
            <label for="published">Published:</label>
            <input type="text" class="form-control" placeholder="published" name="published" required>
        </div>

        <div class="form-group">
            <label for="formats">Formats:</label>
            <input type="text" class="form-control" placeholder="Formats" name="format" required>
        </div>

        <div class="form-group">
            <label for="creator">Creator</label>
            <input type="text" class="form-control" placeholder="Creator" name="creator" required>
        </div>

         <div class="form-group">
            <label for="held">Held by</label>
            <input type="text" class="form-control" placeholder="Held by" name="held" required>
        </div>

         <div class="form-group">
            <label for="myUsage">Usage terms</label>
            <input type="text" class="form-control" placeholder="Usage terms" name="myUsage" required>
        </div>

         <div class="form-group">
            <label for="shelfmark">Shelfmark</label>
            <input type="text" class="form-control" placeholder="Shelfmark" name="shelfmark" required>
        </div>

        <div class="form-group">
            <label for="Description">Description</label>
            <input type="text" class="form-control" placeholder="Description" name="Description" required>
        </div>

        
       



        <input type="hidden" name="postExercice" value = "111">

        <button type="submit" class="btn btn-primary center-block">Submit</button>
    </form>
    
</div>
