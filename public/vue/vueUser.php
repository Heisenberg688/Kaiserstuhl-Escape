<?php
$title = "Kaiserstuhl - Boutique";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-slate-400">
    <section
        class="flex flex-col min-h-screen bg-ks-black bg-[url('img/ks-bg5-sm.png')] lg:bg-[url('img/ks-bg5-lg.png')] xl:bg-[url('img/ks-bg5-xl.png')] bg-contain ">
        <!-- Header inclus dans la section principale -->

        <div class="flex-1 text-ks-white">
            <h1 class="flex justify-center text-lg">Customisez votre profile:</h1>

            <div class="w-30 h-30 items-center flex justify-center">
                <img class="rounded-[50%] border-solid border-4 hover:border-dashed border-ks-orange"
                    src="upload/members/<?= $_SESSION['username'] ?>/<?= $_SESSION['username'] ?>.png"
                    alt="Image de profile de <?= $_SESSION['username'] ?>">
            </div>
            <?php
            // var_dump($users);
            
            // extract($users);
            
            // // var_dump($_SESSION);
            
            // echo "<p>$username and $firstname and $email</p>";
            ?>

            <form action="index.php?action=logout" method="post">
                <button type="submit" class="bg-ks-orange rounded-lg p-2 font-bold lg:text-lg h-10 w-full">Se
                    déconnecter</button>
            </form>
        </div>


    </section>
</body>

</html>