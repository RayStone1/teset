<template>
    <v-icon
    @click="logOut"
    >
        mdi-logout
    </v-icon>
</template>

<script>
export default {
    name: "LogOut",
    methods:{
        logOut(){

            axios.post('/logout')
                .then(res=>{
                    localStorage.removeItem('X-XSRF-TOKEN')
                    this.$router.push({name:"login"})
                })
        }
    }
}
</script>

<style scoped>

</style>
