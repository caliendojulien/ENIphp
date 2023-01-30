<!doctype html>
<html lang="fr">
<head>
    <title>AvisResto</title>
    <link rel="stylesheet" href="css/uikit.min.css">
    <link rel="stylesheet" href="css/uikit-rtl.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="header">
    <div class="inner-header flex">
        <h1><a href="index.php">ENI restaurants</a></h1>
    </div>
    <div class="cards">
        <?php !isset($_GET['id']) ? require_once 'vue/vueRestaurants.php' : require_once 'vue/vueDetails.php'; ?>
    </div>
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"/>
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"/>
            </g>
        </svg>
    </div>
</div>
<!--Content starts-->
<div class="content flex">
    <p>ENI - cours PHP - semaine 1</p>
</div>
<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
</body>
</html>