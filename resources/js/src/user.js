const app = new Vue({
    el: "#app",
    data: {
        list:[],
    },
    mounted () {
        const self = this
        axios.get('/list').then(res => self.list = res.data)
    },
    methods:{
    
    }
})