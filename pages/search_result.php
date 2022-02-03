<?php include 'header.php';?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class=" col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">Search Result</div>
                    <div class="card-body">

                        <form action="action.php" method="Post">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" name="search"/>
                                <div class="input-group-append">
                                    <button type="submit" name="search_button" class="btn btn-outline-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <?php if(isset($result['name'])){?>

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td><?php echo $result['name'];?></td>
                                    <td><?php echo $result['mobile'];?></td>
                                    <td><?php echo $result['email'];?></td>
                                    <td><?php echo $result['address'];?></td>
                                </tr>

                            </tbody>
                            <?php } else { ?>
                            <h1 class="text-danger text-center">Sorry ...No record fond.</h1>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?php include 'footer.php';?>
