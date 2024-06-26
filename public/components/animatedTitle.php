<!-- ANIMATED TITLE FOR HOME COMPONENT -->
<style>
    #typed {
        font-weight: bold;
        color: rgb(250, 165, 38);
    }

    .cursor {
        display: inline-block;
        background-color: rgb(250, 165, 38);
        animation: blinker 800ms infinite;
    }

    .cursor.typing-true {
        animation: none;
    }

    @keyframes blinker {
        0% {
            background-color: rgb(250, 165, 38)
        }

        50% {
            background-color: transparent;
        }

        100% {
            background-color: rgb(250, 165, 38);
        }
    }

    /*-------------------- Mouse --------------------*/

    .mouse::before {
        content: "";
        width: 25px;
        height: 25px;
        position: absolute;
        top: 30px;
        background: #fff;
        left: 50%;
        transform: translateX(-50%);
        border-radius: 50%;
        opacity: 1;
        animation: mouse 2s infinite;
    }



    @keyframes mouse {
        from {
            opacity: 1;
            top: 30px;
        }

        to {
            opacity: 0;
            top: 100px;
        }
    }

    .button {
        line-height: 1;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: .75rem;
        background-color: #c24448;
        color: #fff;
        border-radius: 10rem;
        font-weight: 600;
        padding: .75rem 1.5rem;
        padding-left: 20px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: background-color .3s;
    }

    .button__icon-wrapper {
        flex-shrink: 0;
        width: 25px;
        height: 25px;
        position: relative;
        color: var(--clr);
        background-color: #fff;
        border-radius: 50%;
        display: grid;
        place-items: center;
        overflow: hidden;
    }

    .button:hover {
        background-color: #000;
    }

    .button:hover .button__icon-wrapper {
        color: #000;
    }

    .button__icon-svg--copy {
        position: absolute;
        transform: translate(-150%, 150%);
    }

    .button:hover .button__icon-svg:first-child {
        transition: transform .3s ease-in-out;
        transform: translate(150%, -150%);
    }

    .button:hover .button__icon-svg--copy {
        transition: transform .3s ease-in-out .1s;
        transform: translate(0);
    }


    @media only screen and (max-width: 600px) {
        .mouse::before {
            content: "";
            width: 10px;
            height: 10px;
            position: absolute;
            top: 30px;
            background: #fff;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50%;
            opacity: 1;
            animation: mouse 2s infinite;
        }

        @keyframes mouse {
            from {
                opacity: 1;
                top: 0px;
            }

            to {
                opacity: 0;
                top: 50px;
            }
        }



    }

    /*-------------------- Leaderboard --------------------*/

    .leaderboard {
        width: 408px;

    }


    .leaderboard h4 {
        font-size: 18px;
        color: #e1e1e1;
        padding: 12px 13px 18px;
    }

    .leaderboard h4 svg {
        width: 25px;
        height: 26px;
        position: relative;
        top: 3px;
        margin-right: 6px;
        vertical-align: baseline;
    }

    .leaderboard ol {
        counter-reset: leaderboard;
    }

    .leaderboard ol li {
        position: relative;
        z-index: 1;
        font-size: 14px;
        counter-increment: leaderboard;
        padding: 18px 10px 18px 50px;
        cursor: pointer;
        backface-visibility: hidden;
        transform: translateZ(0) scale(1, 1);
    }

    .leaderboard ol li::before {
        content: counter(leaderboard);
        position: absolute;
        z-index: 2;
        top: 15px;
        left: 15px;
        width: 20px;
        height: 20px;
        line-height: 20px;
        color: #c24448;
        background: #fff;
        border-radius: 20px;
        text-align: center;
    }

    .leaderboard ol li mark {
        position: absolute;
        z-index: 2;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 18px 10px 18px 50px;
        margin: 0;
        background: none;
        color: #fff;
    }

    .leaderboard ol li mark::before,
    .leaderboard ol li mark::after {
        content: '';
        position: absolute;
        z-index: 1;
        bottom: -11px;
        left: -9px;
        border-top: 10px solid #c24448;
        border-left: 10px solid transparent;
        transition: all 0.1s ease-in-out;
        opacity: 0;
    }

    .leaderboard ol li mark::after {
        left: auto;
        right: -9px;
        border-left: none;
        border-right: 10px solid transparent;
    }

    .leaderboard ol li small {
        position: relative;
        z-index: 2;
        display: block;
        text-align: right;
    }

    .leaderboard ol li::after {
        content: '';
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fa6855;
        box-shadow: 0 3px 0 rgba(0, 0, 0, .08);
        transition: all 0.3s ease-in-out;
        opacity: 0;
    }

    .leaderboard ol li:nth-child(1) {
        background: #fa6855;
    }

    .leaderboard ol li:nth-child(1)::after {
        background: #fa6855;
    }

    .leaderboard ol li:nth-child(2) {
        background: #e0574f;
    }

    .leaderboard ol li:nth-child(2)::after {
        background: #e0574f;
        box-shadow: 0 2px 0 rgba(0, 0, 0, .08);
    }

    .leaderboard ol li:nth-child(2) mark::before,
    .leaderboard ol li:nth-child(2) mark::after {
        border-top: 6px solid #ba4741;
        bottom: -7px;
    }

    .leaderboard ol li:nth-child(3) {
        background: #d7514d;
    }

    .leaderboard ol li:nth-child(3)::after {
        background: #d7514d;
        box-shadow: 0 1px 0 rgba(0, 0, 0, .11);
    }

    .leaderboard ol li:nth-child(3) mark::before,
    .leaderboard ol li:nth-child(3) mark::after {
        border-top: 2px solid #b0433f;
        bottom: -3px;
    }

    .leaderboard ol li:nth-child(4) {
        background: #cd4b4b;
    }

    .leaderboard ol li:nth-child(4)::after {
        background: #cd4b4b;
        box-shadow: 0 -1px 0 rgba(0, 0, 0, .15);
    }

    .leaderboard ol li:nth-child(4) mark::before,
    .leaderboard ol li:nth-child(4) mark::after {
        top: -7px;
        bottom: auto;
        border-top: none;
        border-bottom: 6px solid #a63d3d;
    }

    .leaderboard ol li:nth-child(5) {
        background: #c24448;
        border-radius: 0 0 10px 10px;
    }

    .leaderboard ol li:nth-child(5)::after {
        background: #c24448;
        box-shadow: 0 -2.5px 0 rgba(0, 0, 0, .12);
        border-radius: 0 0 10px 10px;
    }

    .leaderboard ol li:nth-child(5) mark::before,
    .leaderboard ol li:nth-child(5) mark::after {
        top: -9px;
        bottom: auto;
        border-top: none;
        border-bottom: 8px solid #993639;
    }

    .leaderboard ol li:hover {
        z-index: 2;
        overflow: visible;
    }

    .leaderboard ol li:hover::after {
        opacity: 1;
        transform: scaleX(1.06) scaleY(1.03);
    }

    .leaderboard ol li:hover mark::before,
    .leaderboard ol li:hover mark::after {
        opacity: 1;
        transition: all 0.35s ease-in-out;
    }

    .the-most {
        position: fixed;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 50vw;
        max-width: 200px;
        padding: 10px;
    }

    .the-most img {
        max-width: 100%;
    }

    #map {
        height: 180px;
    }

    /* AVIS STYLE */
    .container {
        width: 100%;
        height: 100%;
        --s: 200px;
        /* control the size */
        --c1: #1d1d1d;
        --c2: #4e4f51;
        --c3: #3c3c3c;

        background: repeating-conic-gradient(from 30deg,
                #0000 0 120deg,
                var(--c3) 0 180deg) calc(0.5 * var(--s)) calc(0.5 * var(--s) * 0.577),
            repeating-conic-gradient(from 30deg,
                var(--c1) 0 60deg,
                var(--c2) 0 120deg,
                var(--c3) 0 180deg);
        background-size: var(--s) calc(var(--s) * 0.577);
    }

    .containere {
        width: 100%;
        height: 100%;
        --s: 37px;
        /* control the size */

        --c: #0000, #282828 0.5deg 119.5deg, #0000 120deg;
        --g1: conic-gradient(from 60deg at 56.25% calc(425% / 6), var(--c));
        --g2: conic-gradient(from 180deg at 43.75% calc(425% / 6), var(--c));
        --g3: conic-gradient(from -60deg at 50% calc(175% / 12), var(--c));
        background: var(--g1), var(--g1) var(--s) calc(1.73 * var(--s)), var(--g2),
            var(--g2) var(--s) calc(1.73 * var(--s)), var(--g3) var(--s) 0,
            var(--g3) 0 calc(1.73 * var(--s)) #1e1e1e;
        background-size: calc(2 * var(--s)) calc(3.46 * var(--s));
    }
