<?php $title = "FORMATIONS - MWINDA243 TECH"; ?>

<?php ob_start(); ?>

<?php $current_nav = "formation"; ?>

<?php include(__DIR__ . '../../_header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../">Accueil</a></li>
        </ol>
        <h2>Formation</h2>
      </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Rubrique Blog ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4 entries">
            <article class="entry">

              <div class="entry-img">
                <img src="../assets/img/formation/flutter.png" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../formation/flutter.php">Développement Mobile-Flutter</a>
              </h2>

              <div class="entry-content">
                <p>
                  Deviens développeur mobile et apprends à concevoir et à programmer des applications mobile, de l’analyse du besoin à la mise en ligne, en passant par l’interface et la base de données.
                </p>
                <div class="read-more d-flex align-items-center">
                  <a href="../formation/flutter.php">Plus d'informations</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            
          </div><!-- End blog entries list -->

          <div class="col-lg-4 entries">
            <article class="entry">

              <div class="entry-img">
                <img src="../assets/img/formation/web-dev.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">Développement Web</a>
              </h2>

              <div class="entry-content">
                <p>
                  Deviens développeur web et apprends à concevoir et à programmer des applications web, de l’analyse du besoin à la mise en ligne, en passant par l’interface et la base de données.
                </p>
                <div class="read-more d-flex align-items-center">
                  <a target="_bank" href="https://bit.ly/42hJLS2">Plus d'informations</a>
                </div>
              </div>

            </article><!-- End blog entry -->
            
          </div><!-- End blog entries list -->

          <div class="col-lg-4 entries">
            <article class="entry">

              <div class="entry-img">
                <img src="../assets/img/formation/bd.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">Administration Base des Données</a>
              </h2>

              <div class="entry-content">
                <p>
                  L'administrateur de base de données est une personne responsable du bon fonctionnement de serveurs de bases de données, essentiellement relationnelles ou décisionnelles, tant au niveau de la conception des bases, des tests de validation, de la coordination des intervenants, de l'exploitation, de la protection et du contrôle d'utilisation.
                </p>
                <div class="read-more d-flex align-items-center">
                  <a target="_bank" href="https://bit.ly/42hJLS2">Plus d'informations</a>
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