// Globales


// Thibaud


// Arnaud


// Maxime
// Attention bien remplacer l'id ' customDarkSwitch part l'id du switch final 
const switchThemeBtn = document.getElementById('customDarkSwitch');
    let toggleTheme = 0;
    

    switchThemeBtn.addEventListener('click', () => {

        if(toggleTheme === 0) {

            document.documentElement.style.setProperty('--write', '#262626');
            document.documentElement.style.setProperty('--background', '#f1f1f1');
            toggleTheme++;

        } else {

            document.documentElement.style.setProperty('--write', '#f1f1f1');
            document.documentElement.style.setProperty('--background', '#262626');
            toggleTheme--;

        }


    })