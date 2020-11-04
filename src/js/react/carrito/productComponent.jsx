import React from 'react'

const ProductComponent =({product})=>{
    console.log(product)
    return(
        <div className="productItem">
            <picture>
                <source srcSet={product.images[0].srcset}/>
                <img src={product.images[0].srcset} alt={product.name}/>
            </picture>
            <div className="productContent">
            <h5 className="productName">{product.name}</h5>

            </div>


        </div>
    )
}
export default ProductComponent;