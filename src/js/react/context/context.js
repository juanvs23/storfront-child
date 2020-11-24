import React, { createContext,useState } from 'react'


export const FunctionalsContent =createContext();

const FunctionalsProvider=({children})=>{
    const [categories, setCategories] = useState([{name:'Todos',id:0 ,count:null}])
    const  [active, setActive] = useState(0)
    const [catActive,setCatActive] =useState('')
    
    return(
    <FunctionalsContent.Provider
        value={{
            categories, setCategories,
            active, setActive,
            catActive,setCatActive
        }}

    >
        {children}
    </FunctionalsContent.Provider>)
}
export default FunctionalsProvider;