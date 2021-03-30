
function ShowHideNZDiv() {
    var chkNZ = document.getElementById("chkNZ");
    var dvNZActivities = document.getElementById("dvNZActivities");
    dvNZActivities.style.display = chkNZ.checked ? "block" : "none";
    dvMalActivities.style.display = "none";
    dvITActivities.style.display = "none";
    dvCanActivities.style.display = "none";
    //Extra functionality to set Destination for form submission
    var selectedDestination = "New Zealand"
    document.getElementbyID("selectedDestination").value = selectedDestination;
}1

function ShowHideMalDiv() {
    var chkMal = document.getElementById("chkMal");
    var dvMalActivities = document.getElementById("dvMalActivities");
    dvMalActivities.style.display = chkMal.checked ? "block" : "none";
    dvNZActivities.style.display = "none";
    dvITActivities.style.display = "none";
    dvCanActivities.style.display = "none";
    //Extra functionality to set Destination for form submission
    var selectedDestination = "Maldives"
    document.getElementbyID("selectedDestination").value = selectedDestination;
}

function ShowHideITDiv() {
    var chkIT = document.getElementById("chkIT");
    var dvITActivities = document.getElementById("dvITActivities");
    dvITActivities.style.display = chkIT.checked ? "block" : "none";
    dvNZActivities.style.display = "none";
    dvMalActivities.style.display = "none";
    dvCanActivities.style.display = "none";
    //Extra functionality to set Destination for form submission
    var selectedDestination = "Italy"
    document.getElementbyID("selectedDestination").value = selectedDestination;
}

function ShowHideCanDiv() {
    var chkCan = document.getElementById("chkCan");
    var dvCanActivities = document.getElementById("dvCanActivities");
    dvCanActivities.style.display = chkCan.checked ? "block" : "none";
    dvNZActivities.style.display = "none";
    dvMalActivities.style.display = "none";
    dvITActivities.style.display = "none";
    //Extra functionality to set Destination for form submission
    var selectedDestination = "Mexico"
    document.getElementbyID("selectedDestination").value = selectedDestination;
}
