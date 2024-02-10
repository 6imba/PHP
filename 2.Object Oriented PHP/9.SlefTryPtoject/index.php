<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Ticket reservation system</title>

<style>
  #errorpara
  {
    color : red;
  }
</style>
</head>

<body>
    <h1>Ticket Reservation System</h1>

    <p id ="errorpara"></p>

    <form  onsubmit= "return validate()">
    <pre>
    FirstName        : <input type="text"   name="fname"    id ="ffnaam"        placeholder = "Enter your firstname"><br/>
    LastName         : <input type="text"   name="lname"    id ="llnaam"        placeholder = "Enter your lastname"><br/>
    Nationality      : <input type="text"   name="nality"   id="nality"      placeholder="Enter the nationality"><br/>
    Gender           : <input type="radio"  name ="gender">Male  <input type="radio" name ="gender">Female <br/>
    Destination From : <input type="text" id="destfrom">  To : <input type="text" id="destto"><br/>
    Contact Number   : <input type="number" name="contact"  id ="phunno"><br/>
    Email            : <input type="email"  name="email"    id ="emailaddress"><br/>
    Departure Date   : <input type="date"                   id ="depdate"><br/>
    Return Date      : <input type="date"                   id ="retdate"><br/>
    <br>
    <input type="submit" value="Submit">
    </pre>
    </form>
</body>

<script>
      function validate()
      {
        var a = document.getElementById("ffnaam").value;
        var b = document.getElementById("llnaam").value;
        var c = document.getElementById("nality").value;
        var d = document.getElementById("destfrom").value;
        var e = document.getElementById("destto").value;
        var f = document.getElementById("phunno").value;
        var g = document.getElementById("emailaddress").value;
        var h = document.getElementById("depdate").value;
        var i = document.getElementById("retdate").value;
        var message ="";
        var error = 0;

        if (a == "")
        {
          message+= "FirstName cannot be empty. <br>";
          error = 1;
        }

        if (b == "")
        {
          message += "LastName cannot be empty. <br>";
          error = 1;
        }

        if (c == "")
        {
          message +="Nationality cannot be empty. <br>";
          error = 1;
        }

        if (d == "")
        {
          message +="Destination_From cannot be empty. <br>";
          error = 1;
        }

        if (e == "")
        {
          message +="Destination_To cannot be empty. <br>";
          error = 1;
        }

        if (f == "")
        {
          message +="Phone number cannot be empty. <br>";
          error = 1;
        }

        if (g == "")
        {
          message +="Email address cannot be empty. <br>";
          error = 1;
        }

        if (h == "")
        {
          message +="Departure Date cannot be empty <br>";
          error = 1;
        }

        if (i == "")
        {
          message +="Return Date cannot be empty <br>";
          error = 1;
        }


        if (error == 1)
        {
          document.getElementById("errorpara").innerHTML = message;
          return false; //You use return false to prevent something from happening. So if you have a script running on submit then return false will prevent the submit from working. When a return statement is called in a function, the execution of this function is stopped. If specified, a given value is returned to the function caller.
        }
      }
</script>
</html>
