document.getElementById("volunteerForm").addEventListener("submit", function(event) {
    event.preventDefault();

   
    const role = document.getElementById("role").value;
    const availability = Array.from(document.getElementById("availability").selectedOptions).map(option => option.value);
    const skills = document.getElementById("skills").value;
    const motivation = document.getElementById("motivation").value;
    const emergency = document.getElementById("emergency").value;
    const emergencyPhone = document.getElementById("emergencyPhone").value;

    if ( !role || !emergency || !emergencyPhone) {
        alert("Please fill in all required fields.");
        return;
    }

    console.log("Volunteer Details:", { role, availability, skills, motivation, emergency, emergencyPhone });
    
    alert("Thank you for registering as a volunteer!");
    this.reset();
});
