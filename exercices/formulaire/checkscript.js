$(function (){

    /*
    /jQuery.validator.setDefaults({
        debug: true,
        success: "valid"
    });*/

    $("#inscription_form").validate(
        {
            rules: {
                nom: {
                    required: true,
                    minlength: 2
                },
                prenom: {
                    required: true,
                    minlength: 2
                },
                email:{
                    required:true,
                    email: true
                },
                categorie:{
                    required: true
                },
                affiliation:{
                    required:true
                },
                cmb_club:{
                    required:true
                },
                txt_affiliation:{
                    required:true
                },
                nb_eleves:{
                    required:true,
                    min: 1,
                    max: 14
                },
                cache:{
                    required: false
                },
                chk_conditions:{
                    required: true
                }
            },
            messages: {
              nom:{
                  required: "Veuillez indiquer votre nom",
                  minlength: "Votre nom doit être d'au moins 2 caractères de long"
              },
                prenom:{
                    required: "Veuillez indiquer votre prenom",
                    minlength: "Votre prenom doit être d'au moins 2 caractères de long"
                },
                email:{
                    required:"Veuillez insérer une adresse E-mail",
                    email: "Veuillez insérer une adresse E-mail valide"
                },
                categorie:{
                  required: "Veuillez choisir une catégorie"
                },
                affiliation:{
                  required:"Veuillez choisir une affiliation"
                },
                cmb_club:{
                    required:"Veuillez choisir votre club / école"
                },
                txt_affiliation:{
                  required:"Veuillez indiquer le nom de votre club / école"
                },
                chk_conditions:{
                    required: "Veuillez accepeter nos conditions générales"
                },
                nb_eleves: {
                    required: "Veuillez indiquer le nombre d'élèves",
                    min: "Le nombre d'éléves doit se situer entre 1 et 14",
                    max: "Le nombre d'éléves doit se situer entre 1 et 14",
                }

            }
        }
    );

});