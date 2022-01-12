<?php include "Includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">  
<head></head>
<title>Index Body</title> <meta charset="utf-8">

<script>
    function getData(){
        var url = "getData.php"; //URL 
        var id = document.getElementById('searchCity').value;
        $("#mydata").load(url, "destination="+id);
    }
</script>
        
<body>    
    <form>   
        <input type ="text" ng-model="" size="30" placeholder="Search Query" id = "searchCity"> 
        <input type ="button" value="Submit" onclick="getData()">
    </form>
    
    
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Destination</th> <th>Miles</th> <th>Gallons</th> <th>Date</th> <th>Purpose</th>         
        </tr>
        </thead>
    <tbody id='tbl'>
    <div id="mydata"></div> 
    </tbody></table>
</body>
</html>