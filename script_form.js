// AJAX to fetch email, country and state
document.addEventListener('DOMContentLoaded', function() {
    // Fetch emails
    fetch('./fetches/fetch_emails.php')
        .then(response => response.json())
        .then(data => {
            let emailSelect = document.getElementById('emailSelect');
            let emailUsername = document.getElementById('emailUsername').value;
            data.forEach(email => {
                let option = document.createElement('option');
                option.value = emailUsername + email.domain;
                option.textContent = email.domain;
                emailSelect.appendChild(option);
            });
        });
  
    // Fetch countries
    fetch('./fetches/fetch_countries.php')
        .then(response => response.json())
        .then(data => {
            let countrySelect = document.getElementById('countrySelect');
            let previousCountryId = "<?= isset($previous['countryId']) ? $previous['countryId'] : '' ?>"; // Get previous country ID from PHP
            data.forEach(country => {
                let option = document.createElement('option');
                option.value = country.id;
                option.textContent = country.name;
                // Check if this country was previously selected
                if (previousCountryId && previousCountryId == country.id) {
                    option.selected = true;
                }
                countrySelect.appendChild(option);
            });
        });
  
    // Fetch states when a country is selected
    document.getElementById('countrySelect').addEventListener('change', function() {
        let countryId = this.value;
        fetch(`./fetches/fetch_states.php?country_id=${countryId}`)
        .then(response => response.json())
        .then(data => {
            let stateSelect = document.getElementById('stateSelect');
            stateSelect.innerHTML = '<option value="" disabled selected>State</option>'; // Reset states
            let previousStateId = "<?= isset($previous['stateId']) ? $previous['stateId'] : '' ?>"; // Get previous state ID from PHP
            data.forEach(state => {
                let option = document.createElement('option');
                option.value = state.id;
                option.textContent = state.name;
                // Check if this state was previously selected
                if (previousStateId && previousStateId == state.id) {
                    option.selected = true;
                }
                stateSelect.appendChild(option);
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    let buttonText = document.getElementById('buttonText');
    let joinedStar = document.getElementById('joinedStar');
    let submitButton = document.getElementById('submitButton');

    if (buttonText.innerText == 'Joined') {
        joinedStar.style.display = 'block';
        submitButton.disabled = true;
        submitButton.classList.remove('shadow-formButtonShadow', 'bg-formSubmitBtn');
        submitButton.classList.add('shadow-formSubmittedShadow', 'bg-primary2');

        // Reload the page after 3 seconds
        setTimeout(function() {
            location.reload();
        }, 5000);
    } else{
        joinedStar.style.display = 'none';
        submitButton.disabled = false;
        submitButton.classList.add('shadow-formButtonShadow', 'bg-formSubmitBtn');
        submitButton.classList.remove('shadow-formSubmittedShadow', 'bg-primary2');
    }
    
});



