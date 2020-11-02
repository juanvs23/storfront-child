import React from 'react';
import { config } from '../config/api'
import ButtonsTabs from './ButtonsTabs';
import FunctionalsProvider from '../context/context'


const LoopComponent =(props)=>{
    

   
    return(
            <FunctionalsProvider>
                    <section id="nuestros-productos" className="products-react">
                         <div className="products-react-title"><h2>{props.title}</h2></div>
                         <div className="button-tabs-container">
                            <ButtonsTabs url={config.url}/>                  
                        </div>
                    </section>
            </FunctionalsProvider>        
    );
}

export default LoopComponent;