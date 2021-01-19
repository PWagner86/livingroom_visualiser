<?php

/*
--------------------------------------------------------------------------------------------------------------------------------------->
Hier wird die Session gestartet und 
die Includes geladen.
--------------------------------------------------------------------------------------------------------------------------------------->
*/
session_start();
require('../04_includes/header_footer_nav.php');
require('../04_includes/favicon.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../04_includes/meta_tag.php');?>
    <?=createFavicon("../01_pics_&_logo/02_favicon")?>
    <title>Über</title>
    <?php require_once('../04_includes/font_links.php');?>
    <link rel="stylesheet" href="../02_styling/09_agb/agb_style.css">
</head>
<body>
    <!-- header ------------------------------------------------------------------>
    <?=createHeader('../index.php', './login.php', '../04_includes/logout.php', './registrieren.php', './visualizer.php', './benutzer.php', './über.php', './news.php')?>
    
    <!-- main -------------------------------------------------------------------->
    <main>
        <div class="agb-title-wrapper">
            <h3>AGB</h3>
        </div>
        
        <div class="agb-wrapper">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet delectus alias officia repellat aliquam modi fugiat atque commodi officiis eos aut mollitia maxime, corrupti nisi consequatur reprehenderit quidem voluptates libero!
                Fugiat, et corrupti quisquam quas veritatis consequatur saepe blanditiis qui ullam tempore animi distinctio error aperiam porro quibusdam facilis. Iusto, recusandae maxime. Provident quibusdam expedita sit officia? Distinctio, tempore eveniet.
                A ab sequi harum, enim perferendis quibusdam repellendus commodi laboriosam aliquam asperiores, cupiditate tempore eveniet eius. Ipsam qui nulla beatae placeat? Reprehenderit, ipsam. Vero quod hic quas ut cupiditate corrupti.
                Quaerat, repellendus vel iure perferendis odit doloribus. Quae et aut reprehenderit accusamus, molestiae ipsa laborum maiores harum at. Nam aliquam minus blanditiis ullam optio delectus suscipit nisi recusandae cupiditate sed.
                Enim eligendi velit alias a fugit minima? Expedita adipisci voluptates repudiandae porro maiores, id nesciunt totam tempore asperiores architecto suscipit aliquid animi? Voluptatem eius dolores quia expedita, mollitia enim porro.
                Voluptas porro velit nostrum accusamus ad aperiam magni repellendus reprehenderit voluptatem itaque ut odit quo iste nobis, reiciendis beatae optio molestias. Accusamus inventore molestias officia perferendis, dolores praesentium veniam ratione!
                Rerum, eveniet recusandae sunt minima nemo tenetur quia magni quo veniam similique, obcaecati, laudantium earum. Accusantium iusto ut sunt molestias facilis pariatur esse ullam beatae. Quae nisi saepe nostrum sit.
                Ipsam laudantium suscipit sit modi vitae, dolores sint assumenda, ipsa labore aliquam natus illo possimus dolorem earum? Doloribus velit deleniti minus vitae! Culpa saepe laboriosam architecto autem? Tenetur, magni deleniti.
                Aliquam tempora illo incidunt illum quaerat minus rem quasi, excepturi id, placeat eos cumque dolores voluptatum recusandae ratione labore deserunt! Ad consequuntur ut quibusdam eum debitis tenetur sequi explicabo numquam?
                Consequuntur praesentium pariatur alias delectus numquam voluptatum! Accusamus cumque quisquam iusto ut libero fuga? Culpa labore repellendus nihil quibusdam quis, placeat aliquid minima exercitationem autem consequuntur quo dolores. Magni, et?
                Enim omnis facere iure, officia perferendis a animi aperiam eaque quibusdam obcaecati officiis exercitationem rem explicabo ab adipisci asperiores sequi, non sit similique mollitia quam iusto corporis quos beatae. Eum.
                Odio sint incidunt a aut consequuntur dolore perferendis distinctio eos, voluptate quasi, illum aliquid aliquam omnis praesentium, odit asperiores veniam doloremque obcaecati dolorem perspiciatis expedita corporis officia? Rem, numquam illum!
                Quo voluptatum ratione dolore quae hic delectus, libero rerum nostrum ipsum voluptatibus fugiat reiciendis beatae nihil assumenda unde dolorem perferendis officiis! Optio temporibus commodi amet similique. Natus voluptatibus illo quod.
                Amet laboriosam dolorum, rerum assumenda neque quia eum minima facilis optio mollitia blanditiis dignissimos expedita et voluptate ut similique tempore doloremque, quidem quam, fugiat aliquid earum consectetur accusamus. Esse, porro.
                Quam facere sunt libero sit fugiat temporibus facilis dolorum culpa inventore aliquam repellat voluptatum, quod totam quisquam laborum eveniet blanditiis rem adipisci a cumque eaque minus praesentium modi maxime? Beatae?
                Eum voluptatem assumenda nisi deleniti atque fuga possimus facilis officia. Quos voluptatibus corporis iste soluta quae, consectetur temporibus autem blanditiis dignissimos at. Consequatur eius labore atque, totam distinctio laboriosam quos.
                Nesciunt iure ab eum enim, excepturi earum nihil quidem adipisci quaerat eveniet reiciendis doloremque sapiente nobis minima? Optio, aspernatur ex. Nihil repellendus eius numquam beatae quod consequatur iure quis minima.
                Odio aliquid quae eligendi explicabo quam doloremque praesentium iusto, eos magnam sed natus harum ipsum maiores cupiditate corporis error veniam. Itaque, molestiae nobis deserunt nulla culpa minus ipsum dolores aspernatur.
                Mollitia, eligendi, iste quod consequuntur repellat quae culpa eius eum velit laboriosam qui nisi molestiae fugit, facilis odit magni laudantium exercitationem enim. Fuga, animi quidem mollitia eum libero consequuntur cumque.
                Esse iste nisi quas laudantium, harum deserunt aspernatur impedit eum dolorum non sunt. Excepturi sit illum accusantium ipsum? Facere id, reprehenderit accusamus rerum quia doloribus aut cum natus ea ut.
            </p>
        </div>
    
    </main>

    <!-- footer ------------------------------------------------------------------>
    <?=createFooter('#', './kontakt.php')?>

</body>
</html>