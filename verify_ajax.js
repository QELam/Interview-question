function check()
{
    /*Get value from the form by using id="name"*/
    var strValue = document.getElementById("name").value;

    /*Check the input is it empty*/
    /*If empty, window will diaplay alert*/
    if (strValue.length === 0)
    {
        alert("Error!!! User Name cannot be empty");
    }
    /*If not, value will pass through info.php by using URL*/
    else
    {
        window.location.href = "info.php" + "?" + strValue;
    }
}