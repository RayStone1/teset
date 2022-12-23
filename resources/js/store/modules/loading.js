const state= {
    loadingTable:null,
}
const getters= {
    loadingTable:state=>{
        return state.loadingTable
    },
}
const mutations= {
    isLoadingTable(state,load){
        state.loadingTable=load
    },

}
const actions= {

}
export default  {
    state,mutations,getters,actions
}
