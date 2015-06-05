/**
 * Created by abhinavverma on 5/16/15...
 */

function validateDescription(field){
        if (field =="") return "no description was given.\n";
    return ""
}

function validateName(field) {
     if (field == "") {
        return "no name was given.\n";
    }
    if (/[^a-zA-Z]/.test(field)) {
        return "only alphabets are allowed"
    }
    return ""
}

function validateEmail(field){
    if (field == "") return "No email entered.\n";
        else if (!((field.indexOf(".")>0) &&  (field.indexOf("@")>0)|| /[^a-zA-Z0-9.@_-]/.test(field)))
        return "The email address is Invalid"
    return ""
}

function validatePassword(field){
    if (field =="") return "No password entered!!";
    else if (field.length < 6)
             return "Passwords must be at least 6 characters long. \n";
    else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) || !/[0-9]/.test(field))
             return "Passwords require a-z, A-Z and 0-9 \n";
    return ""
}

