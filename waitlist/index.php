<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
$previous = $_SESSION['previous'] ?? [];
$success = $_SESSION['success'] ?? false;

// Clear session variables
unset($_SESSION['errors'], $_SESSION['previous'], $_SESSION['success']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savvet</title>

    <!-- css file -->
    <link rel="stylesheet" href="../output.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/images/Savvet_logo.png" type="image/x-icon">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Odor+Mean+Chey&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&family=Odor+Mean+Chey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oldenburg&display=swap" rel="stylesheet">

</head>

<body class="relative bg-center bg-cover scrollbar-hidden bg-primary3">
    <div class="absolute inset-0 bg-[url('../assets/images/Noise_&_Texture.svg')] bg-center bg-cover -z-30" id="formSection"></div>
    <section class="">
        <div class="relative">
            <!-- <div class="flex justify-center lg:mb-[120px] mb-[20px]">
            <img src="../assets/images/form_ellipse_lg.svg" alt="" class="hidden lg:block">            
            <img src="../assets/images/form_ellipse_md.svg" alt="" class="lg:hidden">            
        </div> -->
            <div class="flex flex-col items-center justify-center gap-[24px] lg:mt-[100px] mt-[56px]">
                <img src="../assets/images/savvet_logo.svg" alt="">
                <span class=" font-oldenBurg text-[16px] leading-[20px] text-primary1 inline-flex items-end md:items-center gap-2">
                    <span class="text-center">join the tribe <br class="md:hidden">everyone’s a Vettor! </span>
                    <img src="../assets/images/sparkles.svg" alt="" style="width: 16px">
                </span>
            </div>
            <div class="mx-auto my-[80px] md:my-[99px] md:w-[652px]">
                <form action="./submit_form.php" method="post">

                    <div class="mb-[28px] mx-3">

                        <div class="relative flex w-full border border-dashed border-inputBorder focus-within:border-inputFocus focus-within:border-solid rounded-[4px] transition <?= isset($previous['emailUsername']) && $previous['emailUsername'] != null ? 'border-inputFocus border-solid' : 'border-inputBorder ' ?>" id="emailDiv">
                            <input type="text" class="py-[11px] px-[10px] w-full bg-transparent font-oldenBurg placeholder:text-inputPlaceholder focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition <?= isset($previous['emailUsername']) && $previous['emailUsername'] != null ? 'bg-white' : 'bg-transparent' ?>" placeholder="example@email.com" id="emailUsername" name="emailUsername" value="<?= htmlspecialchars($previous['emailUsername'] ?? '') ?>">

                            <label class="absolute px-1 text-sm transition-all duration-200 opacity-0 top-11 text-inputFocus bg-primary3 left-3 font-oldenBurg">
                                email
                            </label>
                            <!-- <div class="relative w-72 sm:w-48">
                                <select class="bg-transparent appearance-none font-oldenBurg border-inputBorder text-inputPlaceholder focus:text-inputFocus focus:border-inputFocus focus:outline-none pl-[10px] pr-[30px] flex-grow-0 flex-shrink overflow-hidden h-12 w-full rounded-r-[4px]" id="emailSelect" name="emailDomain">
                                    <option value="" disabled selected class="">@email.com</option>
                                </select>                                
                                <span class="absolute right-[10px] top-1/2 transform -translate-y-1/2 pointer-events-none text-black">
                                    <img src="../assets/images/Savvet_ down-fill.svg" alt="">
                                </span>
                            </div> -->
                        </div>

                        <!-- Display errors if any -->
                        <?php if (!empty($errors['email'])): ?>
                            <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['email'] ?> </span>
                        <?php endif; ?>

                    </div>

                    <div class="mb-[28px] flex md:justify-between mx-3 space-x-5">
                        <div class="relative w-[55%]">
                            <input type="text" class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder placeholder:text-inputPlaceholder focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition <?= isset($previous['fullName']) && $previous['fullName'] != null ? 'bg-white border-inputFocus' : 'bg-transparent border-inputBorder' ?>" placeholder="Full name" name="fullName" value="<?= htmlspecialchars($previous['fullName'] ?? '') ?>">

                            <label class="absolute px-1 text-sm transition-all duration-200 opacity-0 top-11 text-inputFocus bg-primary3 left-3 font-oldenBurg">
                                full name
                            </label>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['fullName'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['fullName'] ?> </span>
                            <?php endif; ?>
                        </div>
                        <div class="relative w-[45%]">
                            <input type="text" class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder placeholder:text-inputPlaceholder focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition <?= isset($previous['occupation']) && $previous['occupation'] != null ? 'bg-white border-inputFocus' : 'bg-transparent border-inputBorder' ?>" placeholder="Occupation" name="occupation" value="<?= htmlspecialchars($previous['occupation'] ?? '') ?>">

                            <label class="absolute px-1 text-sm transition-all duration-200 opacity-0 top-11 text-inputFocus bg-primary3 left-3 font-oldenBurg">
                                occupation
                            </label>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['occupation'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['occupation'] ?> </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-[40px] flex md:justify-between space-x-5 mx-3">
                        <div class=" w-[45%]">
                            <div class="relative">
                                <select class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder text-inputPlaceholder appearance-none focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition" id="countrySelect" name="countryId">
                                    <option value="" disabled selected class="">Country</option>
                                </select>
                                <span class="absolute right-[10px] top-1/2 transform -translate-y-1/2 pointer-events-none text-black">
                                    <img src="../assets/images/Savvet_ down-fill.svg" alt="">
                                </span>
                            </div>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['countryId'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['countryId'] ?> </span>
                            <?php endif; ?>
                        </div>

                        <div class="w-[55%]">
                            <div class="relative">
                                <select class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder text-inputPlaceholder appearance-none focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition" id="stateSelect" name="stateId">
                                    <option value="" disabled selected class="">State</option>
                                </select>
                                <span class="absolute right-[10px] top-3 pointer-events-none text-black">
                                    <img src="../assets/images/Savvet_ down-fill.svg" alt="">
                                </span>
                            </div>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['stateId'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['stateId'] ?> </span>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="mb-[40px] flex md:justify-between space-x-5 md:gap-0 mx-3">
                        <div class="w-[55%]">
                            <div class="relative">
                                <select class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder text-inputPlaceholder appearance-none focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition <?= isset($previous['vettorType']) && $previous['vettorType'] != null ? 'bg-white border-inputFocus' : 'bg-transparent border-inputBorder' ?>" id="" name="vettorType">
                                <option value="" disabled selected>Select Type</option>
                                <option value="Everyday people" <?= isset($previous['vettorType']) && $previous['vettorType'] == "Everyday people" ? 'selected' : '' ?>>Everyday people</option>
                                <option value="Explorers" <?= isset($previous['vettorType']) && $previous['vettorType'] == "Explorers" ? 'selected' : '' ?>>Explorers</option>
                                <option value="Influencers" <?= isset($previous['vettorType']) && $previous['vettorType'] == "Influencers" ? 'selected' : '' ?>>Influencers</option>
                                </select>
                                <span class="absolute right-[10px] top-1/2 transform -translate-y-1/2 pointer-events-none text-black">
                                    <img src="../assets/images/Savvet_ down-fill.svg" alt="">
                                </span>
                            </div>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['vettorType'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['vettorType'] ?> </span>
                            <?php endif; ?>
                        </div>

                        <div class="w-[45%]">
                            <div class="relative">
                                <select class="w-full h-[43px] border-dashed border bg-transparent font-oldenBurg px-[10px] border-inputBorder text-inputPlaceholder appearance-none focus:text-inputFocus focus:border-inputFocus focus:outline-none focus-within:border-solid rounded-[4px] transition <?= isset($previous['age']) && $previous['age'] != null ? 'bg-white border-inputFocus' : 'bg-transparent border-inputBorder' ?>" id="" name="age">
                                    <option value="" disabled selected class="">Age</option>
                                    <option value="13-17 years" class="" <?= isset($previous['age']) && $previous['age'] == "13-17 years" ? 'selected' : '' ?>>13-17 years</option>
                                    <option value="18-25 years" class="" <?= isset($previous['age']) && $previous['age'] == "18-25 years" ? 'selected' : '' ?>>18-25 years</option>
                                    <option value="26-35 years" class="" <?= isset($previous['age']) && $previous['age'] == "26-35 years" ? 'selected' : '' ?>>26-35 years</option>
                                    <option value="36-45 years" class="" <?= isset($previous['age']) && $previous['age'] == "36-45 years" ? 'selected' : '' ?>>36-45 years</option>
                                    <option value="46-55 years" class="" <?= isset($previous['age']) && $previous['age'] == "46-55 years" ? 'selected' : '' ?>>46-55 years</option>
                                    <option value="56-65 years" class="" <?= isset($previous['age']) && $previous['age'] == "56-65 years" ? 'selected' : '' ?>>56-65 years</option>
                                    <option value="66-75+ years" class="" <?= isset($previous['age']) && $previous['age'] == "66-75+ years" ? 'selected' : '' ?>>66-75+ years</option>
                                </select>
                                <span class="absolute right-[10px] top-1/2 transform -translate-y-1/2 pointer-events-none text-black">
                                    <img src="../assets/images/Savvet_ down-fill.svg" alt="">
                                </span>
                            </div>
                            <!-- Display errors if any -->
                            <?php if (!empty($errors['age'])): ?>
                                <span class="text-[11px] md:text-base font-oldenBurg text-primary2"> <?= $errors['age'] ?> </span>
                            <?php endif; ?>
                        </div>

                    </div>

                    <div class="flex justify-center px-2 md:px-0">
                        <button type="submit"
                            class="md:w-[652px] h-[48px] w-full rounded-[20px] text-white font-oldenBurg text-[16px] flex justify-center items-center active:bg-hover1 gap-1 shadow-formButtonShadow bg-formSubmitBtn"
                            id="submitButton">
                            <img src="../assets/images/sparkles.svg" alt="" class="w-[16px]" id="joinedStar">
                            <span id="buttonText">
                                <?= $success ? 'Joined' : 'Join the waitlist' ?>
                            </span> 
                            <img src="../assets/images/sparkles.svg" alt="" class="w-[16px]">
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        let emailDiv = document.getElementById('emailDiv');
        let emailField = document.getElementById('emailUsername');
        let emailSelect = document.getElementById('emailSelect');
        let emailLabel = document.querySelectorAll('label')[0];
        let fullNameLabel = document.querySelectorAll('label')[1];
        let fullNameField = document.querySelectorAll('input')[1];
        let occupationLabel = document.querySelectorAll('label')[2];
        let occupationField = document.querySelectorAll('input')[2];
        let countrySelect = document.querySelectorAll('select')[0];
        let stateSelect = document.querySelectorAll('select')[1];
        let vettorSelect = document.querySelectorAll('select')[2];
        let ageSelect = document.querySelectorAll('select')[3];

        // console.log(occupationField);
        
        // Email username and domain eventlistener
        emailField.addEventListener('focusin', ()=>{
           emailLabel.style.opacity = 1; 
           emailLabel.classList.add('transform', '-translate-y-14');
           if (emailField.value.length > 0) {
                emailField.classList.add('bg-transparent');
                emailField.classList.remove('bg-white');
            }
        });
        
        emailField.addEventListener('focusout', ()=>{
           emailLabel.style.opacity = 0; 
           emailLabel.classList.remove('transform', '-translate-y-14');
           if (emailField.value.length > 0) {
                emailField.classList.add('bg-white');
                emailField.classList.remove('bg-transparent');
                emailDiv.classList.add('border-solid', 'border-inputFocus');
                emailDiv.classList.remove('border-dashed', 'border-inputBorder');
            }
            else{
                emailField.classList.add('bg-transparent');
                emailField.classList.remove('bg-white');                       
            }
            if (emailField.value.length <= 0 && emailDiv.classList.contains('border-solid', 'border-inputFocus')) {
                emailDiv.classList.add('border-dashed', 'border-inputBorder');
                emailDiv.classList.remove('border-solid', 'border-inputFocus');
            }
        });
        // emailSelect.addEventListener('blur', ()=>{
        //    emailLabel.style.opacity = 0; 
        //    emailLabel.classList.remove('transform', '-translate-y-14');
        // });

        
        // Full Name eventlistener
        fullNameField.addEventListener('focusin', ()=>{
           fullNameLabel.style.opacity = 1; 
           fullNameLabel.classList.add('transform', '-translate-y-14');
           if (fullNameField.value.length > 0) {
                fullNameField.classList.add('bg-transparent');
                fullNameField.classList.remove('bg-white');
            }
        });
        fullNameField.addEventListener('focusout', ()=>{
           fullNameLabel.style.opacity = 0; 
           fullNameLabel.classList.remove('transform', '-translate-y-14');
           if (fullNameField.value.length > 0) {
                fullNameField.classList.add('bg-white');
                fullNameField.classList.remove('bg-transparent');
        
                fullNameField.classList.add('border-solid', 'border-inputFocus');
                fullNameField.classList.remove('border-dashed', 'border-inputBorder');
            }
            else{
                fullNameField.classList.add('bg-transparent');
                fullNameField.classList.remove('bg-white');
            }
            if (fullNameField.value.length <= 0 && fullNameField.classList.contains('border-solid', 'border-inputFocus')) {
                fullNameField.classList.add('border-dashed', 'border-inputBorder');
                fullNameField.classList.remove('border-solid', 'border-inputFocus');
            }
        });

        
        // Occupation eventlistener
        occupationField.addEventListener('focusin', ()=>{
           occupationLabel.style.opacity = 1; 
           occupationLabel.classList.add('transform', '-translate-y-14');
           if (occupationField.value.length > 0) {
                occupationField.classList.add('bg-transparent');
                occupationField.classList.remove('bg-white');
            }
        });
        occupationField.addEventListener('focusout', ()=>{
           occupationLabel.style.opacity = 0; 
           occupationLabel.classList.remove('transform', '-translate-y-14');
           if (occupationField.value.length > 0) {
                occupationField.classList.add('bg-white');
                occupationField.classList.remove('bg-transparent');
        
                occupationField.classList.add('border-solid', 'border-inputFocus');
                occupationField.classList.remove('border-dashed', 'border-inputBorder');
            }
            else{
                occupationField.classList.add('bg-transparent');
                occupationField.classList.remove('bg-white');
            }
            if (occupationField.value.length <= 0 && occupationField.classList.contains('border-solid', 'border-inputFocus')) {
                occupationField.classList.add('border-dashed', 'border-inputBorder');
                occupationField.classList.remove('border-solid', 'border-inputFocus');
            }
        });

        countrySelect.addEventListener("change", function () {
            // Change country select styling
            this.classList.toggle("bg-white", this.value !== "");
            this.classList.add('border-solid', 'border-inputFocus', 'text-inputFocus');
            this.classList.remove('border-dashed', 'border-inputBorder', 'text-inputPlaceholder');

            // Reset state selection
            stateSelect.value = ""; // Reset state select to default

            // Get the newly selected state option (after reset)
            const selectedOption = stateSelect.selectedOptions[0];

            console.log(selectedOption);

            if (selectedOption && selectedOption.disabled) {
                stateSelect.classList.add('border-dashed', 'border-inputBorder', 'text-inputPlaceholder', 'bg-transparent');
                stateSelect.classList.remove('border-solid', 'border-inputFocus', 'text-inputFocus', 'bg-white');
            } else {
                stateSelect.classList.add('border-solid', 'border-inputFocus', 'text-inputFocus', 'bg-white');
                stateSelect.classList.remove('border-dashed', 'border-inputBorder', 'text-inputPlaceholder', 'bg-transparent');
            }
        });
        
        stateSelect.addEventListener("change", function () {
            this.classList.toggle("bg-white", this.value !== "");
            stateSelect.classList.add('border-solid', 'border-inputFocus', 'text-inputFocus');
            stateSelect.classList.remove('border-dashed', 'border-inputBorder', 'text-inputPlaceholder');
        });
        vettorSelect.addEventListener("change", function () {
            this.classList.toggle("bg-white", this.value !== "");
            vettorSelect.classList.add('border-solid', 'border-inputFocus', 'text-inputFocus');
            vettorSelect.classList.remove('border-dashed', 'border-inputBorder', 'text-inputPlaceholder');
        });
        ageSelect.addEventListener("change", function () {
            this.classList.toggle("bg-white", this.value !== "");
            ageSelect.classList.add('border-solid', 'border-inputFocus', 'text-inputFocus');
            ageSelect.classList.remove('border-dashed', 'border-inputBorder', 'text-inputPlaceholder');
        });
    </script>
    <script src="../script_form.js"></script>
</body>

</html>