<template>
    <header>
        <nav class="navbar navbar-expands-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Boolpress</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent" >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div  id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                    
                    <li v-for="(item, index) in menuItems" class="nav-item" :key="index">
                        <a class="nav-link" :href="item.link">{{item.label}}</a>
                    </li>
                </ul>
            </div>

        </nav>

    </header>
</template>

<script>
    export default {
        name: 'MyHeader',
        data(){
            return {
            menuItems:[{
                label:'Home',
                link:'#'
            },
            {
                label:'Blog',
                link:'#'
            },
            {
                label:'About us',
                link:'#'
            },
            {
                label:'Contacs',
                link:'#'
            },
        ]
        }

    }
}

</script>

<style>


</style>