<?php ?>

<div class="background-gray">
    <?php
    require('languages/de.php');
    require_once('pageHeader.php');
    ?>
    <div class="container" id="contactPage">
        <div class="row">
            <div class="col-9">
                <div class="article">
                    <div class="contactForm row">
                        <div class="col-2">
                            <h1>mail</h1>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-2">
                        </div>
                        <div class="col-10">
                            <div class="inputGroup">
                                <textarea type="textarea" required></textarea>
                                <span class="inputBar"></span>
                                <label>Message</label>
                            </div>

                            <button>Send</button>
                        </div>
                    </div>
                </div>

                <div class="article">
                    <div class="contactForm row">
                        <div class="col-2">
                            <h1>newsletter</h1>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-10">
                            <button>Send</button>
                        </div>
                    </div>
                </div>

                <div class="article">
                    <div class="contactForm row">
                        <div class="col-2">
                            <h1>feedback</h1>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Name</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="inputGroup">
                                <input type="text" required />
                                <span class="inputBar"></span>
                                <label>Email</label>
                            </div>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-10">
                            <div class="inputGroup">
                                <textarea type="textarea" required></textarea>
                                <span class="inputBar"></span>
                                <label>Message</label>
                            </div>

                            <div id="full-stars-example-two">
                                <div class="rating-group">
                                    <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                                    <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                                    <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                    <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                                    <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                                    <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                    <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
                                </div>
                            </div>

                            <button>Send</button>

                        </div>
                    </div>
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