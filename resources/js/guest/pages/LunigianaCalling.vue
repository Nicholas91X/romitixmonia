<template>
    <div class="container">
        <ul>
            <li v-for="video in videos" :key="video.id">
                {{ video.titolo }}
                <iframe
                    :src="`https://www.youtube.com/embed/${video.url}`"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "LunigianaCalling",
    data() {
        return {
            videos: [],
        };
    },
    created() {
        axios.get("/api/lunigianaCalling").then((response) => {
            this.videos = response.data;
        });
    },
};
</script>

<style lang="scss" scoped>
.container {
    width: 80%;
    margin: 0 auto;
    ul {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        margin-top: 120px;
        li {
            width: calc(100% / 3 - 20px);
            margin: 0 10px;
            iframe {
                width: 100%;
                height: 220px;
            }
        }
        @media screen and (max-width: 680px) {
            li {
                width: 100%;
                margin: 0 10px;
                iframe {
                    width: 100%;
                    height: 220px;
                }
            }
        }
    }
}
</style>
