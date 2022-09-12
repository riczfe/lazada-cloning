let main_data;

function fetchData(min_value, max_value, search_keyword){
   var requestOptions = {
      method: 'GET',
      redirect: 'follow'
    };
    
    fetch(`api.php?min=${min_value}&max=${max_value}&q=${search_keyword}`, requestOptions)
      .then(response => response.json())
      .then(result => renderProduct(result))
      .catch(error => console.log('error', error));
}

function renderProduct(product_list){
   let output_html = ""
   document.getElementById("num").innerHTML = product_list.length;
   for(let item of product_list){
      let newPrice = item.price.toLocaleString('us', {minimumFractionDigits: 0, maximumFractionDigits: 0})

      output_html += `
      <a href="${item.link}">
         <div class="product">
            <img src="${item.image}" alt="${item.description}">
            <p class="title">${item.title}</p>
            <p class="description">${item.description}</p>
            <p class="price">
               <span>${newPrice}</span> ₫
            </p>
         </div>
      </a>
      `;
   }
   if(product_list.length == 0){
      output_html = '<p class="center-full"> Not found any item match your filter</p>';
   }
   document.querySelector(".products").innerHTML = output_html;
}
function filterSearch(){
   let min = document.getElementById("min").value;
      let max = document.getElementById("max").value;

      if((min == '') || (min == undefined)){
         min = -(Number.MAX_SAFE_INTEGER-1);
      }
      if ((max == '') || (max == undefined)){
         max = Number.MAX_SAFE_INTEGER - 1;   
      }
      min = parseInt(min);
      max = parseInt(max);
      search = document.getElementById("search").value;
      fetchData(min, max, search);
}
document.addEventListener("DOMContentLoaded", function() {
   fetchData(-Number.MAX_SAFE_INTEGER, Number.MAX_SAFE_INTEGER);

   
   document.getElementById("filter_apply").addEventListener("click", function(){
      filterSearch();
   })
   document.getElementById("btn_search").addEventListener("click", function(){
      filterSearch();
   })
   document.addEventListener('keydown', function(e) {
      
      if(e.keyCode == 13) {
         filterSearch();
      } 
  }); 

 });

