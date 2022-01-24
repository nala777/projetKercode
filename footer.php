    <footer>
        <div class="bandeau-bas container">
            <!-- -----------Logo Footer----------- -->
            <div id="logo-bas">
                <img src="images-judo/logo.png" alt="logo">
            </div>
            <!-- -----------------Menu Footer---------------- -->
            <nav>
                <ul>
                    <li><a class="list" href="index.php">Accueil</a></li>
                    <li><a class="list" href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- -------------Adresse------------------ -->
            <div id="info">
                <a href="tel:+33610203040">Telephone : 06 01 02 03 04</a><br>
                7 rue de la Libération<br>
                29900 CONCARNEAU
            </div>
    <!-- ------------------Reseaux-------------------- -->
            <div id="reseaux">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>

         <!---------------------------Copyrigth-------------------------  -->

        </div>
        <div id="copyright">
                <p>Copyright Kercode 2021 - <a href="#">Mentions légales</a></p>
            </div>
    </footer>
    
    </body>

    <script src="js/monScript.js"></script>
    <script src="https://unpkg.com/@supabase/supabase-js"></script>
    <script>
        
        const { createClient } = supabase
        supabase = createClient("https://lgiewrqnswnktoynybbv.supabase.co", "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJvbGUiOiJhbm9uIiwiaWF0IjoxNjQyOTgxMDM3LCJleHAiOjE5NTg1NTcwMzd9.4ZRZRV6xMZbFJcAcnAnZewemYK85pbm5ZiydYsv_yCU")

        const form = document.querySelector('#formu')
        form.addEventListener('submit', async (event) => {
            event.preventDefault()

            const formInputs = form.querySelectorAll ('input, textarea')
            let submission = {}

            formInputs.forEach(element => {
                const { value , name} = element
                if (value) {
                    submission[nom] = value
                }
            })

            console.log(submission)
        })
    </script>

    </html>