import axios from "axios";
import router from "./router";

const munrib=axios.create({
    baseURL:'/api'
})
munrib.interceptors.response.use({},err=>{

    if(err.response.status===401 || err.response.status===419 ){
        router.push({name:'login'})
    }
})
export default munrib
