const container = document.querySelector('.container');
const pwShowHide = document.querySelectorAll('.showHidePw');
const pwFields = document.querySelectorAll('.password');
const signUp = document.querySelector('.Signup-link');
const loginUp = document.querySelector('.Login-link');

// js code for show and hide the password and change icon when clicked

    pwShowHide.forEach(eyeIcon => {
        eyeIcon.addEventListener('click', () => {
            pwFields.forEach(pwFields => {
                if(pwFields.type === 'password') {
                    pwFields.type = 'text';
                    
                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye-slash", "uil-eye")

                    })
                }else{
                    pwFields.type = 'password';
                    pwShowHide.forEach(icon => {
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })  
                }
            })
        })   
    })