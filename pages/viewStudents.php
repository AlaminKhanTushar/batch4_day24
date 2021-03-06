<?php
session_start();
if (!isset($_SESSION['id']))
{
    header('Location: action.php?page=login');
}
?>

<?php include 'pages/includes/header.php';?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($students as $student) { ?>
                    <div class="col-md-4 mt-5">
                        <div class="card" style="height: 300px">
                            <img src="<?php echo $student['image'];?>" alt="" class="card-img-top" style="height:200px">
                            <div class="card-body">
                                <h2><?php echo $student['name']; ?></h2>
                                <p><?php echo $student['email']; ?></p>
                                <p><?php echo $student['phone']; ?></p>
                                <a href="javascript:void(0)" class="btn btn-outline-success float-right">View</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php';?>