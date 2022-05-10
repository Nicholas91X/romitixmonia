<template>
    <div>
        <div class="slideshow-container">
            <div
                v-for="picture in pictures"
                :key="picture.index"
                class="mySlides fade up"
            >
                <img :src="picture.foto" style="width: 100%" />
            </div>
            <div class="down">
                <div
                    v-for="picture in pictures"
                    :key="picture.index"
                    class="mini-img"
                >
                    <img :src="picture.foto" style="width: 100%" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home",
    data() {
        return {
            pictures: [
                { foto: "img/01 Fulvio.jpg" },
                { foto: "img/02 Monia.jpg" },
                { foto: "img/03 disco.jpg" },
                { foto: "img/04 Monia.jpg" },
                { foto: "img/06 Fulvio.jpg" },
                { foto: "img/07 Monia.jpg" },
                { foto: "img/08 Fulvio.jpg" },
            ],
        };
    },
};
</script>

<style lang="scss" scoped>
/* Slideshow container */
.slideshow-container {
    max-width: 750px;
    position: relative;
    margin: 0 auto;
    margin-top: 120px;
    z-index: -1;
    display: flex;
    flex-direction: column;
    .up {
        height: 75%;
    }
    .down {
        height: 25%;
        display: flex;
        .mini-img {
            width: calc(100% / 7);
        }
    }
    @media only screen and (max-width: 680px) {
        margin-top: 150px;
    }
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* Fading animation */
.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {
        opacity: 0.4;
    }
    to {
        opacity: 1;
    }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
    .prev,
    .next,
    .text {
        font-size: 11px;
    }
}
</style>
