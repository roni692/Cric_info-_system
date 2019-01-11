<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
<link rel="stylesheet" href="css/font-awesome.min.css"> 
<link rel="stylesheet" href="css/blueTheme.css"/> 
<link rel="stylesheet" href="css/menu.css"/> 
<link rel="stylesheet" href="css/index.css"/> 
<link rel="stylesheet" href="css/general.css"/> 
<link rel="stylesheet" href="css/bootstrap.min.css" />
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<!--<script src="js/progress.js"></script>--> 
<!--<script type="text/javascript">
    document.onreadystatechange = function (e)
    {
        if (document.readyState == "interactive")
        {
            var all = document.getElementsByTagName("*");
            for (var i = 0, max = all.length; i < max; i++)
            {
                set_ele(all[i]);
            }
        }
    }

    function check_element(ele)
    {
        var all = document.getElementsByTagName("*");
        var totalele = all.length;
        var per_inc = 100 / all.length;

        if ($(ele).on())
        {
            var prog_width = per_inc + Number(document.getElementById("progress_width").value);
            document.getElementById("progress_width").value = prog_width;
            $("#bar1").animate({width: prog_width + "%"}, 10, function () {
                if (document.getElementById("bar1").style.width == "100%")
                {
                    $(".progress").fadeOut("slow");
                }
            });
        }

        else
        {
            set_ele(ele);
        }
    }

    function set_ele(set_element)
    {
        check_element(set_element);
    }
</script>
<style type="text/css">
    .progress 
    {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #F2F2F2;
    }
    .bar 
    { 
        background-color: #819FF7; 
        width:0%; 
        height:5px; 
        border-radius: 3px; 
    }
    .percent 
    { 
        position:absolute; 
        display:inline-block; 
        top:3px; 
        left:48%; 
    }
</style>-->