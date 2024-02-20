const block = document.querySelector('.a');



block.addEventListener('click', hello);
block.addEventListener('mouseenter', hello);
function hello(event){
    console.log(event.type);
    console.log(event.currentTarget);
    console.log(event.clientX);
    console.log(event.clientY);
    console.log(event);

}


