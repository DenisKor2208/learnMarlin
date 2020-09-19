<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                               <?php
                               $person = [
                                   [   "status" => "",
                                       "img" => "img/demo/authors/sunny.png",
                                       "img-alt" => "Sunny A.",
                                       "h5-name" => "Sunny A. (UI/UX Expert)",
                                       "h5-job_title" => "Lead Author",
                                       "twitter-link-href" => "https://twitter.com/@myplaneticket",
                                       "twitter-link-text" => "@myplaneticket",
                                       "email-link-href" => "https://wrapbootstrap.com/user/myorange",
                                       "email-link-text" => '<i class="fal fa-envelope"></i>',
                                       "email-link-title" => "Contact Sunny"
                                   ],
                                   [   "status" => "",
                                       "img" => "img/demo/authors/josh.png",
                                       "img-alt" => "Jos K.",
                                       "h5-name" => "Jos K. (ASP.NET Developer)",
                                       "h5-job_title" => "Partner &amp; Contributor",
                                       "twitter-link-href" => "https://twitter.com/@atlantez",
                                       "twitter-link-text" => "@atlantez",
                                       "email-link-href" => "https://wrapbootstrap.com/user/Walapa",
                                       "email-link-text" => '<i class="fal fa-envelope"></i>',
                                       "email-link-title" => "Contact Jos"
                                   ],
                                   [   "status" => "banned",
                                       "img" => "img/demo/authors/jovanni.png",
                                       "img-alt" => "Jovanni Lo",
                                       "h5-name" => "Jovanni L. (PHP Developer)",
                                       "h5-job_title" => "Partner &amp; Contributor",
                                       "twitter-link-href" => "https://twitter.com/@lodev09",
                                       "twitter-link-text" => "@lodev09",
                                       "email-link-href" => "https://wrapbootstrap.com/user/lodev09",
                                       "email-link-text" => '<i class="fal fa-envelope"></i>',
                                       "email-link-title" => "Contact Jovanni"
                                   ],
                                   [   "status" => "banned",
                                       "img" => "img/demo/authors/roberto.png",
                                       "img-alt" => "Jovanni Lo",
                                       "h5-name" => "Roberto R. (Rails Developer)",
                                       "h5-job_title" => "Partner &amp; Contributor",
                                       "twitter-link-href" => "https://twitter.com/@sildur",
                                       "twitter-link-text" => "@sildur",
                                       "email-link-href" => "https://wrapbootstrap.com/user/sildur",
                                       "email-link-text" => '<i class="fal fa-envelope"></i>',
                                       "email-link-title" => "Contact Roberto"
                                   ]
                               ];
                               ?>
                                    <?php foreach ($person as $value): ?>
                                        <div class="<?php echo $value['status'];?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                           <img src= "<?php echo $value['img'];?>" alt="<?php echo $value['img-alt'];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                           <div class="ml-2 mr-3">
                                               <h5 class="m-0">
                                                   <?php echo $value['h5-name'];?>
                                                   <small class="m-0 fw-300">
                                                       <?php echo $value['h5-job_title'];?>
                                                   </small>
                                               </h5>
                                               <a href="<?php echo $value['twitter-link-href'];?>" class="text-info fs-sm" target="_blank"><?php echo $value['twitter-link-text'];?></a> -
                                               <a href="<?php echo $value['email-link-href'];?>" class="text-info fs-sm" target="_blank" title="<?php echo $value['email-link-title'];?>"><i class="fal fa-envelope"></i></a>
                                           </div>
                                        </div>

                               <?php endforeach; ?>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
