document.querySelector("#signup-submit").onclick = function(event){
    event.preventDefault();
    let name = document.querySelector("#signup-name").value;
    let pass = document.querySelector("#signup-pass").value;
    let email = document.querySelector("#signup-email").value;
    let birthday = document.querySelector("#signup-birthday").value;
    let sex = document.querySelectorAll(".sex");
    for(i = 0; i < sex.length; i++){
       if (sex[i].checked){
        sex = sex[i].value;
        break;
       }
   }
   let data = {
       "name" : name,
       "pass" : pass,
       "email" : email,
       "birthday" : birthday,
       "sex" : sex,
   }

   ajax("/core/signup.php", "post", signup, data)

   function signup(result){
       console.log(result);
       if(result == 2){
           M.toast({html: 'Fill textarea'});
       }
       else if(result == 1){
           M.toast({html: 'Success. Now you can login!'});
           closeModal();
       }
       else{
           M.toast({html: 'Fault. Try later'});

       }
   }
}

document.querySelector("#login-submit").onclick = function(event){
    event.preventDefault();
    let email = document.querySelector("#login-email").value;
    let pass = document.querySelector("#login-pass").value;

    let data = {   
        "email" : email,
        "pass" : pass,
   }

   ajax("/core/login.php", "post", login, data)

   function login(result){
       if(result == 2){
           alert("Check textarea");
       }
       else if(result == 0){
           alert("User not found");
       }
       else{
           console.log(result);
           result = JSON.parse(result);
           console.log(result);
           let d = new Date();
           d.setTime(d.getTime() + (10*60*1000));
           let expires = d.toUTCString();
           document.cookie = `email = ${result.email}; expires=${expires}; path=/`;
           location.href="cabinet.php";
       }
   }
}

