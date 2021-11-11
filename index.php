<?php
// session_start();
require_once('config/loaderServer.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= constant("PT_TITLE0"); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="screen" href="styles/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/server.css">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/animate.css">
</head>

<body>

    <!--Site Header: background animations and logo-->
    <!-- <main> -->
    <section id="entry" class="entry">
        <!-- <div class="container-fluid"> -->
        <header>
            <div class="container-fluid">
                <div class="div_inner_top">
                    <div class="div_header_top"></div>
                </div>
                <!--<img src="img/bg-header-index.jpg" alt="Image de l'entête">-->
                <h1 class="header_headings text-sm-center"><span class="firstUpper">ER</span><span class="secondUpper">RE</span> - <span class="thirdUpper">TEC</span></h1>
                <h1 class="header_headings text-sm-center"><span class="firstUpper">ER</span>ic <span class="secondUpper">RE</span>beyrolle - <span class="thirdUpper">TEC</span>hnologies</h1>
                <div class="div_inner_bottom">
                    <div class="div_header_bottom"></div>
                </div>
            </div>
        </header>
        <div>
            <h1 class="heading0"><?= mb_strtoupper(constant("H_FC_HEADING0")); ?></h1>
        </div>
        <!-- </div> -->
    </section>
    <hr class="my-5">
    <main class="my-5">
        <section id="home" class="home">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING1")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#professionalResume" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING1")); ?></h1>
                                            <p><?= constant("H_BC_TEXT1"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING2")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#degrees" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING2")); ?></h1>
                                            <p><?= constant("H_BC_TEXT2"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING3")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#personalProjects" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING3")); ?></h1>
                                            <p><?= constant("H_BC_TEXT3"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->

                    <!-- <div class="row justify-content-between align-items-center"> -->
                    <div class="w-100 my-5"></div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING4")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#dwmg1Formation" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING4")); ?></h1>
                                            <p><?= constant("H_BC_TEXT4"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING5")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#dfs17Formation" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING5")); ?></h1>
                                            <p><?= constant("H_BC_TEXT5"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <h1><?= mb_strtoupper(constant("H_FC_HEADING6")); ?></h1>
                                </div>
                                <div class="flip-card-back">
                                    <div class="sect sect_bg overlay">
                                        <a class="js-scrollTo" href="#cdpi6Formation" alt="Click to go" title="Click to go">
                                            <h1><?= mb_strtoupper(constant("H_BC_HEADING6")); ?></h1>
                                            <p><?= constant("H_BC_TEXT6"); ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <hr class="my-5">
        <section id="professionalResume" class="elements container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING1"))); ?></h1>
            </header>
            <!-- <img src="img/maillage_lumineux.jpg" class="img-fluid" alt=""> -->
            <div class="row justify-content-around my-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING13"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING13"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT13"); ?></p>
                        <!-- <a href="modalCenter" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter13">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING12"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING12"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT12"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter12">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING11"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING11"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT11"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter11">VOIR</button>
                    </div>

                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING10"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING10"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT10"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter10">VOIR</button>
                    </div>
                </div>


            </div>
            <div class="row justify-content-around my-5">


                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING9"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING9"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT9"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter9">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING8"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING8"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT8"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter8">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING7"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING7"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT7"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter7">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING6"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING6"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT6"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter6">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING5"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING5"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT5"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter5">VOIR</button>
                    </div>
                </div>
            </div>
            <div class="row justify-content-around my-5">


                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING4"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING4"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT4"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter4">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING3"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING3"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT3"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter3">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING2"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING2"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT2"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter2">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING1"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING1"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT1"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter1">VOIR</button>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?= constant("PR_FC_HEADING0"); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-center"><?= constant("PR_FC_S_HEADING0"); ?></h6>
                        <p class="card-text text-center"><?= constant("PR_FC_TEXT0"); ?></p>
                        <!-- <a href="#" class="btn btn-sm btn-primary btn-block" role="button">VOIR</a> -->
                        <button type="button" class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#modalCenter0">VOIR</button>
                    </div>
                </div>
            </div>
            <footer>
                <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
            </footer>
        </section>
        <hr class="my-5">
        <section id="degrees" class="elements building container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING2"))); ?></h1>
            </header>
            <div>
                <h1 class="text-center display-1 font-weight-bold">BUILDING IN PROGRESS</h1>
                <!-- <img src="img/building_progress.jpg" class="img-fluid" alt=""> -->

                <footer>
                    <span>Photo by <a href="https://unsplash.com/@fozzie?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Leo Fosdal</a> on <a href="https://unsplash.com/s/photos/construction?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                    <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
                </footer>
        </section>
        <hr class="my-5">
        <section id="personalProjects" class="elements building container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING3"))); ?></h1>
            </header>
            <h1 class="text-center display-1 font-weight-bold">BUILDING IN PROGRESS</h1>
            <!-- <img src="img/building_progress.jpg" class="img-fluid" alt=""> -->
            <a class="btn btn-dark btn-lg active" role="button" href="http://parcoursprofessionnel.chez-alice.fr/oldParcours/" target="_blank" alt="Lien Ancien Parcours Professionnel">Parcours Pro</a>
            <a class="btn btn-dark btn-lg active" href="http://natetsafiat500.chez-alice.fr/" target="_blank" alt="Lien Site Fiat500">Fiat 500</a>

            <footer>
                <span>Photo by <a href="https://unsplash.com/@fozzie?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Leo Fosdal</a> on <a href="https://unsplash.com/s/photos/construction?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText">Unsplash</a></span>
                <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
            </footer>
        </section>
        <hr class="my-5">
        <section id="dwmg1Formation" class="elements container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING4"))); ?></h1>
            </header>
            <img src="img/bg_elements.jpg" class="img-fluid" alt="">
            <footer>
                <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
            </footer>
        </section>
        <hr class="my-5">
        <section id="dfs17Formation" class="elements container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING5"))); ?></h1>
            </header>
            <img src="img/bg_elements.jpg" class="img-fluid" alt="">
            <footer>
                <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
            </footer>
        </section>
        <hr class="my-5">
        <section id="cdpi6Formation" class="elements container-fluid">
            <header>
                <h1><?= mb_strtoupper(str_replace('<br/>', '', constant("H_FC_HEADING6"))); ?></h1>
            </header>
            <img src="img/bg_elements.jpg" class="img-fluid" alt="">
            <footer>
                <button><a class="js-scrollMenu" href="#home" alt="Retour Accueil">MENU</a></button>
            </footer>
        </section>
        <footer class="text-sm-center">Copyright &copy;<?php echo date('Y'); ?>. ERRE - TEC. All Rights Reserved.</footer>
        <!-- </main> -->

        <div class="modal fade" id="modalCenter13" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING13"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT13"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter12" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING12"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT12"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter11" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING11"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT11"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter10" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING10"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT10"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING9"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT9"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING8"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT8"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING7"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT7"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING6"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT6"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING5"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT5"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING4"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT4"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING3"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT3"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING2"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT2"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING1"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT1"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalCenter0" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?= constant("PR_FC_HEADING0"); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?= constant("MC_TEXT0"); ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.js"></script>

    <script src="scripts/server.js" async defer></script>
</body>

</html>