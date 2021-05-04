<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/actualite' => [[['_route' => 'actualite_index', '_controller' => 'App\\Controller\\ActualiteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/index' => [[['_route' => 'actualite_indexF', '_controller' => 'App\\Controller\\ActualiteController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/actualite/new' => [[['_route' => 'actualite_new', '_controller' => 'App\\Controller\\ActualiteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/apprenant' => [[['_route' => 'apprenant_index', '_controller' => 'App\\Controller\\ApprenantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/apprenant/new' => [[['_route' => 'apprenant_new', '_controller' => 'App\\Controller\\ApprenantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/index' => [[['_route' => 'categorieF_index', '_controller' => 'App\\Controller\\CategorieController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours/index' => [[['_route' => 'coursF_index', '_controller' => 'App\\Controller\\CoursController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/cours' => [[['_route' => 'cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/new' => [[['_route' => 'cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/courslistname' => [[['_route' => 'triName', '_controller' => 'App\\Controller\\CoursController::listAction'], null, null, null, false, false, null]],
        '/enseignant' => [[['_route' => 'enseignant_index', '_controller' => 'App\\Controller\\EnseignantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/enseignant/new' => [[['_route' => 'enseignant_new', '_controller' => 'App\\Controller\\EnseignantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/index' => [[['_route' => 'evenement_indexF', '_controller' => 'App\\Controller\\EvenementController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/feedback' => [[['_route' => 'feedback_index', '_controller' => 'App\\Controller\\FeedbackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/feedback/index' => [[['_route' => 'feedbackF_index', '_controller' => 'App\\Controller\\FeedbackController::indexf'], null, ['GET' => 0], null, false, false, null]],
        '/feedback/new' => [[['_route' => 'feedback_new', '_controller' => 'App\\Controller\\FeedbackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home/contoller' => [[['_route' => 'home_contoller', '_controller' => 'App\\Controller\\HomeContollerController::index'], null, null, null, false, false, null]],
        '/partenaire' => [[['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/partenaire/Front' => [[['_route' => 'partenaire_indexR', '_controller' => 'App\\Controller\\PartenaireController::indexR'], null, ['GET' => 0], null, false, false, null]],
        '/partenaire/new' => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/partenairestat' => [[['_route' => 'stat', '_controller' => 'App\\Controller\\PartenaireController::statistiques'], null, null, null, false, false, null]],
        '/partenairelist' => [[['_route' => 'triM', '_controller' => 'App\\Controller\\PartenaireController::OrderByMailQB'], null, null, null, false, false, null]],
        '/partenairecontactP' => [[['_route' => 'contactP', '_controller' => 'App\\Controller\\PartenaireController::contactP'], null, null, null, false, false, null]],
        '/promotion' => [[['_route' => 'promotion_index', '_controller' => 'App\\Controller\\PromotionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/promotion/p' => [[['_route' => 'p', '_controller' => 'App\\Controller\\PromotionController::a'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion/Front' => [[['_route' => 'promotion_indexR', '_controller' => 'App\\Controller\\PromotionController::indexR'], null, ['GET' => 0], null, false, false, null]],
        '/promotion/new' => [[['_route' => 'promotion_new', '_controller' => 'App\\Controller\\PromotionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotion triRed' => [[['_route' => 'triRed', '_controller' => 'App\\Controller\\PromotionController::TriRed'], null, null, null, false, false, null]],
        '/promotionrandommail' => [[['_route' => 'randommail', '_controller' => 'App\\Controller\\PromotionController::RandomUserMail'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/promotionplay' => [[['_route' => 'play', '_controller' => 'App\\Controller\\PromotionController::playWithUser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question' => [[['_route' => 'question_index', '_controller' => 'App\\Controller\\QuestionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/question/index' => [[['_route' => 'questionF_index', '_controller' => 'App\\Controller\\QuestionController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/question/index1' => [[['_route' => 'questionF_show', '_controller' => 'App\\Controller\\QuestionController::indexS'], null, ['GET' => 0], null, false, false, null]],
        '/question/new' => [[['_route' => 'question_new', '_controller' => 'App\\Controller\\QuestionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/question/question/tri' => [[['_route' => '/question/tri', '_controller' => 'App\\Controller\\QuestionController::Tri'], null, null, null, false, false, null]],
        '/questionlist' => [[['_route' => 'triCategorieB', '_controller' => 'App\\Controller\\QuestionController::OrderByName'], null, null, null, false, false, null]],
        '/reclamation/index' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamationF_index', '_controller' => 'App\\Controller\\ReclamationController::indexf'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/consulterRec' => [[['_route' => 'contrat', '_controller' => 'App\\Controller\\ReclamationController::consulterContrat'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/trie/nom' => [[['_route' => 'sortbytitleasc', '_controller' => 'App\\Controller\\ReclamationController::sortByTitleASC'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse_index', '_controller' => 'App\\Controller\\ReponseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reponse/new' => [[['_route' => 'reponse_new', '_controller' => 'App\\Controller\\ReponseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'account_new', '_controller' => 'App\\Controller\\SecurityController::registration'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/forget' => [[['_route' => 'forget', '_controller' => 'App\\Controller\\SecurityController::forgetPassword'], null, null, null, false, false, null]],
        '/stars' => [[['_route' => 'stars', '_controller' => 'App\\Controller\\StarsController::index'], null, null, null, false, false, null]],
        '/affichestars' => [[['_route' => 'list_stars', '_controller' => 'App\\Controller\\StarsController::afficherstars'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test_index', '_controller' => 'App\\Controller\\TestController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/test/indexBack' => [[['_route' => 'test_indexBack', '_controller' => 'App\\Controller\\TestController::indexBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/new' => [[['_route' => 'test_newwwww', '_controller' => 'App\\Controller\\TestController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/test/test/index' => [[['_route' => 'testfd_index', '_controller' => 'App\\Controller\\TestController::showx'], null, ['GET' => 0], null, false, false, null]],
        '/theme' => [[['_route' => 'theme_index', '_controller' => 'App\\Controller\\ThemeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/theme/index' => [[['_route' => 'themeF_index', '_controller' => 'App\\Controller\\ThemeController::indexF'], null, ['GET' => 0], null, false, false, null]],
        '/theme/new' => [[['_route' => 'theme_new', '_controller' => 'App\\Controller\\ThemeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/utilisateur/new' => [[['_route' => 'utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateurshowFront' => [[['_route' => 'utilisateur_showFront', '_controller' => 'App\\Controller\\UtilisateurController::showFront'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateurtriSQL' => [[['_route' => 'utilisateur_triRole', '_controller' => 'App\\Controller\\UtilisateurController::orderByRoleSQL'], null, null, null, false, false, null]],
        '/utilisateurliste' => [[['_route' => 'liste', '_controller' => 'App\\Controller\\UtilisateurController::getUtilisateurs'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateuradd' => [[['_route' => 'add_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::addUtilisateur'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                    .'|gcb/generate\\-captcha/([^/]++)(*:198)'
                .')'
                .'|/a(?'
                    .'|ctualite/(?'
                        .'|([^/]++)(*:232)'
                        .'|index/([^/]++)(*:254)'
                        .'|([^/]++)(?'
                            .'|/edit(*:278)'
                            .'|(*:286)'
                        .')'
                    .')'
                    .'|pprenant/([^/]++)(?'
                        .'|(*:316)'
                        .'|/edit(*:329)'
                        .'|(*:337)'
                    .')'
                .')'
                .'|/e(?'
                    .'|venement/(?'
                        .'|index/([^/]++)(*:378)'
                        .'|([^/]++)(*:394)'
                        .'|index/([^/]++)(*:416)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:443)'
                                .'|reserve(*:458)'
                            .')'
                            .'|(*:467)'
                        .')'
                        .'|index/searchEvenementx(*:498)'
                    .')'
                    .'|nseignant/([^/]++)(?'
                        .'|(*:528)'
                        .'|/edit(*:541)'
                        .'|(*:549)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:584)'
                        .'|/edit(*:597)'
                        .'|(*:605)'
                    .')'
                    .'|ours/(?'
                        .'|([^/]++)(*:630)'
                        .'|index/([^/]++)(*:652)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:679)'
                                .'|reserve(*:694)'
                            .')'
                            .'|(*:703)'
                        .')'
                        .'|index/([^/]++)(*:726)'
                    .')'
                .')'
                .'|/feedback/(?'
                    .'|([^/]++)(*:757)'
                    .'|index/([^/]++)(?'
                        .'|(*:782)'
                        .'|/edit(*:795)'
                        .'|(*:803)'
                    .')'
                    .'|recherche(*:821)'
                .')'
                .'|/p(?'
                    .'|artenaire/([^/]++)(?'
                        .'|(*:856)'
                        .'|/edit(*:869)'
                        .'|(*:877)'
                    .')'
                    .'|romotion/([^/]++)(?'
                        .'|(*:906)'
                        .'|/edit(*:919)'
                        .'|(*:927)'
                    .')'
                .')'
                .'|/q(?'
                    .'|uestion/(?'
                        .'|([^/]++)(*:961)'
                        .'|front_q(*:976)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1000)'
                            .'|(*:1009)'
                        .')'
                        .'|TriCat(*:1025)'
                    .')'
                    .'|r\\-code/([^/]++)/([^/]++)(*:1060)'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|index/([^/]++)(*:1103)'
                        .'|([^/]++)(?'
                            .'|(*:1123)'
                            .'|/edit(*:1137)'
                            .'|(*:1146)'
                        .')'
                    .')'
                    .'|ponse/([^/]++)(?'
                        .'|(*:1174)'
                        .'|/edit(*:1188)'
                        .'|(*:1197)'
                    .')'
                .')'
                .'|/t(?'
                    .'|est(?'
                        .'|([^/]++)/indexcert(*:1237)'
                        .'|/(?'
                            .'|([^/]++)(?'
                                .'|/edit(*:1266)'
                                .'|(*:1275)'
                            .')'
                            .'|pdf(*:1288)'
                        .')'
                    .')'
                    .'|heme/([^/]++)(?'
                        .'|(*:1315)'
                        .'|/edit(*:1329)'
                        .'|(*:1338)'
                    .')'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:1373)'
                    .'|/edit(*:1387)'
                    .'|(*:1396)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        198 => [[['_route' => 'gregwar_captcha.generate_captcha', '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction'], ['key'], null, null, false, true, null]],
        232 => [[['_route' => 'actualite_show', '_controller' => 'App\\Controller\\ActualiteController::show'], ['idAc'], ['GET' => 0], null, false, true, null]],
        254 => [[['_route' => 'actualite_showF', '_controller' => 'App\\Controller\\ActualiteController::showF'], ['idAc'], ['GET' => 0], null, false, true, null]],
        278 => [[['_route' => 'actualite_edit', '_controller' => 'App\\Controller\\ActualiteController::edit'], ['idAc'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        286 => [[['_route' => 'actualite_delete', '_controller' => 'App\\Controller\\ActualiteController::delete'], ['idAc'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'apprenant_show', '_controller' => 'App\\Controller\\ApprenantController::show'], ['idApp'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'apprenant_edit', '_controller' => 'App\\Controller\\ApprenantController::edit'], ['idApp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'apprenant_delete', '_controller' => 'App\\Controller\\ApprenantController::delete'], ['idApp'], ['POST' => 0], null, false, true, null]],
        378 => [[['_route' => 'evenement_showEF', '_controller' => 'App\\Controller\\ActualiteController::showEF'], ['idEv'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEv'], ['GET' => 0], null, false, true, null]],
        416 => [[['_route' => 'evenement_showF', '_controller' => 'App\\Controller\\EvenementController::showF'], ['idEv'], ['GET' => 0], null, false, true, null]],
        443 => [[['_route' => 'evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEv'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        458 => [[['_route' => 'evenement_reserve', '_controller' => 'App\\Controller\\EvenementController::reserve'], ['idEv'], ['GET' => 0], null, false, false, null]],
        467 => [[['_route' => 'evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEv'], ['POST' => 0], null, false, true, null]],
        498 => [[['_route' => 'searchEvenementx', '_controller' => 'App\\Controller\\EvenementController::searchEvenementx'], [], null, null, false, false, null]],
        528 => [[['_route' => 'enseignant_show', '_controller' => 'App\\Controller\\EnseignantController::show'], ['idEns'], ['GET' => 0], null, false, true, null]],
        541 => [[['_route' => 'enseignant_edit', '_controller' => 'App\\Controller\\EnseignantController::edit'], ['idEns'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        549 => [[['_route' => 'enseignant_delete', '_controller' => 'App\\Controller\\EnseignantController::delete'], ['idEns'], ['POST' => 0], null, false, true, null]],
        584 => [[['_route' => 'categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['idCategorie'], ['GET' => 0], null, false, true, null]],
        597 => [[['_route' => 'categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['idCategorie'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        605 => [[['_route' => 'categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['idCategorie'], ['POST' => 0], null, false, true, null]],
        630 => [[['_route' => 'cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['idC'], ['GET' => 0], null, false, true, null]],
        652 => [[['_route' => 'coursF_show', '_controller' => 'App\\Controller\\CoursController::showF'], ['idC'], ['GET' => 0], null, false, true, null]],
        679 => [[['_route' => 'cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['idC'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        694 => [[['_route' => 'cours_reserve', '_controller' => 'App\\Controller\\CoursController::reserve'], ['idC'], ['GET' => 0], null, false, false, null]],
        703 => [[['_route' => 'cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['idC'], ['POST' => 0], null, false, true, null]],
        726 => [[['_route' => 'add_stars', '_controller' => 'App\\Controller\\StarsController::addstars'], ['idC'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        757 => [[['_route' => 'feedback_show', '_controller' => 'App\\Controller\\FeedbackController::show'], ['idF'], ['GET' => 0], null, false, true, null]],
        782 => [[['_route' => 'feedback_showF', '_controller' => 'App\\Controller\\FeedbackController::showF'], ['idF'], ['GET' => 0], null, false, true, null]],
        795 => [[['_route' => 'feedback_edit', '_controller' => 'App\\Controller\\FeedbackController::edit'], ['idF'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        803 => [[['_route' => 'feedback_delete', '_controller' => 'App\\Controller\\FeedbackController::delete'], ['idF'], ['POST' => 0], null, false, true, null]],
        821 => [[['_route' => 'Recherche', '_controller' => 'App\\Controller\\FeedbackController::Recherche'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        856 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        869 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        877 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['idP'], ['POST' => 0], null, false, true, null]],
        906 => [[['_route' => 'promotion_show', '_controller' => 'App\\Controller\\PromotionController::show'], ['idProm'], ['GET' => 0], null, false, true, null]],
        919 => [[['_route' => 'promotion_edit', '_controller' => 'App\\Controller\\PromotionController::edit'], ['idProm'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        927 => [[['_route' => 'promotion_delete', '_controller' => 'App\\Controller\\PromotionController::delete'], ['idProm'], ['POST' => 0], null, false, true, null]],
        961 => [[['_route' => 'question_show', '_controller' => 'App\\Controller\\QuestionController::show'], ['idQ'], ['GET' => 0], null, false, true, null]],
        976 => [[['_route' => 'question_show_front', '_controller' => 'App\\Controller\\QuestionController::show_front'], [], ['GET' => 0], null, false, false, null]],
        1000 => [[['_route' => 'question_edit', '_controller' => 'App\\Controller\\QuestionController::edit'], ['idQ'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1009 => [[['_route' => 'question_delete', '_controller' => 'App\\Controller\\QuestionController::delete'], ['idQ'], ['POST' => 0], null, false, true, null]],
        1025 => [[['_route' => 'question_cat', '_controller' => 'App\\Controller\\QuestionController::FindByCategorie'], [], ['POST' => 0], null, true, false, null]],
        1060 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1103 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idRec'], ['GET' => 0], null, false, true, null]],
        1123 => [[['_route' => 'reclamation_showF', '_controller' => 'App\\Controller\\ReclamationController::showF'], ['idRec'], ['GET' => 0], null, false, true, null]],
        1137 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idRec'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1146 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['idRec'], ['POST' => 0], null, false, true, null]],
        1174 => [[['_route' => 'reponse_show', '_controller' => 'App\\Controller\\ReponseController::show'], ['idR'], ['GET' => 0], null, false, true, null]],
        1188 => [[['_route' => 'reponse_edit', '_controller' => 'App\\Controller\\ReponseController::edit'], ['idR'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1197 => [[['_route' => 'reponse_delete', '_controller' => 'App\\Controller\\ReponseController::delete'], ['idR'], ['POST' => 0], null, false, true, null]],
        1237 => [[['_route' => 'test_indexcert', '_controller' => 'App\\Controller\\TestController::indexf'], ['idTest'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1266 => [[['_route' => 'test_edit', '_controller' => 'App\\Controller\\TestController::edit'], ['idTest'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1275 => [[['_route' => 'test_delete', '_controller' => 'App\\Controller\\TestController::delete'], ['idTest'], ['POST' => 0], null, false, true, null]],
        1288 => [[['_route' => 'test_pdf', '_controller' => 'App\\Controller\\TestController::indexpdf'], [], null, null, false, false, null]],
        1315 => [[['_route' => 'theme_show', '_controller' => 'App\\Controller\\ThemeController::show'], ['idT'], ['GET' => 0], null, false, true, null]],
        1329 => [[['_route' => 'theme_edit', '_controller' => 'App\\Controller\\ThemeController::edit'], ['idT'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1338 => [[['_route' => 'theme_delete', '_controller' => 'App\\Controller\\ThemeController::delete'], ['idT'], ['POST' => 0], null, false, true, null]],
        1373 => [[['_route' => 'utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1387 => [[['_route' => 'utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1396 => [
            [['_route' => 'utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
