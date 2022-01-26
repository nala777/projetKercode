const { createClient } = supabase;
supabase = createClient("https://lgiewrqnswnktoynybbv.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyOTgxMDM3LCJleHAiOjE5NTg1NTcwMzd9.4ZRZRV6xMZbFJcAcnAnZewemYK85pbm5ZiydYsv_yCU");

const form = document.querySelector('#formu');
console.log(form);
form.addEventListener('submit', async (event) => {
    event.preventDefault()

    const formInputs = form.querySelectorAll ('input, textarea')
    let submision = {}

    formInputs.forEach(element => {
        const { value , name} = element
        if (value) {
            submision[name] = value
        }
    })

    

    const { error, data } = await supabase.from('formulaire').insert([submision]);

    if(error){
        alert('Il y a une Erreur , essayer à nouveau');
    }else{
        alert('Merci de nous avoir contacté');
    }

    formInputs.forEach(element => element.value= '');

    
})