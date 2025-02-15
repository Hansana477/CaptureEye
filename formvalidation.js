

function validateForm() {
    let pname = document.forms["packageForm"]["pname"].value;
    let description = document.forms["packageForm"]["description"].value;
    let offers = document.forms["packageForm"]["offers"].value;
    let price = document.forms["packageForm"]["price"].value;
    let errorMessage = "";

    if (pname == "") {
        errorMessage += "Package name must be filled out.\n";
    }

    if (description == "") {
        errorMessage += "Description must be filled out.\n";
    }

    if (offers == "") {
        errorMessage += "Offers must be filled out.\n";
    }

    if (price == "" || isNaN(price)) {
        errorMessage += "Price must be a valid number.\n";
    }

    if (errorMessage != "") {
        alert(errorMessage);
        return false;
    }

    return true;
}
