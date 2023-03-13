<input type="text" name="referal" placeholder="Живой поиск" value="" class="who"  autocomplete="off">
<ul class="search_result"></ul>
<br>
<br>
<div></div>
<style>
   .search{
   position:relative;
}
.search_result{
    background: #FFF;
    border: 1px #ccc solid;
    width: 100px;
    border-radius: 4px;
    max-height:100px;
    overflow-y:scroll;
    display:none;
}
.search_result li{
    list-style: none;
    padding: 5px 10px;
    margin: 0 0 0 -40px;
    color: #0896D3;
    border-bottom: 1px #ccc solid;
    cursor: pointer;
    transition:0.3s;
}
.search_result li:hover{
    background: #F9FF00;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/template/js/search.js"></script>