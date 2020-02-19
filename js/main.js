/*
    Luis
    ICSE 2020
*/

function post_it (){

    /*JSON Object Creation*/
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var dni = document.getElementById("dni").value;
    var email = document.getElementById("email").value;
    var country = document.getElementById("country").value;

    var info = '{ "name":"'+name+'" , "surname":"'+surname+'", "dni":"'+dni+'", "email":"'+email+'", "country":"'+country+'"  }';

    /*AJAX + JSON*/

    var xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        var user = JSON.parse(this.responseText);

        /*Mission complete*/
        
        document.getElementById("banner").innerHTML = "Name: " + user.name
                                                    + "<br>Surname: " + user.surname
                                                    + "<br>DNI: " + user.dni
                                                    + "<br>Email: " + user.email
                                                    + "<br>Country: " + user.country;
       
      }
    };

    /*POST info -> PHP */

    xmlhttp.open("POST", "main.php", true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("info="+info);
}