</style>
<div class="h-[50vh] w-auto flex justify-center items-center">
    <?php if ($_SESSION['lang'] === 'ENG')
        echo "    <h1
        class='text-center w-[80%] md:text-5xl lg:text-6xl xl:text-8xl font-semibold z-[2] text-4xl text-ks-white select-none'>
        YOUR ADVENTURE <br><span id='typed'></span><span class='cursor'>&nbsp;</span>
    </h1>";
    else
        echo "    <h1
        class='text-center w-[80%] md:text-5xl lg:text-6xl xl:text-8xl font-semibold z-[2] text-4xl text-ks-white select-none'>
        VOTRE
        AVENTURE EN <br><span id='typed'></span><span class='cursor'>&nbsp;</span>
    </h1>";
    ?>
</div>

<script>
    // text typing 

    const typedSpan = document.getElementById("typed")
    <?php if ($_SESSION['lang'] === 'ENG')
        echo "const totype = ['OUTDOOR', 'IN TEAM',]";
    else
        echo "const totype = ['EXTERIEUR', 'EQUIPE',]";
    ?>


    const delayTyping_char = 100;
    const delayErasing_text = 120;
    const delayTyping_text = 2000;

    let totypeIndex = 0;
    let charIndex = 0;

    function typeText() {
        if (charIndex < totype[totypeIndex].length) {
            typedSpan.textContent += totype[totypeIndex].charAt(charIndex);
            charIndex++;
            setTimeout(typeText, delayTyping_char);
        }
        else {
            setTimeout(eraseText, delayTyping_text);
        }
    }

    function eraseText() {
        if (charIndex > 0) {
            typedSpan.textContent = totype[totypeIndex].substring(0, charIndex - 1);
            charIndex = charIndex - 1;
            setTimeout(eraseText, delayErasing_text);
        }
        else {
            totypeIndex++;

            if (totypeIndex >= totype.length)
                totypeIndex = 0;
            setTimeout(typeText, delayTyping_text);
        }
    }

    window.onload = function () {
        if (totype[totypeIndex].length) setTimeout(typeText, delayTyping_text);
    }
</script>