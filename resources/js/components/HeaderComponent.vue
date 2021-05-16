<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container pt-3">
            <nav class="navvar navbar-dark bg-dark navbar-expand-lg">
                <router-link v-bind:to="{name: 'Home'}">
                    <a class="navbar-brand">内藤昂佑の暇つぶしサイト</a>
                </router-link>
                <ul class="navbar-nav">
                    <router-link v-bind:to="{name: 'SelfIntroduction'}">
                        <li class="nav-item"><a class="nav-link">自己紹介</a></li>
                    </router-link>
                    <li class="nav-item"><a class="nav-link" href="#">制作物</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">日記</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>
