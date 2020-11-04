import React,{useContext,useState,useEffect} from 'react';
import Axios from 'axios';
import { config } from '../config/api'
import FunctionalsProvider from '../context/context'
import ProductComponent from './productComponent'
import { FunctionalsContent } from '../context/context'

const CarritoComponent= (props)=>{
    const [carrihnoitems,setCarrihnoitems]=useState([])
  
    useEffect(() => {
        Axios.get(`${config.url}wp-json/wc/store/cart`,{
            params:{
      
            }
        }).then(resp=>setCarrihnoitems(resp.data.items))
        
     
    }, [])
  //console.log(carrihnoitems)
    return(
    <FunctionalsProvider>
        <h4 className="mini-cart-title" >Carinho</h4>
        <div className="carrinho-container">
            {
                carrihnoitems.map(item=>{
                    
                   return(<ProductComponent key={item.id} product={item} />)
                })
            }
        </div>
    </FunctionalsProvider>
    )
}
export default CarritoComponent