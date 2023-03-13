<footer id="footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container" style='text-align:center;background-color:#D6D6D0;'>
            <br>
            <p class='visa' style='text-align:center;'>Мы принимаем к оплате:</p>
            <img src="/template/images/footer/visa-mastercard.jpg" alt="" style="width:256px;">
        </div>
        <br>
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2020</p>
                <p class="pull-right"><strong><a style='color:#363432;' href="/upload/off/dogovor-oferta.docx" download>Договор Оферты</a></strong></p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/template/js/jquery.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>
<script>
    $( ".target" ).change(function() {

        var id = $(this).serialize();
        $.post("/user/testAjax/", id, function (data) {
            $("#txtHint").html(data);
        });
    });
</script>
<!-- <script>
    $( ".order" ).click(function(){
        
        var txt = $(this).html();
        console.log(txt);
        $.post("/user/showSecondTableAjax/", txt, function(data){
            $(".show").html(data);
        });
    });
</script> -->
</body>
<style>
    .visa{
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        height: 34px;
        color: #696763;
    }
    .footer-bottom p{
        font-weight: 700;
    }
</style>
</html>