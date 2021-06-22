<main class="container">
    <article class="grid-container">
        <div class="article">
            <div class="info-article">
                <h2>long established</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="footer-info">
                    <p>May 20th 2020</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/article.php">Read more</a>
                </div>
            </div>
            <div class="img-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.png" alt="Image HotCoffee">
            </div>
        </div>
        <div class="article">
            <div class="img-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image2.png" alt="Image HotCoffee">
            </div>
            <div class="info-article">
                <h2>long established</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="footer-info">
                    <p>May 20th 2020</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/article.php">Read more</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="img-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image3.png" alt="Image HotCoffee">
            </div>
            <div class="info-article">
                <h2>long established</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="footer-info">
                    <p>May 20th 2020</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/article.php">Read more</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="img-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image4.png" alt="Image HotCoffee">
            </div>
            <div class="info-article">
                <h2>long established</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that....</p>
                <div class="footer-info">
                    <p>May 20th 2020</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/article.php">Read more</a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="info-article">
                <h2>What is Lorem Ipsum?</h2>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page
                    when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution...</p>
                <div class="footer-info">
                    <p>May 20</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/article.php">Read more</a>
                </div>
            </div>
            <div class="img-article">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image5.png" alt="Image HotCoffee">
            </div>
        </div>
    </article>
    <aside class="btn-aside">
        <a href="#" class="btn-next">Next Page <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/next.svg" alt="Next Icon"></a>
    </aside>
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