<?php $title = "Lancement officiel des Journées Informatiques « seizième édition »"; ?>

<?php ob_start(); ?>

<?php $current_nav = "blog"; ?>


<?php include(__DIR__ . '../../_header.php') ?>

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../">Accueil</a></li>
          <li><a href="../blog">Blog</a></li>
        </ol>
        <h2>Lancement officiel des Journées Informatiques « seizième édition »</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/blog/ji-4.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../blog/journeesinformatiques16.php">Lancement officiel des Journées Informatiques « seizième édition »</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> 
                  <a href="../blog/journeesinformatiques16.php">Rédaction MWINDA243 TECH</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> 
                  <a href="../blog/journeesinformatiques16.php"><time datetime="2020-01-01">15 Mai 2023</time></a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  Thème : Innovation dans l'industrie 4.0, un pivot stratégique pour un développement durable de la république démocratique du Congo.
                </p>
                <p>
                  Nous avons eu l'opportunité de participer à une conférence très intéressante sur le thème de I'innovation dans l'industrie 4.0, un pivot stratégique pour un développement durable de la république démocratique du Congo. À l'occasion du lancement officiel du seizième édition des journées informatiques, Notre partenaire privilégié.
                </p>

                <img src="../assets/img/blog/ji-3.jpg" class="img-fluid" alt="">

                <br>
                <br>

                <p>
                  Les intervenants ont partagé leurs expériences et leurs visions sur les enjeux actuels de l'entreprise face aux nouvelles technologies.
                </p>

                <img src="../assets/img/blog/ji-1.jpg" class="img-fluid" alt="">

                <br>
                <br>

                <p>
                  Cette conférence a été une source d'inspiration pour repenser notre vision de l'innovation et de l'industrie 4.0. Les échanges avec les intervenants et les autres participants ont permis de partager des idées et des bonnes pratiques pour relever les défis de l'entreprise du futur.
                </p>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="../assets/img/blog/logo.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Rédaction MWINDA<span style="color : #FFA500; font-family: sans-serif;">243</span> TECH</h4>
              </div>
            </div><!-- End blog author bio -->

          </div><!-- End blog entries list -->
        </div>

      </div>
    </section><!-- End Blog Single Section -->
</main>
<!-- End #main -->

<?php include(__DIR__ . '../../_footer.php') ?>

<?php $content = ob_get_clean(); ?>

<?php include(__DIR__ . '../../layout.php') ?>
