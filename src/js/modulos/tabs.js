export const tabsPayment =()=>{
    let radioButtons= document.querySelectorAll('ul.wc_payment_methods.payment_methods.methods li input[type="radio"].input-radio'),
    paymentContent=document.querySelector('#order_review'),
    contenedorUl = document.createElement('ul');
    contenedorUl.classList="lista-tab";
   if(document.querySelector('#payment')){
            paymentContent.insertBefore(contenedorUl,document.querySelector('#payment'));
 //console.log( paymentContent);
 radioButtons.forEach((radioButton,i)=>{
  let li= document.createElement('li');

  li.setAttribute('id', `payment-${i}`);
    let text= document.querySelector(`label[for="${radioButton.id}"]`).innerText;
   li.innerHTML=text;

 contenedorUl.append(li)
  document.querySelector(`#payment-${i}`).addEventListener('click',()=>{
    document.querySelector('.is-active').classList.remove('is-active');
    document.querySelector(`#payment-${i}`).classList.add('is-active');  
    document.querySelector(`label[for="${radioButton.id}"]`).click()
  }) 
 });
 contenedorUl.querySelector('#payment-0').classList.add('is-active');
   }


}