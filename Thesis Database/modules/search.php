<form id = "searchbox">
    <input type = "text" class= "search" name = "txtsearch" placeholder = "Search" />
    <button type = "button" class = "global_button" id = "btnsearch">Search</button>
</form>

<script>
    $(document).ready(function(){
        function LoadRecords(){
            $.post("modules/manage_students.php",$("form#searchbox").serialize());
        };
        
        LoadRecords();
        
        $("#btnsearch").click(function(){
            LoadRecords();
        });
    });
</script>