<style>
#whatsapp {
    position: fixed;
    z-index: 999;
    width: 4rem;
    bottom: 110px;
    right: 10px;
    display: -webkit-inline-box;
}

#face {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 70px;
    right: 10px;
    display: -webkit-inline-box;
}

#insta {
    position: fixed;
    z-index: 999;
    width: 3rem;
    bottom: 30px;
    right: 10px;
    display: -webkit-inline-box;
}

.whats-float {
    position: fixed;
    /* transform: translate(108px, 0px); */
    border-radius: 30px;
    top: 250px;
    right: 0;
    width: 47px;
    overflow: hidden;
    background-color: #be1622;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.whats-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.whats-float i {
    font-size: 26px;
    color: white;
    line-height: 30px;
    padding: 8px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.whats-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.whats-float:hover i {
    transform: rotate(360deg);
}


.insta-float {
    position: fixed;
    /* transform: translate(108px, 0px); */
    border-radius: 30px;
    top: 310px;
    right: 0;
    width: 47px;
    overflow: hidden;
    background: #be1622;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.insta-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.insta-float i {
    font-size: 26px;
    color: white;
    line-height: 30px;
    padding: 8px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.insta-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.insta-float:hover i {
    transform: rotate(360deg);
}


.fb-float {
    position: fixed;
    /* transform: translate(108px, 0px); */
    border-radius: 30px;
    top: 370px;
    right: 0;
    width: 47px;
    overflow: hidden;
    background-color: #be1622;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.fb-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.fb-float i {
    font-size: 26px;
    color: white;
    line-height: 30px;
    padding: 8px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.fb-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.fb-float:hover i {
    transform: rotate(360deg);
}

/* **************************** */

.tiktok-float {
    position: fixed;
    /* transform: translate(108px, 0px); */
    border-radius: 30px;
    top: 430px;
    right: 0;
    width: 47px;
    overflow: hidden;
    background-color: #000;
    color: #FFF;
    border-radius: 2px 0 0 2px;
    z-index: 10;
    transition: all 0.5s ease-in-out;
    vertical-align: middle
}

.tiktok-float a span {
    color: white;
    font-size: 15px;
    padding-top: 8px;
    padding-bottom: 10px;
    position: absolute;
    line-height: 16px;
    font-weight: bolder;
}

.tiktok-float i {
    font-size: 26px;
    color: white;
    line-height: 30px;
    padding: 8px;
    transform: rotate(0deg);
    transition: all 0.5s ease-in-out;
    text-align: center;

}

.tiktok-float:hover {
    color: #FFFFFF;
    transform: translate(0px, 0px);
}

.tiktok-float:hover i {
    transform: rotate(360deg);
}

/* ********************************* */
.margen-menu {
    margin: 0 150px;
}

.logo-home {
    max-width: 200px
}

@media (max-width: 800px) {
    .margen-menu {
        margin: 0px;
    }

    .logo-home {
        max-width: 200px
    }
}

.radius {
    border-radius: 30px;
    text-align: center;
}
</style>

<div class="whats-float radius">
    <a href="https://wa.me/+526241176413?text=Hola%20me%20gustaría%20más%20información." target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<div class="insta-float radius">
    <a href="https://www.instagram.com/cabomunchiessjc/" target="_blank">
        <i style="margin: 0px;" class="fab fa-instagram"></i>
    </a>
</div>

<div class="fb-float radius">
    <a href="https://www.facebook.com/cabomunchiessjc" target="_blank">
        <i style="margin: 0px;" class="fab fa-facebook"></i>
    </a>
</div>
