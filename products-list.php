<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Packages List</title>
    <link href="css/prod-list.css" rel="stylesheet" type="text/css">
</head>
<body onload="btn()">
<?php
include ('includes/navheader.php');
?>
    <div class="list-wrapper">
        <div class="services-list">
            <div class="div-header-container">
                <header class="div-header">
                    <h2 class="div-hd">
                        Our services
                    </h2>
                </header>
            </div>
            <div class="gallery-select-container">
                <div class="gallery-container">
                    <div class="scroll-container" id="scrl-container" onscroll="buttonValidation()">
                        <div class="items-container">
                            <ul class="items-tile">
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://www.nirvana.com.my/wp-content/uploads/2020/09/NRV07840_OKss.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Columbarium
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Where They Last Remained
                                    </p>
                                    <div class="items-btn">
                                        <a href="columbarium.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://i.pinimg.com/564x/00/79/16/00791618c2a823fb01359b7e0104c310.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Cremation
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        In Memorial Of Their Existence
                                    </p>
                                    <div class="items-btn">
                                        <a href="cremation.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://i.pinimg.com/564x/56/dd/96/56dd9664ad364e958953c8257888cd3b.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Custom Urn Design
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Fancy and Beautiful
                                    </p>
                                    <div class="items-btn">
                                        <a href="urn.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://i.pinimg.com/564x/62/d9/22/62d9220e873735f675752bb233bc5ab0.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Burial Plot
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Visit Them Again
                                    </p>
                                    <div class="items-btn">
                                        <a href="burial.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://i.pinimg.com/564x/64/98/d3/6498d3c7e57ab82c8aaa2984fadc9e0f.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Ash Scatter
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Set Them Free
                                    </p>
                                    <div class="items-btn">
                                        <a href="ash.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sticky-element-div">
                        <ul class="sticky-element" id="sticky-elem">
                            <li class="left-btn">
                                <button aria-label="Previous" class="previous-arrow nav-arrow" type="button" onclick="scrollLft()" id="left-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" width="20px" height="20px" viewBox="0 0 400 400" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M199.997,0C89.72,0,0,89.72,0,200s89.72,200,199.997,200C310.279,400,400,310.28,400,200S310.279,0,199.997,0z     M199.997,373.77c-95.811,0-173.766-77.953-173.766-173.77c0-95.817,77.955-173.77,173.766-173.77    c95.824,0,173.772,77.953,173.772,173.77C373.77,295.816,295.82,373.77,199.997,373.77z"/>
                                            <path d="M241.559,109.851c-5.123-5.124-13.43-5.124-18.547,0l-80.875,80.873c-2.46,2.459-3.843,5.796-3.843,9.273    c0,3.478,1.383,6.813,3.843,9.272l80.875,80.875c2.562,2.562,5.918,3.844,9.273,3.844c3.354,0,6.719-1.281,9.272-3.844    c5.123-5.119,5.123-13.426,0-18.545l-71.597-71.604l71.597-71.6C246.682,123.277,246.682,114.971,241.559,109.851z"/>
                                        </g>
                                    </g>
                                    </svg>
                                </button>
                            </li>
                            <li class="right-btn">
                                <button aria-label="Next" class="next-arrow nav-arrow" type="button" onclick="scrollRight()" id="right-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" fill="#000000" width="20px" height="20px" id="Capa_2">
                                        <g transform="matrix(1, 0, 0, 1, 7.105427357601002e-15, 0)">
                                            <g>
                                                <path d="M199.997,0C89.72,0,0,89.72,0,200s89.72,200,199.997,200C310.279,400,400,310.28,400,200S310.279,0,199.997,0z M199.997,373.77c-95.811,0-173.766-77.953-173.766-173.77c0-95.817,77.955-173.77,173.766-173.77 c95.824,0,173.772,77.953,173.772,173.77C373.77,295.816,295.82,373.77,199.997,373.77z"/>
                                                <path d="M 255.327 289.38 C 250.204 294.504 241.897 294.504 236.78 289.38 L 155.905 208.507 C 153.445 206.048 152.062 202.711 152.062 199.234 C 152.062 195.756 153.445 192.421 155.905 189.962 L 236.78 109.087 C 239.342 106.525 242.698 105.243 246.053 105.243 C 249.407 105.243 252.772 106.524 255.325 109.087 C 260.448 114.206 260.448 122.513 255.325 127.632 L 183.728 199.236 L 255.325 270.836 C 260.45 275.954 260.45 284.26 255.327 289.38 Z" style="transform-box: fill-box; transform-origin: 50% 50%;" transform="matrix(-1, 0, 0, -1, -0.000037, 0.000005)"/>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="packages-list">
            <div class="div-header-container">
                <header class="div-header">
                    <h2 class="div-hd">
                        Our packages
                    </h2>
                </header>
            </div>
            <div class="gallery-select-container">
                <div class="gallery-container">
                    <div class="scroll-container">
                        <div class="items-container">
                            <ul class="items-tile">
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://petmemorial.com.my/wp-content/uploads/2021/12/Basic-Express-Package.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Express Package
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Fast and Simple
                                    </p>
                                    <div class="items-btn">
                                        <a href="express.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://petmemorial.com.my/wp-content/uploads/2021/12/funeral-package.png">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Memorial Package
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Peace and Memorial
                                    </p>
                                    <div class="items-btn">
                                        <a href="memorial.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                                <li class="items">
                                    <div class="items-header">
                                        <div class="items-img">
                                            <img src="https://www.nirvana.com.my/wp-content/uploads/2020/09/Nirvana-42.jpg">
                                        </div>
                                        <div class="items-title">
                                            <h3 class="item-name">
                                                Farewell Package
                                            </h3>
                                        </div>
                                    </div>
                                    <p class="items-brief-desc">
                                        Love and Gratitude
                                    </p>
                                    <div class="items-btn">
                                        <a href="farewell.php" class="link">
                                            Learn More
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p id="demo"></p>
    </div>
<?php
include ('includes/footer.php');
?>

<script>
    const scrl = document.getElementById('scrl-container');
    const rightButton = document.getElementById('right-btn');
    const leftButton = document.getElementById('left-btn');
    const capa1 = document.getElementById('Capa_1');
    const capa2 = document.getElementById('Capa_2');
    const dis = 692;

    function btn(){
        leftButton.disabled = true;
        capa1.setAttribute('fill', '#8c8c8c');
    }

    function scrollLft(){
        scrl.scrollLeft-=dis;
    }

    function scrollRight(){
        scrl.scrollLeft+=dis;
    }

    function buttonValidation(){
        let x = scrl.scrollLeft;
        if (x.toFixed() >= 760){
            rightButton.disabled = true;
            capa2.setAttribute('fill', '#8c8c8c')
        }
        else if(x.toFixed() <=760 && x.toFixed() >=380){
            rightButton.disabled = false;
            capa1.setAttribute('fill', '#000000');
            leftButton.disabled = false;
            capa2.setAttribute('fill', '#000000');
        }
        else if (x.toFixed() <= 0){
            leftButton.disabled = true;
            capa1.setAttribute('fill', '#8c8c8c');
        }
    }
</script>
</body>
</html>