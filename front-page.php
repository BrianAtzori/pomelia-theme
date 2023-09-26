<?php
get_header()
    ?>
<!-- Nav -->
<nav id="nav">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li>
            <a href="#">Dropdown</a>
            <ul>
                <li><a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Magna phasellus</a></li>
                <li><a href="#">Etiam dolore nisl</a></li>
                <li>
                    <a href="#">And a submenu &hellip;</a>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor</a></li>
                        <li><a href="#">Phasellus consequat</a></li>
                        <li><a href="#">Magna phasellus</a></li>
                        <li><a href="#">Etiam dolore nisl</a></li>
                    </ul>
                </li>
                <li><a href="#">Veroeros feugiat</a></li>
            </ul>
        </li>
        <li><a href="left-sidebar.html">Left Sidebar</a></li>
        <li><a href="right-sidebar.html">Right Sidebar</a></li>
        <li><a href="no-sidebar.html">No Sidebar</a></li>
    </ul>
</nav>

</div>

<!-- Banner -->
<!-- <section id="banner">
    <header>
        <h2>Hi. You're looking at <strong>Helios</strong>.</h2>
        <p>
            A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
            Built with HTML5/CSS3 and released under the <a href="http://html5up.net/license">CCA</a> license.
        </p>
    </header>
</section> -->

<!-- Main -->
<div class="wrapper style2">

    <article id="main" class="container special">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
    </article>

</div>

<!-- Carousel -->
<section class="carousel">
    <div class="reel">

        <article>
            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Pulvinar sagittis congue</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Fermentum sagittis proin</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Varius magnis sollicitudin</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Pulvinar sagittis congue</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Fermentum sagittis proin</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

        <article>
            <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
            <header>
                <h3><a href="#">Varius magnis sollicitudin</a></h3>
            </header>
            <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
        </article>

    </div>
</section>

<!-- Features -->
<div class="wrapper style1">

    <section id="features" class="container special">
        <header>
            <h2>Morbi ullamcorper et varius leo lacus</h2>
            <p>Ipsum volutpat consectetur orci metus consequat imperdiet duis integer semper magna.</p>
        </header>
        <div class="row">
            <article class="col-4 col-12-mobile special">
                <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Gravida aliquam penatibus</a></h3>
                </header>
                <p>
                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                    interdum.
                </p>
            </article>
            <article class="col-4 col-12-mobile special">
                <a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Sed quis rhoncus placerat</a></h3>
                </header>
                <p>
                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                    interdum.
                </p>
            </article>
            <article class="col-4 col-12-mobile special">
                <a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
                <header>
                    <h3><a href="#">Magna laoreet et aliquam</a></h3>
                </header>
                <p>
                    Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor etiam
                    porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat integer
                    interdum.
                </p>
            </article>
        </div>
    </section>

</div>

<?php
get_footer();
?>