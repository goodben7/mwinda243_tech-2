<?php $title = "Bureautique"; ?>

<?php ob_start(); ?>

<?php $current_nav = "formation"; ?>

<?php include(__DIR__ . '../../_header.php') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="../">Accueil</a></li>
          <li><a href="../formation">Formation</a></li>
        </ol>
        <h2>Bureautique</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formation Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/formation/bureautique.jpeg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../formation/bureautique.php">Bureautique</a>
              </h2>

              <div class="entry-content">
                <p>
                  La bureautique est un ensemble des techniques informatiques  qui facilitent le travail pour toutes les personnes travaillant dans un environnement de bureau. Elle implique la maîtrise de divers outils logiciels tels que Microsoft Word, Excel, PowerPoint, Outlook et bien d'autres.
                </p>
                <p>
                  Tout au long de notre formation, vous allez apprendre et maitriser 3 logiciels faisant parti de la famille Microsoft Office 
                </p>

                <div class="read-more d-flex align-items-center">
                  <a target="_bank" href="https://bit.ly/42hJLS2">Inscrivez-vous</a>
                </div>

                <br>

                <h1> <a href="">Programme de la formation</a> </h1>

                <h2> Microsoft Word </h2>

                <p>Microsoft Word est logiciel du bureau spécialisé dans le traitement de texte.</p>

                <p>1. PRESENTATION DU LOGICIEL </p>
                <p>2. NOTIONS DE BASE SUR LA SAISIE </p>
                <p>3. LES TABLEAUX </p>
                <p>4. MISE EN FORME DU TEXTE </p>
                <p>5. REVISION DU TEXTE (CORRECTION) </p>
                <p>6. INSERTION, REFERENCE, IMAGE ET FORME </p>
                <p>7. GENERER UN DOCUMENT EN FORMAT  PDF </p>
                <p>8. IMPRESSION D’UN DOCUMENT </p>

                <h2> Microsoft Excel  </h2>

                <p>Microsoft Excel est tableur (une feuille de calcul) qui permet d’effectuer différents calculs.</p>

                <p>1. PRESENTATION DU LOGICIEL </p>
                <p>2. MANIPULATION DES CELLULES (SELECTION, AJOUT, SUPPRESSION) </p>
                <p>3. INSERTION, MODIFICATION, SUPPRESSION  DES DONNEES </p>
                <p>4. LES GRAPHIQUES </p>
                <p>5. TRI DES DONNEES </p>
                <p>6. ANALYSE DES DONNEES </p>

                <h2> Microsoft Powerpoint </h2>

                <p>1. PRESENTATION DU LOGICIEL </p>
                <p>2. MANIPULATION DES DIAPOSITIVES </p>
                <p>3. INSERTIONS DES IMAGES </p>
                <p>4. MISE EN FORME </p>
                <p>5. ANIMATION, REVISION, AFFICHAGE </p>

                <h1> <a href=""> Prérequis </a> </h1>

                <h2> Aucun </h2>
              </div>
              

              <div class="entry-footer">
                <i class="bi bi-person"></i>
                <ul class="cats">
                  <li>Mentorat et suivi personnel</a></li>
                </ul>
              </div>
            </article><!-- End blog entry -->

            <div class="blog-author d-flex align-items-center">
              <img src="../assets/img/blog/logo.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4>Equique MWINDA<span style="color : #FFA500; font-family: sans-serif;">243</span> TECH</h4>
              </div>
            </div><!-- End blog author bio -->
          </div>
        </div><!-- End blog entries list -->

        </div>
      </div>
    </section><!-- End Blog Single Section --> 
  </main><!-- End #main -->

<?php include(__DIR__ . '../../_footer.php') ?>

<?php $content = ob_get_clean(); ?>

<?php include(__DIR__ . '../../layout.php') ?>

