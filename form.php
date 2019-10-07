<?php require_once('header.php'); ?>
        
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Enter link">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php require_once('footer.php'); ?>