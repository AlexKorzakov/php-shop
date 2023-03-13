<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">
        <?php echo $_POST['company']; ?>
            <!-- <?php if($result): ?>

                <h5> <?php echo $a ?></h5>
                <br>                        
                <table class="table-bordered table-striped table" style="width: 100%;">
                    <tr>
                        <td>ID</td>
                        <td>Price</td>
                    </tr>
                    
                    <?php foreach ($result as $x): ?>
                    <tr>
                        <td> <?php echo $x['company_name'] ?></td>
                        <td><a class='order' href="/user/order/<?php echo $x['id']; ?>"><?php echo $x['id'] ?></a></td>
                        <td><?php echo $x['total_price'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <span class='show'></span>
                    
    
                </table>
            <?php endif; ?> -->
        </div>
        <br>
    </div>

</section>







<?php include ROOT . '/views/layouts/footer.php'; ?>