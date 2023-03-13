<table border="1" style="width: 100%;">
    <tr>
        <td>ID</td>
        <td>Price</td>
    </tr>
    
    <?php foreach ($ex as $x): ?>
    <tr>
        <td><a class='order' href="#"><?php echo $x['id'] ?></a></td>
        <td><?php echo $x['total_price'] ?></td>
    </tr>
    <?php endforeach; ?>
    <span class='show'></span>
    

</table>


<!-- <script>
$(document).ready(function(){
    $( ".order" ).click(function() {
        var id = $(this).serializeArray();
        alert(id);
        $.post("/user/showSecondTableAjax/", id, function(data){
            $(".show").html(data);
        });
    });
});
</script> -->
<script>
    $('.order').click(function(){
        var e = '123';
        var q =($(this).html());
        var w = $(q).serialize();
        console.log(e);
        $.post("/user/showSecondTableAjax/", e, function(data){
            $(".show").html(data);
        });
    });
</script>