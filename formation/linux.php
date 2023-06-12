<?php $title = "Linux pour débutants"; ?>

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
        <h2>Linux pour débutants</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Formation Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">

              <div class="entry-img">
                <img src="../assets/img/formation/linux.webp" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="../formation/linux.php">Développement Mobile-Flutter</a>
              </h2>

              <div class="entry-content">
                <p>
                  Linux est un système d'exploitation fiable et reconnu par les principaux acteurs du marché. Cette formation d'administration Linux vous apportera les connaissances indispensables pour installer et administrer Linux au quotidien quelle que soit la distribution que vous utilisez (Redhat, Debian, Suse, etc.).
                </p>

                <div class="read-more d-flex align-items-center">
                  <a target="_bank" href="https://bit.ly/42hJLS2">Inscrivez-vous</a>
                </div>

                <br>

                <h1> <a href="">Programme de la formation</a> </h1>

                <h2> Module 1 : Comprendre les concepts de Linux </h2>

                <p>1. C’EST QUOI LINUX ?  </p>
                <p>2. UNIX VS LINUX  </p>
                <p>3. LINUX DISTRIBUTIONS  </p>
                <p>4. LINUX VS WINDOWS </p>

                <h2> Module 2 : Téléchargement, installation et configuration </h2>

                <p>1. C’EST QUOI VIRTUALBOX ?  </p>
                <p>2. TELECHARGEMENT ET INSTALLATION D’ORACLE VIRTUALBOX </p>
                <p>3. CREATION D’UNE MACHINE VIRTUELLE  </p>
                <p>4. INSTALLATION D’UBUNTU ET DEBIAN SUR VIRTUALBOX </p>

                <h2> Module 3 : Système de fichiers </h2>

                <p>1. INTRODUCTION AU SYSTEME DE FICHIERS LINUX  </p>
                <p>2. COMMANDES DE NAVIGATION DU SYSTEME DE FICHIERS (CD, LS ET PWD) </p>
                <p>3. TYPES DE FICHIERS LINUX </p>
                <p>4. C’EST QUOI LE ROOT?  </p>
                <p>5. CHANGER DE MOT DE PASSE </p>
                <p>6. CHEMIN ABSOLU ET CHEMIN RELATIF  </p>
                <p>7. CREER DES FICHIERS ET REPERTOIRES (TOUCH, CP, VI, MKDIR) </p>
                <p>8. COPIER DES REPERTOIRES  </p>
                <p>9. TROUVER DES FICHIERS ET REPERTOIRES (FIND, LOCATE) </p>

                <h2> Module 4 : Les fondamentaux de Linux </h2>

                <p>1. SYNTAXE D’UNE COMMANDE LINUX </p>
                <p>2. PERMISSIONS SUR LES FICHIERS ET REPERTOIRES (CHMOD) </p>
                <p>3. USAGE DU MODE NUMERIQUE POUR LES PERMISSIONS SUR LES FICHIERS </p>
                <p>4. COMMANDES DE POSSESSION SUR LES FICHIERS (CHOWN, CHGRP) </p>
                <p>5. REDIRECTIONS D’ENTREE ET SORTIE (>, >> , <, STDOUT ET STDERR) </p>
                <p>6. COMMANDES DE MAINTENANCE DE FICHIER (CP, RM, MV, MKDIR, RMDIR) </p>
                <p>7. COMMANDES D’AFFICHAGE DE FICHIER (CAT, LESS, MORE, HEAD, TAIL) </p>

                <h2> Bonus </h2>
                <p>1. GESTION DES PACKAGES </p>
                <p>2. QUELQUES COMMANDES DE CONFIGURATION RESEAU </p>

                <h1> <a href=""> Prérequis </a> </h1>

                <h2> 
                  La formation s’adresse particulièrement aux débutants désireux d’être initiés au monde du Linux, et aucune expérience antérieure n’est exigée. 
                </h2> <br>
                <h2> Un ordinateur avec au moins 4G de RAM. </h2> <br>
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

