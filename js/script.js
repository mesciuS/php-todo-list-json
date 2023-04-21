const { createApp } = Vue;

createApp({
    data() {
        return {
            
        }
    },

    methods: {
        getSquad() {
            axios.get('server.php').then(res => {
                console.log(res);
            }); 
        },
    },

}).mount('#app');