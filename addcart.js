const product = [
   {
      id: 0,
      image: 'images/01.png',
      title: 'Z Filp Foldable Room',
      price: 120,
   },
   {
      id: 1,
      image: 'images/o2.png',
      title: 'Z Filp Foldable Room2',
      price: 140,
   },
   {
      id: 2,
      image: 'images/o3.png',
      title: 'Z Filp Foldable Room3',
      price: 160,
   },
   {
      id: 3,
      image: 'images/o4.png',
      title: 'Z Filp Foldable Room4',
      price: 180,
   }
];

const categories = [...new setInterval(product.map((item)=>
      {return item}))]
      let i = 0;
document.getElementById('root').innerHTML = categories.map((item)=> {
   var {images, title, price} = item;
   return (
      `<div class='box'>
         <div class='img-box'>
            <img class='images' src=${images}></img>
         </div>
         <div class='bottom'>
            <p>${title}</p>
            <h2>$ ${price}.00</h2>
         </div>
      </div>`
   )
})