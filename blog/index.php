<?php $title = "Blog - MWINDA243 TECH"; ?>

<?php ob_start(); ?>

<?php $current_nav = "blog"; ?>


<?php include(__DIR__ . '../../_header.php') ?>

<!-- Fin de l'En-tête -->

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="../">Accueil</a></li>
      </ol>
      <h2>Blog</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Rubrique Blog ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-4 entries">
          <article class="entry">
            <div class="entry-img">
              <img src="../assets/img/blog/lesmetiersdelinformatique.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="../blog/decouvrezlesmetiersdelinformatique.php"> Découvrez les métiers de l’informatique </a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                  <a href="../blog/decouvrezlesmetiersdelinformatique.php"> Rédaction MWINDA243 TECH </a>
                </li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                  <a href="../blog/Découvrez les métiers de l’informatique.php"><time datetime="2020-01-01">27 Septembre 2023</time></a>
                </li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                L'informatique est un domaine en constante évolution qui offre de nombreuses opportunités de 
                carrière passionnantes. Dans notre société de plus en plus connectée, l'informatique occupe 
                une place centrale et offre une multitude d'opportunités de carrière enrichissantes.
              </p>
              <div class="read-more">
                <a href="../blog/decouvrezlesmetiersdelinformatique.php">Lire la suite</a>
              </div>
            </div>
          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4 entries">
          <article class="entry">
            <div class="entry-img">
              <img src="../assets/img/blog/ji-4.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="../blog/journeesinformatiques16.php">Lancement officiel des Journées Informatiques « seizième édition »</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                  <a href="../blog/journeesinformatiques16.php">Rédaction MWINDA243 TECH</a>
                </li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                  <a href="../blog/journeesinformatiques16.php"><time datetime="2020-01-01">15 Mai 2023</time></a>
                </li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Innovation dans l'industrie 4.0, un pivot stratégique pour un développement durable de la république démocratique du Congo.
              </p>
              <div class="read-more">
                <a href="../blog/journeesinformatiques16.php">Lire la suite</a>
              </div>
            </div>
          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

        <div class="col-lg-4 entries">
          <article class="entry">

            <div class="entry-img">
              <img src="../assets/img/blog/mwinda243_tech-1.PNG" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="../blog/mwinda243_tech.php">Présentation de MWINDA<span style="color : #FFA500; font-family: sans-serif;">243</span> TECH</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i>
                  <a href="../blog/mwinda243_tech.php">Rédaction MWINDA243 TECH</a>
                </li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                  <a href="../blog/mwinda243_tech.php"><time datetime="2020-01-01">20 Janvier 2023</time></a>
                </li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Propose des solutions informatiques en vue d'automatiser et de rendre plus simple les quotidiens des entreprises et particuliers.
              </p>
              <div class="read-more">
                <a href="../blog/mwinda243_tech.php">Lire la suite</a>
              </div>
            </div>
          </article><!-- End blog entry -->

        </div><!-- End blog entries list -->

      </div>

    </div>
  </section>
  <!-- Fin de la section du blog -->

</main>
<!-- Fin de #main -->



<?php include(__DIR__ . '../../_footer.php') ?>

<?php $content = ob_get_clean(); ?>

<?php include(__DIR__ . '../../layout.php') ?>
