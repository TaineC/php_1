<?php 
    //super global variable
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';

    $title = '';
    $description = '';
    $link = '';
    $photo = 'moon.jpg';

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $photo = $_POST['photo'];
    }
    else{
        //send them back to the form -- stops them accesing a page that they shouldn't
        header('Location:form.php');
        exit;
    }

    require_once('header.php'); 
?>

        <div class="card" style="width: 18rem;">
        <img src="<?php echo $photo ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title ?></h5>
                <p class="card-description"><?php echo $description ?></p>
                <a href="<?php echo $link ?>" class="card-link">view more...</a>
            </div>
        </div>

<?php require_once('footer.php'); ?>