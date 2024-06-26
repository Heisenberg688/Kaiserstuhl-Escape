<!-- FOOTER COMPONENT -->
<footer
    class="bg-[url('../img/ks-bgfooter-sm.png')] lg:bg-[url('../img/ks-bgfooter-lg.png')] bg-cover lg:bg-cover text-ks-white flex flex-col gap-4 md:gap-18 lg:gap-24 items-center py-6 md:flex-row md:justify-between md:px-10 lg:px-24 lg:py-12 xl:px-36 2xl:px-64">
    <div class="footer-logo">
        <a href="index.php">
            <img class="h-auto w-[200px] md:w-[180px] lg:w-[160px] xl:w-[200px]" loading="lazy" src="img/ks-logo3.png"
                alt="Logo Kaiserstuhl Escape Game" />
        </a>
    </div>

    <div class="flex flex-row gap-4 md:gap-18 lg:gap-24">
        <div class="footer-links1 flex flex-col gap-2 text-sm font-light lg:text-base">
            <?php if ($_SESSION['lang'] === 'ENG')
                echo '<h4 class="underline text-base font-semibold md:text-sm lg:text-base">OUR COMPANY</h4>
                <a href="index.php#about">About</a>
                <a href="index.php?action=team">Our team</a>
                <a href="index.php?action=?">Legal notice</a>
                <a href="index.php?action=?">TOS</a>
                <a href="index.php?action=?">Data protection</a>';
            else
                echo '<h4 class="underline text-base font-semibold md:text-sm lg:text-base">NOTRE ENTREPRISE</h4>
                <a href="index.php#about">À propos</a>
                <a href="index.php?action=team">Notre équipe</a>
                <a href="index.php?action=?">Mention légales</a>
                <a href="index.php?action=?">CGV</a>
                <a href="index.php?action=?">Protection des données</a>';
            ?>

        </div>

        <div class="footer-links2 flex flex-row gap-2 md:gap-18 lg:gap-24 text-sm font-thin lg:text-base">
            <div class="footer-nav flex flex-col gap-2">
                <?php if ($_SESSION['lang'] === 'ENG')
                    echo '<h4 class="underline text-base font-semibold md:text-sm lg:text-base">INFORMATIONS</h4>
                    <a href="index.php?action=team#FAQ">FAQ</a>
                    <a href="index.php?action=games">Escape Games</a>
                    <a href="index.php?action=goods">Discount vouchers</a>
                    <a href="index.php#sponso">Our partners</a>
                    <a href="index.php?action=?">Jobs</a>';
                else
                    echo '<h4 class="underline text-base font-semibold md:text-sm lg:text-base">INFORMATIONS</h4>
                    <a href="index.php?action=team#FAQ">FAQ</a>
                    <a href="index.php?action=games">Escape Games</a>
                    <a href="index.php?action=goods">Bons de réductions</a>
                    <a href="index.php#sponso">Nos Partenaires</a>
                    <a href="index.php?action=?">Emplois</a>';
                ?>

            </div>

            <div class="footer-socials flex flex-col gap-9 md:hidden">
                <a href="https://www.youtube.com/channel/UCAYvHk0MQBI-_SQ1j8nXIYw" target="_blank"><img
                        src="img/icons/youtube.svg" alt="Youtube icon social" class="w-[30px] lg:w-[40px]"></a>
                <a href="https://www.facebook.com/weescapegmbh" target="_blank"><img src="img/icons/facebook.svg"
                        alt="Facebook icon social" class="w-[30px] lg:w-[40px]"></a>
                <a href="https://www.instagram.com/we_escape_abenteuer/" target="_blank"><img
                        src="img/icons/instagram.svg" alt="Instagram icon social" class="w-[30px] lg:w-[40px]"></a>
            </div>
        </div>

    </div>
    <div class="footer-socials flex-col gap-9 hidden md:visible md:flex pr-0 md:pr-8 xl:pr-6">
        <a href="https://www.youtube.com/channel/UCAYvHk0MQBI-_SQ1j8nXIYw" target="_blank"><img
                src="img/icons/youtube.svg" alt="Youtube icon social" class="w-[30px] lg:w-[40px]"></a>
        <a href="https://www.facebook.com/weescapegmbh" target="_blank"><img src="img/icons/facebook.svg"
                alt="Facebook icon social" class="w-[30px] lg:w-[40px]"></a>
        <a href="https://www.instagram.com/we_escape_abenteuer/" target="_blank"><img src="img/icons/instagram.svg"
                alt="Instagram icon social" class="w-[30px] lg:w-[40px]"></a>
    </div>
</footer>
<!-- FOOTER SCRIPT -->
<script>

</script>
<!-- END FOOTER COMPONENT -->