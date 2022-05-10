<template>
    <header>
        <nav>
            <div class="left">
                <ul>
                    <li class="social facebook">
                        <a
                            href="https://www.facebook.com/romitixmonia/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'facebook' }"
                            />
                        </a>
                    </li>
                    <li class="social youtube">
                        <a
                            href="https://www.youtube.com/channel/UCw1KrhtlNj9ZtZ3kUUtxpXw"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'youtube' }"
                            />
                        </a>
                    </li>
                    <li class="social spotify">
                        <a
                            href="https://open.spotify.com/artist/7mFRsMDRKoh3lNHAqnbkrd"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'spotify' }"
                            />
                        </a>
                    </li>
                    <li class="social instagram">
                        <a
                            href="https://www.instagram.com/romitixmonia/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'instagram' }"
                            />
                        </a>
                    </li>
                    <li class="social tiktok">
                        <a
                            href="https://vm.tiktok.com/ZML9LNwUX/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'tiktok' }"
                            />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="center">
                <ul class="first-list">
                    <li>
                        <router-link :to="{ name: 'team' }">Team</router-link>
                    </li>
                    <li>
                        Videos
                        <ul class="sub-menu">
                            <li>
                                <router-link :to="{ name: 'rmxtr' }"
                                    >RMxtr</router-link
                                >
                            </li>
                            <li>
                                <router-link :to="{ name: 'lunigiana-calling' }"
                                    >Lunigiana Calling</router-link
                                >
                            </li>
                            <li>
                                <router-link :to="{ name: 'cover-monia' }"
                                    >Cover Monia</router-link
                                >
                            </li>
                        </ul>
                    </li>
                    <li class="logo">
                        <a href="http://127.0.0.1:8000/">
                            <img src="img/Logo sito 2022.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="#">Download</a>
                    </li>
                    <li>
                        <router-link :to="{ name: 'foto' }">Foto</router-link>
                    </li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li>
                        <router-link :to="{ name: 'contatti' }"
                            >Contatti</router-link
                        >
                    </li>
                </ul>
            </div>
        </nav>
        <div class="menu-mobile">
            <div class="social-menu">
                <ul>
                    <li class="social facebook">
                        <a
                            href="https://www.facebook.com/romitixmonia/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'facebook' }"
                            />
                        </a>
                    </li>
                    <li class="social youtube">
                        <a
                            href="https://www.youtube.com/channel/UCw1KrhtlNj9ZtZ3kUUtxpXw"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'youtube' }"
                            />
                        </a>
                    </li>
                    <li class="social spotify">
                        <a
                            href="https://open.spotify.com/artist/7mFRsMDRKoh3lNHAqnbkrd"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'spotify' }"
                            />
                        </a>
                    </li>
                    <li class="social instagram">
                        <a
                            href="https://www.instagram.com/romitixmonia/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'instagram' }"
                            />
                        </a>
                    </li>
                    <li class="social tiktok">
                        <a
                            href="https://vm.tiktok.com/ZML9LNwUX/"
                            target="_blank"
                        >
                            <font-awesome-icon
                                :icon="{ prefix: 'fab', iconName: 'tiktok' }"
                            />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="http://127.0.0.1:8000/">
                    <img src="img/Logo sito 2022.png" alt="" />
                </a>
            </div>
            <div class="icon">
                <font-awesome-icon
                    @click="isOpen = !isOpen"
                    icon="fa-solid fa-bars"
                />
            </div>
            <div>
                <collapse-transition>
                    <div v-show="isOpen">
                        <ul class="sub-menu">
                            <li class="menu-bar">
                                <router-link :to="{ name: 'rmxtr' }"
                                    >RMxtr</router-link
                                >
                            </li>
                            <li class="menu-bar">
                                <router-link :to="{ name: 'lunigiana-calling' }"
                                    >Lunigiana Calling</router-link
                                >
                            </li>
                            <li class="menu-bar">
                                <router-link :to="{ name: 'cover-monia' }"
                                    >Cover Monia</router-link
                                >
                            </li>
                            <li class="menu-bar">
                                <router-link :to="{ name: 'foto' }"
                                    >Foto</router-link
                                >
                            </li>
                            <li class="menu-bar">
                                <router-link :to="{ name: 'team' }"
                                    >Team</router-link
                                >
                            </li>
                            <li class="menu-bar">
                                <router-link :to="{ name: 'contatti' }"
                                    >Contatti</router-link
                                >
                            </li>
                        </ul>
                    </div>
                </collapse-transition>
            </div>
        </div>
    </header>
</template>

<script>
import { CollapseTransition } from "@ivanv/vue-collapse-transition";

export default {
    name: "Header",
    components: {
        CollapseTransition,
    },
    data() {
        return {
            isOpen: false, // closed by default
        };
    },
};
</script>

<style lang="scss" scoped>
header {
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 10px;
    background-color: black;
}
.menu-mobile {
    display: none;
    .icon {
        padding-bottom: 10px;
        font-size: 24px;
    }
}
@media screen and (max-width: 680px) {
    .menu-mobile {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: white;
        text-align: center;
        .social-menu {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .logo {
            width: 40%;
            padding: 10px;
            img {
                width: 100%;
            }
        }
        .menu-bar,
        .social {
            list-style: none;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .social:hover {
            transform: scale(1.2);
        }
        .menu-bar:hover {
            border-bottom: 1px solid white;
            border-top: 1px solid white;
        }
    }
    nav {
        display: none;
    }
}
</style>
