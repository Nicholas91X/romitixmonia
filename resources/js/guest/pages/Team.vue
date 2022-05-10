<template>
    <div class="container">
        <div
            class="autori-scheda"
            v-for="picture in pictures"
            :key="picture.index"
        >
            <div class="img">
                <img :src="'storage/' + picture.path" alt="" />
            </div>
            <div class="descrizione">
                <div class="nome">{{ picture.nome }}</div>
                <div class="ruolo">{{ picture.ruolo }}</div>
                <div class="social-ig">
                    IG:
                    <a :href="picture.social" target="_blank">{{
                        picture.social
                    }}</a>
                </div>
                <div class="testo">{{ picture.testo }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Team",
    data() {
        return {
            pictures: [],
        };
    },
    created() {
        axios.get("/api/team").then((response) => {
            this.pictures = response.data;
        });
    },
};
</script>

<style lang="scss" scoped>
.container {
    width: 70%;
    margin: 150px auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    .autori-scheda {
        max-height: 250px;
        width: calc(100% / 2 - 100px);
        margin-bottom: 50px;
        .img {
            text-align: center;
            img {
                border-radius: 50%;
                width: 100%;
            }
        }
        .descrizione {
            color: white;
            width: 100%;
            margin-top: 30px;
            text-align: center;
            line-height: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            div {
                margin-bottom: 10px;
            }
        }
    }
    @media only screen and (max-width: 860px) {
        .autori-scheda {
            width: 100%;
        }
    }
}
</style>
