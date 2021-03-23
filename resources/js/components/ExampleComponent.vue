<template>
    <div>
        <header>
            <input type="checkbox" id="chk1">
            <div class="logo">
                <h2><img style="margin-top: 15px" src="img/logo.png" width="140" alt=""></h2>
            </div>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Movies</a></li>
                <li><a href="">New</a></li>
                <li><a href="">My favoritos</a></li>
                <li><a href="">Login</a></li>
                <label for="chk1" class="menu-close">
                    <i class="fa fa-times"></i>
                </label>
            </ul>
            <div class="search">
                <input type="text" name="search" id="search" required placeholder="Enter your search">
                <button type="submit">Search</button>
            </div>
            <label for="chk1" class="menu-open">
                <i class="fa fa-bars"></i>
            </label>
        </header>
        <section>
            <div class="container" >
                <div id='lista1' name='lista1'>
                </div>
            </div>
            <div class="row">
                <h2>Recommend</h2>
                <div class="nav">
                    <div class="nav-bar">
                        <div id='vista' name='vista'>
                        </div>
                    </div>
                </div>
                <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </div>
        </section>
    </div>
</template>

<script>

export default {
    data:function (){
        return {
            peliculas:[],
        }
    },
    mounted(){
         const slides=document.querySelectorAll('.slides');
        console.log(slides);
    },
    created(){
        this.cargar();
       
    },
    methods: {
        cargar(){
            var lista='';
            var vista='';
        axios.get('/funcion').then(res=>{
             console.log(res.data);
            this.peliculas=res.data;

            this.peliculas.forEach(function(row,index){
                lista+='<div class="slides">';
                    lista+='<img src="img/'+row.idPelicula+'.jpg" alt="">';
                    lista+='<div class="content">';
                        lista+='<h2>'+row.nombre+'</h2>';
                        lista+='<p>Lorem quia vero.</p>';
                        lista+='<a href="">';
                        lista+='<i class="fa fa-play"></i>FUNCIONES</a></div></div>';
            
            vista+='<div class="column"><img src="img/'+row.idPelicula+'.jpg" alt=""></div>';
                
            
                
            });
            console.log(lista);
            console.log(vista);
            $('#lista1').html(lista);
            $('#vista').html(vista);

        });

    }
    }
}


</script>
