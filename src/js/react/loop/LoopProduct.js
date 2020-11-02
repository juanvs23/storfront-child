import React from 'react';
import Axios from 'axios';
import { config } from '../config/api'

const loopProduct =(props)=>{
    useEffect(() => {
        Axios.get(`${props.url}wp-json/wc/store/products/categories`).then(res => {
            const data = res.data; 
            setCategories(categories.concat(data))
        })
    }, [])
    return null;
}
