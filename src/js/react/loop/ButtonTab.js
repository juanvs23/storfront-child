import React, { useContext }from 'react';
import { FunctionalsContent } from '../context/context'

 

const  ButtonsTab=(props)=>{
    const {setActive}= useContext(FunctionalsContent)
    let {name,slug,id,count}=props.cat;
   
    const chanceTabClick=()=>{
        setActive(props.indicador)


    }
   const contProduct=count ? `(${count})`:''
  
return(<button onClick={chanceTabClick} id={`tab-${name}`}className={`button-list ${props.activetab}`}>{ name } {contProduct}</button>)
}

export default ButtonsTab