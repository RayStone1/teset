import munrib from "../../api";

const state= {
    mun_one:null,
    mun_one_list:null,
}
const getters= {
    mun_one_list:state=>{
        return state.mun_one_list
    },
    mun_one:state=>{
        return state.mun_one
    },
}
const mutations= {
    setMunOneList(state,mun_one){
        state.mun_one_list=mun_one
    },
    setMunOne(state,mun_one){
        state.mun_one=mun_one
    },

}
const actions= {
    async getMunOneList({commit}){
        const res=await munrib.get("/mun-one")
        commit('setMunOneList',res.data.data)
    },
    async getMunOne({commit},mun_one){
        const res=await munrib.get(`/mun-one/${mun_one}`)
        commit('setMunOne',res.data.data)
    },
}
export default  {
    state,mutations,getters,actions
}
