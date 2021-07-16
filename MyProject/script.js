// Handles differet events
function getUserValue(identifier)
{
    // Returns values from the html form;
    if (identifier == "handleUserName")
    {
        var x = document.forms["myForm"]["student"].value;
    }
    else if (identifier == "handleMarkValue")
    {
        var x = document.forms["myForm"]["mark"].value;
    }
    return x;
}

// Prompts the user if no name was specified;
function checkAttributes()
{
    // Gets the value from the html body (it's respective fucntion);
    var userName = getUserValue("handleUserName");
    var userValue = getUserValue("handleMarkValue");

    // Checks if the text field is empty;
    if (userName == "" || userName == null)
    {
        // Alerts the user;
        alert("Error! Missing requiered name.");
    }
    // Checks whether the mark belongs to <1;5>
    if (userValue < 1 || userValue > 5)
    {
        alert("Error! Invalid mark value (only 1-5).")
    }
}
