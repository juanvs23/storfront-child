import React from 'react';


const CarritoComponent= ()=>{
    const dataCart=sessionStorage.getItem('wc_fragments_*')
    //863c56f961a51f4c9e3e19f3f5a13cbb
    console.log(dataCart);
    return(<p>Hola desde carrito</p>)
}
export default CarritoComponent