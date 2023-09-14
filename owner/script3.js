const paymentForm = document.getElementById("paymentForm");
        const successMessage = document.getElementById("successMessage");
        const paymentMethod = document.getElementById("paymentMethod");
        const cardDetails = document.getElementById("cardDetails");

        paymentMethod.addEventListener("change", function () {
            if (paymentMethod.value === "credit" || paymentMethod.value === "debit") {
                cardDetails.style.display = "block";
            } else {
                cardDetails.style.display = "none";
            }
        });

        paymentForm.addEventListener("submit", function (event) {
            event.preventDefault();

            // Simulate a successful payment (for demonstration purposes)
            // In a real application, you would perform actual payment processing here.

            // Display the success message
            successMessage.style.display = "block";

            // Hide the form
            paymentForm.style.display = "none";
        });