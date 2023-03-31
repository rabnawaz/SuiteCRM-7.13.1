
function getUsers() {
    $.ajax({
        type: "POST",
        url: 'index.php?module=Accounts&action=getUsers&to_pdf=1&gg=5',
        data: { 
            user_id: '92000'
        },
       // data: data,
        success: function (data) {
            //console.log(data);
            JSON.stringify(data);
            if (data) {
                console.log("this is user response data");
                //alert("L'utilisateur a déjà d'autres rendez-vous de prévus sur cette plage horaire!");
                //on ne peut pas sauvegarder
                return true;
            }
            // if (data === "true") {
            //     console.log('ok');
            //     //return true;
            //     return check_form('EditView');
            // }
        },
        error: function () {
            //console.log(data);
            console.log("SQL Failure");
        }
    });
}