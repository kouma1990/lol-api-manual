<!DOCTYPE html>
<html>
    <?php include("header.html"); ?>

    <body>
        <div id="app">
            <?php include("navbar.html"); ?>
            <div class="container" style="padding-top: 70px">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item"><router-link to="/champion">CHAMPION-V1.2</router-link></li>
                            <li class="list-group-item"><router-link to="/champion-mastery">CHAMPIONMASTERY</router-link></li>
                            <li class="list-group-item"><router-link to="/current-game">CURRENT-GAME-V1.0</router-link></li>
                        </ul>
                    </div>
                    <div class="col-md-9">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <?php include("footer.html"); ?>
    <script>
        const Champion ={ template: `<?php include("api_document/champion.html"); ?>` }
        const ChampionMastery = { template: `<?php include("api_document/champion_mastery.html"); ?>` }
        const CurrentGame = { template: `<?php include("api_document/current-game.html"); ?>` }
        const routes = [
            { path: '/', component: Champion},
            { path: '/champion', component: Champion },
            { path: '/champion-mastery', component: ChampionMastery },
            { path: '/current-game', component: CurrentGame }
        ]
        const router = new VueRouter({
            routes // routes: routes の短縮表記
        })
        const app = new Vue({
            router
        }).$mount('#app')
        /*
        var app = new Vue({
            el: '#app',
            data: {
                api_key:"9582952f-1565-4891-9d5a-87f15c1e04eb",
            }
        })
        */
    </script>
</html>