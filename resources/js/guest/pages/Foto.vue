<template>
    <div class="container">
        <div v-for="picture in pictures" :key="picture.index" class="img">
            <img :src="'storage/' + picture.path" alt="" />
        </div>
    </div>
</template>

<script>
export default {
    name: "Foto",
    data() {
        return {
            pictures: [],
        };
    },
    created() {
        axios.get("/api/foto").then((response) => {
            this.pictures = response.data;
        });
    },
};
</script>

<style lang="scss" scoped>
.container {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    margin: 120px auto;
    justify-content: space-around;
    .img {
        width: calc(100% / 3 - 20px);
        margin-bottom: 20px;
        img {
            width: 100%;
            height: 100%;
        }
    }
    @media screen and (max-width: 680px) {
        .img {
            width: 100%;
            margin-bottom: 20px;
            img {
                width: 100%;
                height: 100%;
            }
        }
    }
}
</style>
