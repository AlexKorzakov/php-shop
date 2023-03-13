<?php include ROOT . '/views/layouts/header.php'; ?>


<section>
    <div class="container">
        <div class="row">

            <h3>Кабинет пользователя: <?php echo $user['name'] ?></h3>
            <form action="#" method="post">
                <select name="company" id="company">
                    <option value="#">Выберите компанию:</option>
                    <?php foreach ($lastCompany as $company): ?>
                        <option  value="<?php echo $company['name'] ?>">
                            <p><?php echo $company['name'] ?></p>
                        </option>
                    <?php endforeach; ?>
                </select>
                <br>
                <br>
                <input type="submit" name="submit" class="btn btn-default" value="Показать" />
            </form>
            <br>
            <?php if($result): ?>
                        <h4>Имя компании: <?php echo $_REQUEST['company'] ?></h4>
                        <table class="table-bordered table-striped table" style="width: 100%;">
                            <tr>
                                <th>ID:</th>
                                <th>Дата:</th>
                                <th>Статус:</th>
                                <th>Сумма:</th>
                                <th></th>
                            </tr>
                            
                            <?php foreach ($result as $x): ?>                                
                            <tr>
                                <td><a class='order' href="/user/order/<?php echo $x['id'] ?>">Счет № <?php echo $x['id'] ?></a></td>
                                <td><?php echo $x['date'] ?></td>
                                <td>Оплачен.</td>
                                <td><?php echo $x['total_price'] ?> Р.</td>
                                <td><a href="/user/order/<?php echo $x['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>                           

                            </tr>
                            <?php endforeach; ?>
                            <?php foreach ($result as $x): ?>   
                                <?php $q = $x['total_price'] + $q ?>
                            <?php endforeach; ?> 
                            <th colspan="3">Итого по компании: "<?php echo $_REQUEST['company'] ?>"</th>
                            <th><?php echo $q ?> Р.</th>
                            <th></th>          
                        </table>
                    <?php endif; ?>
        </div>
        <br>
    </div>

</section>
<span id="txtHint"></span>
<!-- <script>
    $( ".btn btn-default" ).click(function(){
        var e = $(this).html();
        console.log(e);
        // $.post("/user/showSecondTableAjax/", e, function(data){
        //     $(".show").html(data);
        // });
    });
</script> -->






<?php include ROOT . '/views/layouts/footer.php'; ?>