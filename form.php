<?php require_once('header.php'); ?>
        
    <form action="card.php" method="post">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="photo">Choose Photo</label>
            <select class="form-control" id="photo" name="photo">
                <option value="astronaut.jpg">Astronaut Floating</option>
                <option value="lights.jpg">Northern Lights</option>
                <option value="moon.jpg">Man on the Moon</option>
            </select>
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
        </div>

        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>

<?php require_once('footer.php'); ?>