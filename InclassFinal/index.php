<html>
<head>
<title></title>
<link rel="stylesheet" href="autocomplete.css" type="text/css" media="screen">
<script src="jquery.js" type="text/javascript"></script>
<script src="dimensions.js" type="text/javascript"></script>
<script src="autocomplete.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function(){
        setAutoComplete("searchField", "results", "AutoComplete.php?part=");
    });
</script>
</head>

<body>
    <h1>Autocomplete Select Box using PHP,Ajax& MySQL</h1>
    <p id="auto">
        <label>Zip: </label>
        <input id="searchField" name="searchField" type="text" placeholder="Search Zip"/>
    </p>    
    
</body>

</html>