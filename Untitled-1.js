document.querySelector("form").addEventListener("submit", function(e) {
    let errors = [];
    const name = document.querySelector("[name='name']").value.trim();
    const email = document.querySelector("[name='email']").value.trim();
    
    if (name === "") errors.push("Please enter your name to complete the luxury experience.");
    if (!email.includes("@")) errors.push("A valid email is required for order tracking.");
    
    if (errors.length > 0) {
        e.preventDefault();
        alert("Validation Errors:\n\n" + errors.join("\n"));
    }
});