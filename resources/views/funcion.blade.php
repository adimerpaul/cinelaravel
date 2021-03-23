<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multicines PLaza</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div id="app">
{{--    <example-component></example-component>--}}
    <Example></Example>
</div>
<script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
<script>
    const slides=document.querySelectorAll('.slides');
    // console.log(slides);
    const dots=document.querySelectorAll('.column');
    let slideIndex=0;
    showSlide(slideIndex);
    function showSlide(n) {
        if (slideIndex>slides.length-1){
            slideIndex=0;
        }
        if (slideIndex<0){
            slideIndex=slides.length-1;
        }
        for (let i=0;i<slides.length;i++){
            slides[i]['style']['display']="none";
        }
        for (let i=0;i<dots.length;i++){
            dots[i].className=dots[i].className.replace("active","");
        }
        slides[slideIndex]['style']['display']="block";
        dots[slideIndex].className+=" active";
    }
    dots.forEach((item,index)=>{
        item.addEventListener('click',()=>{
            showSlide(slideIndex=index);
        })
    });
    const nav =document.querySelector('.nav');
    const prev =document.querySelector('.prev');
    const next =document.querySelector('.next');
    next.addEventListener('click',()=>{
        // console.log(dots[0].offsetWith)
        nav.scrollLeft+=dots[0].offsetWidth;
        showSlide(slideIndex+=1);
        if (slideIndex===0){
            nav.scrollLeft=0;
        }
    });
    prev.addEventListener('click',()=>{
        nav.scrollLeft-=dots[0].offsetWidth;
        showSlide(slideIndex-=1);
        if (slideIndex===slides.length-1){
            nav.scrollLeft=nav.scrollWidth;
        }
    });
</script>
</body>
</html>
