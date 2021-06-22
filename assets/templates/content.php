<main class="container">
    <article class="grid-container">
        <?php   
            $route = get_template_directory_uri();
            $sql =  $con->query("SELECT * FROM article");
            while ($articles = mysqli_fetch_array($sql)) {
                echo '<div id="'.$articles['id_article'].'" class="article">
                            <div class="info-article">
                                <h2>'.$articles['title'].'</h2>
                                <p>'.$articles['description'].'</p>
                                <div class="footer-info">
                                    <p>'.$articles['date'].'</p>
                                    <a href="'.$route.$articles['enlace'].'">Read more</a>
                                </div>
                            </div>
                            <div class="img-article">
                                <img src="'.$route.$articles['image'].'" alt="Image HotCoffee">
                            </div>
                        </div>';
            }
        ?>
    </article>
    <!-- Button Next Page -->
    <aside class="btn-aside">
        <a href="#" class="btn-next">Next Page <img
                src="<?php echo get_template_directory_uri(); ?>/assets/icons/next.svg" alt="Next Icon"></a>
    </aside>
    <!-- Contact Form -->
    <section class="contact">
        <div class="title">
            <h2>Contact</h2>
        </div>
        <div class="alerts">
            <div id="error" class="error">
                <p id="txtError"></p>
            </div>
            <div id="correct" class="correct">
                <h6 id="msjAlert">Se ha enviado correctamente tu mensaje.</h6>
            </div>
        </div>
        <form id="send-email" method="POST" class="form">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter you name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter you email">
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Leave your message"></textarea>
            <div class="btn-send">
                <button id="send" type="button">Send</button>
            </div>
        </form>
    </section>
</main>