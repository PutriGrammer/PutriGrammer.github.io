<div class="background-gray">
    <?php
        require('languages/de.php');
        require_once('pageHeader.php');
    ?>
    <div class="container" id="aboutPage">
        <div class="row">
            <div class="col-6">
                <div class="article">
                    <h1><?php echo($messages['jidsKunstgartenTitle']); ?></h1>
                    <p><?php echo($messages['jidsKunstgartenText']); ?></p>

                    <h2><?php echo($messages['historyAndVisionTitle']); ?></h2>
                    <p><?php echo($messages['historyAndVisionText']); ?></p>

                    <h2><?php echo($messages['ideaTitle']); ?></h2>
                    <ul>
                        <?php
                            foreach ($messages['ideaText'] as $ideaText) {
                                echo "<li>$ideaText</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="article">
                    <h1><?php echo($messages['teamTitle']); ?></h1>
                    <p><?php echo($messages['teamText']); ?></p>
                </div>
                <div class="article">
                    <h1><?php echo($messages['whoWeAreTitle']); ?></h1>
                    <h2><?php echo($messages['julieTitle']); ?></h2>
                    <p><?php echo($messages['julieText']); ?></p>
                    <h2><?php echo($messages['irisTitle']); ?></h2>
                    <p><?php echo($messages['irisText']); ?></p>
                    <h2><?php echo($messages['deboraTitle']); ?></h2>
                    <p><?php echo($messages['deboraText']); ?></p>
                    <h2><?php echo($messages['shaniceTitle']); ?></h2>
                    <p><?php echo($messages['shaniceText']); ?></p>
                </div>
            </div>
            <div class="col-3">
                <div class="article">
                    <h1><?php echo($messages['supportTitle']); ?></h1>
                    <p><?php echo($messages['supportText']); ?></p>
                </div>
                <div class="article">
                    <h1><?php echo($messages['programTitle']); ?></h1>
                </div>
                <div class="article">
                    <h1><?php echo($messages['artistsTitle']); ?></h1>
                </div>
                <div class="article">
                    <a href="index.php?cont=Page&action=contact" class="textButtonLink">
                        <h1><?php echo($messages['contactTitle']); ?></h1>
                        <h2><?php echo($messages['jidsKunstgartenTitle']); ?></h2>
                        <p><?php echo($messages['contactText']); ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>