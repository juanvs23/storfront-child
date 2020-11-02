import Axios from 'axios';
import React,{useEffect,useContext} from 'react';
import ButtonsTab from './ButtonTab'
import { FunctionalsContent } from '../context/context'

const ButtonsTabs=(props)=>{
    const {setCategories, categories,active}= useContext(FunctionalsContent)
    //const [categories, setCategories] = useState([])
    //const  [active, setActive] = useState(0)
    useEffect(() => {
        Axios.get(`${props.url}wp-json/wc/store/products/categories`).then(res => {
            const data = res.data; 
            setCategories(categories.concat(data))
        })
    }, [])
     console.log(categories)
     
return (
    <div className="product-list-tab">
        {
           categories.map((category,i)=>{
            const isActivate=active===i ? 'active':'';
            return(<ButtonsTab  indicador={i}  activetab={isActivate} key={category.id} cat={category} />)
           })
        }
    </div>
)
}
export default ButtonsTabs