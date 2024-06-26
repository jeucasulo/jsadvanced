<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<button id="addNewProductBtn">Add New</button> <br>

<div id="addNewProductDiv">
    <div class="productDiv">
        <span>price:123</span>
        <span>name:abc</span>
        <span class="getData">GetData</span>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div id="getDataDiv">f</div>

<button id="createDatatableId">createDatatableId</button>
<button id="getDatatableId">getDatatableId</button>



<script>
$(document).ready(function(){

    $(document).on("click", ".getData", function(){
        // data = event.target.closest('div')
        // console.log(data.childNodes); 
        // console.log(event.target.previousSibling)
        // console.log(event.target.previousElementSibling)
        // console.log(event.target.parentElement) // um acima
        console.log('first') // um acima
        console.log(event.target.parentElement.firstElementChild) // um NIVEL acima (hierarquia)
        console.log('second') // um acima
        console.log(event.target.parentElement.firstElementChild.nextElementSibling) // um abaixo (ordem)

        
    });


    $(document).on("click", "#addNewProductBtn", function(){
        
        var newSpanPrice = document.createElement('span')
        newSpanPrice.innerText='price:456';
        var newSpanName =document.createElement('span')
        newSpanName.innerText='name:dfg';
        var newSpanGetData =document.createElement('span')
        newSpanGetData.innerText='GetData';
        newSpanGetData.className='getData';
        newSpanGetData.setAttribute('datatableId','datatableID123');

        var newProductDiv= document.createElement('div');
        newProductDiv.className='productDiv'
        newProductDiv.appendChild(newSpanPrice);
        newProductDiv.appendChild(newSpanName);
        newProductDiv.appendChild(newSpanGetData);


        var addNewProductDiv =document.getElementById('addNewProductDiv');
        addNewProductDiv.appendChild(newProductDiv);
    });
    $(document).on("click", "#getDatatableId", function(){
        var el = document.getElementById('idGetData');
        console.log('el');
        console.log(el);
        console.log(el.id);
        console.log(el.getAttribute('idDatatable'));

        el2 = document.querySelectorAll('[idDatatable="idDatatableGetData"]');
        console.log('el2');
        console.log(el2);


        
    });
    $(document).on("click", "#createDatatableId", function(){
        console.log('sadf');
        
        var newGetDataElement = document.createElement('span')
        newGetDataElement.innerText='GET DATA SPAN';
        newGetDataElement.setAttribute('id','idGetData')
        newGetDataElement.setAttribute('idDatatable','idDatatableGetData')
        var getDataDiv = document.getElementById('getDataDiv');
        getDataDiv.appendChild(newGetDataElement)


    });

});


</script>

    
</body>
</html>