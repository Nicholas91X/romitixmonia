<template>
    <div class="container">
        <div class="titolo">
            <h2>Contatti</h2>
        </div>
        <div class="social-div">
            <div class="facebook">
                <a
                    href="https://www.facebook.com/romitixmonia/"
                    target="_blank"
                >
                    <font-awesome-icon
                        :icon="{ prefix: 'fab', iconName: 'facebook' }"
                    />
                </a>
            </div>
            <div class="youtube">
                <a
                    href="https://www.youtube.com/channel/UCw1KrhtlNj9ZtZ3kUUtxpXw"
                    target="_blank"
                >
                    <font-awesome-icon
                        :icon="{ prefix: 'fab', iconName: 'youtube' }"
                    />
                </a>
            </div>
            <div class="spotify">
                <a
                    href="https://open.spotify.com/artist/7mFRsMDRKoh3lNHAqnbkrd"
                    target="_blank"
                >
                    <font-awesome-icon
                        :icon="{ prefix: 'fab', iconName: 'spotify' }"
                    />
                </a>
            </div>
            <div class="instagram">
                <a
                    href="https://www.instagram.com/romitixmonia/"
                    target="_blank"
                >
                    <font-awesome-icon
                        :icon="{ prefix: 'fab', iconName: 'instagram' }"
                    />
                </a>
            </div>
            <div class="tiktok">
                <a href="https://vm.tiktok.com/ZML9LNwUX/" target="_blank">
                    <font-awesome-icon
                        :icon="{ prefix: 'fab', iconName: 'tiktok' }"
                    />
                </a>
            </div>
        </div>
        <div class="mail">
            <a href="mailto:recipient@email.com">
                <font-awesome-icon icon="fa-solid fa-envelope" />
                recipient@mail.com
            </a>
        </div>
        <div class="mobile" style="color: white">
            <font-awesome-icon icon="fa-solid fa-mobile-screen" />
            +39 3332657538
        </div>
    </div>
</template>

<script>
export default {
    name: "Contatti",
    // methods: {
    //     submitForm(e) {
    //         console.warn(this.form);
    //         e.preventDefault();
    //         axios
    //             .post("/contacts", this.form)
    //             .then((res) => {
    //                 console.log(res);
    //             })
    //             .catch((error) => {
    //                 // error.response.status Check status code
    //             })
    //             .finally(() => {
    //                 //Perform action in always
    //             });
    //     },
    // },
};
</script>

<style lang="scss" scoped>
.container {
    display: flex;
    width: 80%;
    margin: 200px auto;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    padding: 20px;
    .titolo {
        color: white;
        text-align: center;
        margin-bottom: 10px;
    }
    .social-div {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
        div {
            margin: 10px;
            border: 1px solid white;
            padding: 5px;
            border-radius: 50%;
        }
        div:hover {
            transform: scale(1.1);
        }
    }

    .mail,
    .mobile {
        margin-bottom: 20px;
        border: 1px solid white;
        padding: 8px 10px;
        border-radius: 20px;
    }
    @media only screen and (max-width: 680px) {
        margin-top: 200px;
    }
}
</style>
