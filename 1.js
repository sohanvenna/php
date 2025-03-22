function checkVisa() {
    let country = document.getElementById("country").value;
    let visaMessage = document.getElementById("visaMessage");

    switch (country) {
        case "USA":
            visaMessage.textContent = "Visa required for most applicants.";
            visaMessage.style.color = "black";
            break;
        case "Canada":
            visaMessage.textContent = "Visa required unless you have an eTA.";
            visaMessage.style.color = "black";
            break;
        case "India":
            visaMessage.textContent = "Visa required before travel.";
            visaMessage.style.color = "black";
            break;
        case "UK":
            visaMessage.textContent = "Visa depends on the duration of stay.";
            visaMessage.style.color = "black";
            break;
        case "Australia":
            visaMessage.textContent = "eVisa available for eligible travelers.";
            visaMessage.style.color = "black";
            break;
        default:
            visaMessage.textContent = "Please select a country.";
            visaMessage.style.color = "red";
    }
}

function validateForm() {
    let passport = document.getElementById("passport").value;
    let applyCountry = document.getElementById("applyCountry").value;
    let formMessage = document.getElementById("formMessage");

    if (passport === "" || applyCountry === "") {
        formMessage.textContent = "All fields are required!";
        formMessage.style.color = "red";
        return false;
    }
    
    if (passport.length < 8 || passport.length > 10) {
        formMessage.textContent = "Invalid passport number!";
        formMessage.style.color = "red";
        return false;
    }

    formMessage.textContent = "Visa application submitted successfully!";
    formMessage.style.color = "green";
    return true;
}
