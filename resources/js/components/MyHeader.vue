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
                        <router-link class="nav-link" :to="{name: item.routeName}">{{item.label}}</router-link>
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
            menuItems:[
                {
                label:'Home',
                routeName:'home'
            },
            
            {
                label:'Blog',
                routeName:'blog'
            },
            {
                label:'About us',
                routeName:'aboutus'
            },
            {
                label:'Contacs',
                routeName:'contact'
            },
        ]
        }

    }
}

</script>

<style>


</style>